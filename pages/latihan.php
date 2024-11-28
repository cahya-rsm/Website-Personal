<?php
session_start();
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
require_once __DIR__ . '/../config/database.php';
require_once '../config/database.php';

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login_latihan.php');
    exit;
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once '../questions/questions_math.php';

// Initialize variables
$score = 0;
$correct_answers = 0;
$time_taken = 0;

// Reset quiz
if (isset($_GET['restart'])) {
    session_unset();
    session_destroy();
    session_start();
    header("Location: login_latihan.php");
    exit;
}

// Initialize quiz if not started
if (!isset($_SESSION['quiz_questions'])) {
    $shuffled_questions = $math_questions;
    shuffle($shuffled_questions);
    $_SESSION['quiz_questions'] = array_slice($shuffled_questions, 0, 5);
    $_SESSION['current_index'] = 0;
    $_SESSION['user_answers'] = array_fill(0, 5, '');
    $_SESSION['start_time'] = time();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['answer'])) {
        $_SESSION['user_answers'][$_SESSION['current_index']] = $_POST['answer'];
    }

    if (isset($_POST['goto'])) {
        $_SESSION['current_index'] = intval($_POST['goto']);
    } elseif (isset($_POST['next']) && $_SESSION['current_index'] < 4) {
        $_SESSION['current_index']++;
    } elseif (isset($_POST['prev']) && $_SESSION['current_index'] > 0) {
        $_SESSION['current_index']--;
    } elseif (isset($_POST['submit'])) {
        $_SESSION['end_time'] = time();

        // Calculate results
        $correct_answers = 0;
        foreach ($_SESSION['quiz_questions'] as $index => $question) {
            if (
                isset($_SESSION['user_answers'][$index]) &&
                $_SESSION['user_answers'][$index] === $question['jawaban_benar']
            ) {
                $correct_answers++;
            }
        }
        $score = ($correct_answers / 5) * 100;

        // Save to database
        try {
            $stmt = $pdo->prepare("INSERT INTO hasil_latihan (nama, email, nilai, waktu_mulai, waktu_selesai) 
                                 VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([
                $_SESSION['user']['nama'],
                $_SESSION['user']['email'],
                $score,
                $_SESSION['waktu_mulai'],
                date('Y-m-d H:i:s')
            ]);
        } catch (PDOException $e) {
            // Handle error silently
        }

        header("Location: latihan.php?show_result=1");
        exit;
    }
}

// Calculate results for display
if (isset($_GET['show_result'])) {
    $correct_answers = 0;
    foreach ($_SESSION['quiz_questions'] as $index => $question) {
        if (
            isset($_SESSION['user_answers'][$index]) &&
            $_SESSION['user_answers'][$index] === $question['jawaban_benar']
        ) {
            $correct_answers++;
        }
    }
    $score = ($correct_answers / 5) * 100;
    $time_taken = isset($_SESSION['end_time']) ?
        ($_SESSION['end_time'] - $_SESSION['start_time']) : 0;
}

$title = "Latihan - MateriKu";
$page = "latihan";
ob_start();
?>

