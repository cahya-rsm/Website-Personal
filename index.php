<?php
// Tampilkan semua error (untuk development)
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
$title = "MateriKu - Portal Pembelajaran Matematika";
$page = "home";

include_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #6a89cc, #78e08f);
            padding: 100px 0;
            color: white;
            text-align: center;
        }

        .feature-card {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #6a89cc;
        }

        .cta-section {
            background: #f8f9fa;
            padding: 80px 0;
            margin: 50px 0;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include 'includes/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 mb-4">Selamat Datang di MateriKu</h1>
            <p class="lead mb-4">Portal Pembelajaran Matematika Kelas 7 - Perbandingan Senilai</p>
            <a href="<?php echo BASE_URL; ?>/pages/materi.php" class="btn btn-light btn-lg px-4 me-2">
                <i class="fas fa-book me-2"></i>Mulai Belajar
            </a>
            <a href="<?php echo BASE_URL; ?>/pages/login_latihan.php" class="btn btn-outline-light btn-lg px-4">
                <i class="fas fa-tasks me-2"></i>Latihan Soal
            </a>
        </div>
    </section>

    <!-- Features Section -->\
    <section class="container my-5">
        <h2 class="text-center mb-5">Fitur Pembelajaran</h2>
        <div class="row g-4">
            <!-- Materi -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h5 class="card-title">Materi Lengkap</h5>
                        <p class="card-text">Materi pembelajaran yang lengkap dengan contoh dan penjelasan detail.</p>
                    </div>
                </div>
            </div>

            <!-- Lembar Kerja -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon">
                            <i class="fas fa-pencil-alt"></i>
                        </div>
                        <h5 class="card-title">Lembar Kerja</h5>
                        <p class="card-text">Latihan terstruktur untuk memahami konsep dengan lebih baik.</p>
                    </div>
                </div>
            </div>

            <!-- Latihan -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon">
                            <i class="fas fa-tasks"></i>
                        </div>
                        <h5 class="card-title">Latihan Interaktif</h5>
                        <p class="card-text">Kuis interaktif untuk menguji pemahaman materi.</p>
                    </div>
                </div>
            </div>

            <!-- Proyek -->
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100">
                    <div class="card-body text-center">
                        <div class="feature-icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <h5 class="card-title">Tugas Proyek</h5>
                        <p class="card-text">Proyek penelitian untuk penerapan konsep di dunia nyata.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container text-center">
            <h2 class="mb-4">Siap untuk Belajar?</h2>
            <p class="lead mb-4">Mari mulai perjalanan belajar matematika yang menyenangkan!</p>
            <a href="<?php echo BASE_URL; ?>/pages/materi.php" class="btn btn-primary btn-lg">Mulai Sekarang</a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
</body>

</html>