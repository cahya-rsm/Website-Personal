<?php
session_start();
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $email = trim($_POST['email']);

    if (!empty($nama) && !empty($email)) {
        $_SESSION['user'] = [
            'nama' => $nama,
            'email' => $email
        ];
        $_SESSION['waktu_mulai'] = date('Y-m-d H:i:s');
        header('Location: latihan.php');
        exit;
    }
}

$title = "Login Latihan - MateriKu";
$page = "latihan";
ob_start();
?>

<div class="content-wrapper">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Identitas Peserta</h2>

            <form method="POST" action="">
                <div class="mb-4">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-lg">
                        Mulai Latihan
                        <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once '../layouts/main.php';
?>