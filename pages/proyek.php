<?php
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
require_once __DIR__ . '/../config/database.php';
$title = "MateriKu - Tugas Proyek";
$page = "proyek";
ob_start();
?>

<div class="content-wrapper">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-5">Tugas Proyek</h1>
        <h2 class="text-muted">Perbandingan Senilai</h2>
    </div>

    <!-- Project Card -->
    <div class="card">
        <div class="card-body">
            <!-- Introduction -->
            <div class="project-intro mb-4">
                <div class="alert alert-info">
                    <i class="fas fa-info-circle fa-lg me-2"></i>
                    Untuk memahami lebih dalam tentang konsep perbandingan senilai, kalian akan membuat proyek kecil.
                    Ikuti langkah-langkah berikut dengan seksama dan ajukan pertanyaan jika ada yang tidak jelas.
                </div>
            </div>

            <!-- Project Steps -->
            <div class="project-steps">
                <!-- Step 1 -->
                <div class="step-card mb-4">
                    <div class="step-header">
                        <span class="step-number">1</span>
                        <h4>Penelitian</h4>
                    </div>
                    <div class="step-content">
                        <p>Pilih dua jenis barang yang harganya dapat dibandingkan, misalnya harga buah atau sayuran di pasar.</p>
                        <div class="task-details">
                            <ul>
                                <li>Kunjungi pasar atau toko terdekat</li>
                                <li>Catat harga barang-barang tersebut dalam jumlah yang berbeda</li>
                                <li>Pastikan mencatat minimal 5 variasi jumlah dan harga</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="step-card mb-4">
                    <div class="step-header">
                        <span class="step-number">2</span>
                        <h4>Pengumpulan Data</h4>
                    </div>
                    <div class="step-content">
                        <p>Buat tabel untuk mencatat data yang kamu kumpulkan.</p>
                        <div class="example-table">
                            <h6>Contoh Format Tabel:</h6>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Jumlah Barang</th>
                                            <th>Harga (Rp)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>...</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>...</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="step-card mb-4">
                    <div class="step-header">
                        <span class="step-number">3</span>
                        <h4>Analisis Data</h4>
                    </div>
                    <div class="step-content">
                        <p>Analisis data yang telah kamu kumpulkan dengan mencari perbandingan senilai dari harga barang-barang tersebut.</p>
                        <div class="analysis-guide">
                            <h6>Panduan Analisis:</h6>
                            <ul>
                                <li>Tentukan rasio perbandingan antara jumlah barang dan harga</li>
                                <li>Hitung persentase kenaikan harga</li>
                                <li>Cari pola perbandingan yang terbentuk</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="step-card mb-4">
                    <div class="step-header">
                        <span class="step-number">4</span>
                        <h4>Visualisasi</h4>
                    </div>
                    <div class="step-content">
                        <p>Buat grafik atau diagram yang menunjukkan perbandingan senilai dari data yang telah kamu analisis.</p>
                        <div class="visualization-tips">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6><i class="fas fa-pencil-ruler me-2"></i>Manual</h6>
                                            <p>Menggunakan kertas dan digambarkan secara rapi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6><i class="fas fa-laptop me-2"></i>Digital</h6>
                                            <p>Menggunakan GeoGebra, Microsoft Excel, ataupun aplikasi grafik lainnya</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="step-card mb-4">
                    <div class="step-header">
                        <span class="step-number">5</span>
                        <h4>Laporan</h4>
                    </div>
                    <div class="step-content">
                        <p>Buat laporan tertulis yang merangkum hasil penelitianmu.</p>
                        <div class="presentation-checklist">
                            <h6>Komponen Laporan:</h6>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Tabel data lengkap
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Analisis perbandingan
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Grafik/diagram
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Kesimpulan
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check-circle text-success me-2"></i>
                                            Dokumentasi penelitian
                                        </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Grading Criteria -->
                                                    <div class="grading-criteria mt-5">
                                                        <h4 class="section-title">Kriteria Penilaian</h4>
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead class="table-light">
                                                                    <tr>
                                                                        <th>Kriteria</th>
                                                                        <th>Bobot</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Kelengkapan dan ketepatan data</td>
                                                                        <td>25%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Analisis yang jelas dan akurat</td>
                                                                        <td>35%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Kualitas grafik atau diagram</td>
                                                                        <td>20%</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Kreativitas dan kerapihan laporan</td>
                                                                        <td>20%</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                    <!-- Upload Section -->
                                                    <div class="card mt-4">
                                                        <div class="card-header bg-primary text-white">
                                                            <h5 class="mb-0">
                                                                <i class="fas fa-upload me-2"></i>
                                                                Upload Tugas Proyek
                                                            </h5>
                                                        </div>
                                                        <div class="card-body">
                                                            <form action="upload_proyek.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                                                                <div class="row g-3">
                                                                    <!-- Nama -->
                                                                    <div class="col-md-6">
                                                                        <label for="nama" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                                                        <div class="invalid-feedback">
                                                                            Mohon isi nama lengkap Anda.
                                                                        </div>
                                                                    </div>

                                                                    <!-- Sekolah -->
                                                                    <div class="col-md-6">
                                                                        <label for="sekolah" class="form-label">Asal Sekolah <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control" id="sekolah" name="sekolah" required>
                                                                        <div class="invalid-feedback">
                                                                            Mohon isi asal sekolah Anda.
                                                                        </div>
                                                                    </div>

                                                                    <!-- Email -->
                                                                    <div class="col-md-6">
                                                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                                                        <input type="email" class="form-control" id="email" name="email" required>
                                                                        <div class="invalid-feedback">
                                                                            Mohon isi email yang valid.
                                                                        </div>
                                                                    </div>

                                                                    <!-- File Upload -->
                                                                    <div class="col-md-6">
                                                                        <label for="dokumen" class="form-label">Upload Dokumen <span class="text-danger">*</span></label>
                                                                        <input type="file" class="form-control" id="dokumen" name="dokumen" accept=".pdf,.doc,.docx" required>
                                                                        <div class="invalid-feedback">
                                                                            Mohon pilih file untuk diupload.
                                                                        </div>
                                                                        <small class="text-muted">Format yang diizinkan: PDF, DOC, DOCX. Maksimal 5MB.</small>
                                                                    </div>
                                                                </div>

                                                                <!-- Submit Button -->
                                                                <div class="mt-4 text-end">
                                                                    <button type="submit" class="btn btn-primary btn-lg">
                                                                        <i class="fas fa-paper-plane me-2"></i>
                                                                        Submit Tugas
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

<!-- Additional Styles -->
<style>
    .step-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .step-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .step-header {
        background: linear-gradient(45deg, var(--primary-color), var(--secondary-color));
        color: white;
        padding: 15px;
        border-radius: 10px 10px 0 0;
        display: flex;
        align-items: center;
    }

    .step-number {
        background: white;
        color: var(--primary-color);
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        margin-right: 15px;
    }

    .step-content {
        padding: 20px;
        background: white;
        border-radius: 0 0 10px 10px;
    }

    .task-details ul,
    .analysis-guide ul {
        padding-left: 20px;
    }

    .presentation-checklist .list-group-item {
        border-left: none;
        border-right: none;
        border-top: none;
        padding-left: 0;
    }
</style>

<?php
$content = ob_get_clean();
include_once '../layouts/main.php';
?>