<div class="content-wrapper">

    <div class="main-content">
        <div class="container">
            <?php if (!isset($_GET['show_result'])): ?>
                <div class="quiz-header">
                    <h1>Lembar Latihan Soal</h1>
                    <h2>Perbandingan Senilai</h2>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: <?php echo ($_SESSION['current_index'] + 1) * 20; ?>%"></div>
                    </div>
                    <div class="question-nav">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <form method="post" style="display: inline;">
                                <input type="hidden" name="goto" value="<?php echo $i; ?>">
                                <?php if (isset($_SESSION['user_answers'][$_SESSION['current_index']])): ?>
                                    <input type="hidden" name="answer" value="<?php echo $_SESSION['user_answers'][$_SESSION['current_index']]; ?>">
                                <?php endif; ?>
                                <button type="submit"
                                    class="<?php echo $i === $_SESSION['current_index'] ? 'active' : ($_SESSION['user_answers'][$i] !== '' ? 'answered' : ''); ?>">
                                    <?php echo $i + 1; ?>
                                </button>
                            </form>
                        <?php endfor; ?>
                    </div>
                </div>

                <form method="post">
                    <div class="question">
                        <?php
                        $current_question = $_SESSION['quiz_questions'][$_SESSION['current_index']];
                        echo htmlspecialchars($current_question['pertanyaan']);
                        ?>
                    </div>

                    <div class="options">
                        <?php foreach ($current_question['pilihan'] as $option): ?>
                            <label class="option">
                                <input type="radio" name="answer" value="<?php echo htmlspecialchars($option); ?>"
                                    <?php echo ($_SESSION['user_answers'][$_SESSION['current_index']] === $option) ? 'checked' : ''; ?>>
                                <?php echo htmlspecialchars($option); ?>
                            </label>
                        <?php endforeach; ?>
                    </div>

                    <div class="navigation">
                        <?php if ($_SESSION['current_index'] > 0): ?>
                            <button type="submit" name="prev" class="nav-btn" onclick="saveAndNavigate('prev')">
                                <i class="fas fa-arrow-left"></i> Sebelumnya
                            </button>
                        <?php else: ?>
                            <div></div>
                        <?php endif; ?>

                        <?php if ($_SESSION['current_index'] < 4): ?>
                            <button type="submit" name="next" class="nav-btn" onclick="saveAndNavigate('next')">
                                Selanjutnya <i class="fas fa-arrow-right"></i>
                            </button>
                        <?php else: ?>
                            <button type="submit" name="submit" class="nav-btn submit-btn">
                                Selesai <i class="fas fa-check"></i>
                            </button>
                        <?php endif; ?>
                    </div>
                </form>

            <?php else: ?>
                <div class="result">
                    <h1>Hasil Latihan</h1>
                    <div class="score-display">
                        <?php echo isset($score) ? number_format($score, 1) : '0.0'; ?>%
                    </div>
                    <p>Jawaban Benar: <?php echo isset($correct_answers) ? $correct_answers : 0; ?> dari 5</p>
                    <p>Waktu Pengerjaan:
                        <?php
                        $minutes = isset($time_taken) ? floor($time_taken / 60) : 0;
                        $seconds = isset($time_taken) ? ($time_taken % 60) : 0;
                        echo $minutes . ' menit ' . $seconds . ' detik';
                        ?>
                    </p>

                    <?php if ($score >= 80): ?>
                        <p>Excellent! Anda sudah menguasai materi perbandingan senilai dengan sangat baik!</p>
                    <?php elseif ($score >= 60): ?>
                        <p>Bagus! Tetap berlatih untuk lebih meningkatkan pemahaman Anda!</p>
                    <?php else: ?>
                        <p>Jangan menyerah! Cobalah pelajari kembali materi dan latihan lagi!</p>
                    <?php endif; ?>

                    <a href="?restart=1" class="restart-btn">Coba Lagi</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
    .quiz-header {
        text-align: center;
        margin-bottom: 30px;
        border-bottom: 2px solid #eee;
        padding-bottom: 20px;
    }

    .progress-bar {
        width: 100%;
        height: 10px;
        background: #f0f0f0;
        border-radius: 5px;
        margin: 20px 0;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        background: linear-gradient(to right, #6a89cc, #78e08f);
        transition: width 0.3s ease;
    }

    .question-nav {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin: 20px 0;
        flex-wrap: wrap;
    }

    .question-nav button {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: none;
        background: #f0f0f0;
        color: #2c3e50;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .question-nav button.active {
        background: #6a89cc;
        color: white;
    }

    .question-nav button.answered {
        background: #78e08f;
        color: white;
    }

    .question {
        font-size: 18px;
        margin: 20px 0;
        padding: 20px;
        background: #f8f9fa;
        border-radius: 10px;
    }

    .options {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin: 20px 0;
    }

    .option {
        padding: 15px;
        background: white;
        border: 2px solid #f0f0f0;
        border-radius: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .option:hover {
        border-color: #6a89cc;
        background: #f8f9fa;
    }

    .navigation {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    .nav-btn {
        padding: 12px 25px;
        border: none;
        border-radius: 8px;
        background: #6a89cc;
        color: white;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .nav-btn:hover {
        background: #5c7cbe;
    }

    .submit-btn {
        background: #78e08f;
    }

    .submit-btn:hover {
        background: #6acc7d;
    }

    .result {
        text-align: center;
    }

    .score-display {
        font-size: 48px;
        font-weight: bold;
        color: #2c3e50;
        margin: 20px 0;
    }

    .restart-btn {
        display: inline-block;
        padding: 15px 30px;
        background: #78e08f;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        margin-top: 20px;
    }

    .math-formula {
        font-family: "Cambria Math", serif;
        font-style: italic;
    }

    .footer {
        text-align: center;
        padding: 20px;
        background: white;
        margin-top: auto;
    }
</style>

<?php
$content = ob_get_clean();
include_once '../layouts/main.php';
?>