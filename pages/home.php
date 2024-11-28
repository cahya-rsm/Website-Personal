<?php
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
require_once __DIR__ . '/../config/database.php';
$title = "MateriKu - Portal Pembelajaran Matematika";
$page = "home";
ob_start();
?>

<div class="content-wrapper">
    <div class="text-center mb-5">
        <h1 class="display-4 mb-3">Materi Pembelajaran Kelas 7 SMP</h1>
        <p class="lead">Memahami Perbandingan Senilai dengan Mudah dan Menyenangkan</p>
    </div>

    <div class="row g-4">
        <!-- Card 1: Bilangan -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-calculator fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Bilangan</h5>
                    <p class="card-text">
                        Pembelajaran tentang bilangan bulat, mencakup operasi dasar dan penggunaannya dalam kehidupan sehari-hari.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 2: Aljabar -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-superscript fa-2x text-success"></i>
                    </div>
                    <h5 class="card-title">Aljabar</h5>
                    <p class="card-text">
                        Pengenalan konsep dasar aljabar, ekspresi aljabar, dan operasi-operasi dasarnya.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 3: Persamaan Linier -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-equals fa-2x text-info"></i>
                    </div>
                    <h5 class="card-title">Persamaan Linier</h5>
                    <p class="card-text">
                        Belajar tentang persamaan linier satu variabel dan cara penyelesaiannya.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 4: Perbandingan -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body active-card">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-percentage fa-2x text-warning"></i>
                    </div>
                    <h5 class="card-title">Perbandingan</h5>
                    <p class="card-text">
                        Memahami konsep perbandingan, rasio, dan proporsi serta aplikasinya.
                    </p>
                    <a href="materi.php" class="btn btn-custom mt-3">Pelajari Sekarang</a>
                </div>
            </div>
        </div>

        <!-- Card 5: Bangun Datar -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-square fa-2x text-danger"></i>
                    </div>
                    <h5 class="card-title">Bangun Datar</h5>
                    <p class="card-text">
                        Mengenal berbagai jenis bangun datar dan cara menghitung luas serta kelilingnya.
                    </p>
                </div>
            </div>
        </div>

        <!-- Card 6: Bangun Ruang -->
        <div class="col-md-6 col-lg-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="icon-wrapper mb-3">
                        <i class="fas fa-cube fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Bangun Ruang</h5>
                    <p class="card-text">
                        Belajar tentang berbagai jenis bangun ruang dan perhitungan volumenya.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Info Section -->
    <div class="mt-5 p-4 bg-light rounded-3">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h2>Mulai Belajar Sekarang!</h2>
                <p class="lead mb-4">
                    Pelajari materi perbandingan senilai dengan cara yang menyenangkan melalui video, contoh soal, dan latihan interaktif.
                </p>
                <a href="materi.php" class="btn btn-custom btn-lg">
                    Mulai Belajar <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
            <div class="col-md-4 text-center">
                <i class="fas fa-graduation-cap fa-6x text-primary"></i>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once dirname(__FILE__) . '/../layouts/main.php';
?>