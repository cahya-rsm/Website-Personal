<?php
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
require_once __DIR__ . '/../config/database.php';
$title = "MateriKu - Perbandingan Senilai";
$page = "materi";
ob_start();
?>

<div class="content-wrapper">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-5">Perbandingan Senilai</h1>
        <p class="lead">Memahami konsep dan aplikasi perbandingan senilai dalam kehidupan sehari-hari</p>
    </div>

    <!-- Video Section -->
    <div class="card mb-5">
        <div class="card-body">
            <h3 class="section-title">
                <i class="fas fa-play-circle me-2"></i>
                Video Pembelajaran
            </h3>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/your-video-id" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <!-- Materi Section -->
    <div class="row">
        <!-- Definition -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="section-title">
                        <i class="fas fa-book me-2"></i>
                        Definisi Perbandingan Senilai
                    </h3>
                    <p class="lead">
                        Perbandingan senilai berkaitan dengan perbandingan dua besaran yang nilainya sebanding.
                    </p>
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        Jika besaran pertama nilainya meningkat, maka besaran kedua nilainya juga meningkat.
                        Begitupun sebaliknya, jika besaran pertama nilainya menurun, maka besaran kedua nilainya juga akan menurun.
                    </div>
                </div>
            </div>
        </div>

        <!-- Example -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="section-title">
                        <i class="fas fa-lightbulb me-2"></i>
                        Contoh Perbandingan Senilai
                    </h3>
                    <div class="example-box p-4 bg-light rounded">
                        <p>Misalnya harga sebuah pensil adalah Rp5.000, maka harga lima pensil adalah Rp25.000.</p>
                        <figure class="figure text-center mt-4">
                            <img src="<?php echo BASE_URL; ?>/assets/img/Perbandingan-Senilai.webp" class="figure-img img-fluid border border-primary border-2 rounded-3" alt="Grafik Perbandingan Senilai">
                            <figcaption class="figure-caption text-center">Grafik Perbandingan Senilai</figcaption>
                        </figure>
                    </div>

                    <div class="mt-4">
                        <h5>Contoh lain dalam kehidupan sehari-hari:</h5>
                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6><i class="fas fa-shopping-cart me-2"></i>Pembelian Barang</h6>
                                        <p class="mb-0">Jumlah barang yang dibeli dengan jumlah harga barang</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h6><i class="fas fa-users me-2"></i>Gaji Pekerja</h6>
                                        <p class="mb-0">Jumlah pekerja dengan total gaji yang dibayarkan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formula -->
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="section-title">
                        <i class="fas fa-square-root-alt me-2"></i>
                        Rumus Perbandingan Senilai
                    </h3>
                    <div class="math-formula text-center my-4">
                        \[\frac{A_1}{A_2} = \frac{B_1}{B_2}\]
                    </div>
                    <div class="formula-explanation">
                        <p>Dimana:</p>
                        <ul>
                            <li>A₁ dan B₁ adalah pasangan nilai pertama</li>
                            <li>A₂ dan B₂ adalah pasangan nilai kedua</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contoh Soal -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="section-title">
                        <i class="fas fa-pencil-alt me-2"></i>
                        Contoh Penggunaan Rumus
                    </h3>

                    <!-- Contoh 1 -->
                    <div class="example-problem mb-4">
                        <div class="problem-header bg-light p-3 rounded">
                            <h5>Contoh 1:</h5>
                            <p>Bawang putih sebanyak 2 kg harganya adalah Rp5.000, carilah harga 4 kg bawang putih!</p>
                        </div>

                        <!-- Penyelesaian Contoh 1 -->
                        <div class="solution p-3">
                            <h6><i class="fas fa-check-circle me-2"></i>Penyelesaian:</h6>
                            <div class="solution-steps">
                                <p>Misalkan:</p>
                                <ul>
                                    <li>X₁ = 2 kg</li>
                                    <li>X₂ = 4 kg</li>
                                    <li>Y₁ = Rp5.000</li>
                                    <li>Y₂ = ...?</li>
                                </ul>
                                <p>Menggunakan rumus perbandingan senilai:</p>
                                <div class="math-formula text-center my-3">
                                    \[\frac{2}{4} = \frac{5.000}{X}\]
                                    \[2X = 5.000 \times 4\]
                                    \[X = 10.000\]
                                </div>
                                <div class="answer alert alert-success">
                                    <strong>Jadi,</strong> harga 4 kg bawang putih = Rp10.000
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contoh 2 -->
                    <div class="example-problem">
                        <div class="problem-header bg-light p-3 rounded">
                            <h5>Contoh 2:</h5>
                            <p>Deka mengendarai motor dengan jarak tempuh 12 km membutuhkan bensin 2 liter.
                                Jika jarak tempuh hanya 6 km berapa liter bensin yang dibutuhkan oleh Deka?</p>
                        </div>

                        <div class="solution p-3">
                            <h6><i class="fas fa-check-circle me-2"></i>Penyelesaian:</h6>
                            <div class="solution-steps">
                                <p>Misalkan:</p>
                                <ul>
                                    <li>X₁ = 12 km</li>
                                    <li>X₂ = 6 km</li>
                                    <li>Y₁ = 2 liter</li>
                                    <li>Y₂ = ...?</li>
                                </ul>
                                <p>Menggunakan rumus perbandingan senilai:</p>
                                <div class="math-formula text-center my-3">
                                    \[\frac{12}{6} = \frac{2}{X}\]
                                    \[12X = 6 \times 2\]
                                    \[X = 1\]
                                </div>
                                <div class="answer alert alert-success">
                                    <strong>Jadi,</strong> Deka membutuhkan bensin sebesar 1 liter untuk menempuh jarak 6 km
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="row mt-4">
        <div class="col-6">
            <a href="lembarkerja.php" class="btn btn-outline-primary w-100">
                <i class="fas fa-arrow-left me-2"></i>
                Lembar Kerja
            </a>
        </div>
        <div class="col-6">
            <a href="login_latihan.php" class="btn btn-primary w-100">
                Mulai Latihan
                <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div>

<!-- Additional Styles -->
<style>
    .example-problem {
        border-left: 4px solid var(--primary-color);
        margin-bottom: 2rem;
    }

    .solution-steps {
        padding-left: 1rem;
    }

    .math-formula {
        background: #f8f9fa;
        padding: 1.5rem;
        border-radius: 10px;
        margin: 1rem 0;
    }

    .answer {
        margin-top: 1rem;
        border-radius: 10px;
    }

    .problem-header {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .solution {
        background-color: #ffffff;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
</style>

<?php
$content = ob_get_clean();
include_once '../layouts/main.php';
?>