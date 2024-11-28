<?php
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
require_once __DIR__ . '/../config/database.php';
$title = "MateriKu - Lembar Kerja Siswa";
$page = "lembarkerja";
ob_start();
?>

<div class="content-wrapper">
    <!-- Header Section -->
    <div class="text-center mb-5">
        <h1 class="display-5">Lembar Kerja Siswa (LKS)</h1>
        <h2 class="text-muted">Perbandingan Senilai</h2>
    </div>

    <!-- Alert Info -->
    <div class="alert alert-info mb-4 shadow-sm">
        <div class="d-flex align-items-center">
            <i class="fas fa-info-circle fa-2x me-3"></i>
            <div>
                <h5 class="mb-1">Petunjuk Pengerjaan Lembar Kerja</h5>
                <p class="mb-0">Unduh lembar kerja dalam format PDF untuk mengerjakan soal. Lembar kerja dapat dicetak dan dikerjakan secara manual.</p>
            </div>
        </div>
    </div>

    <!-- Download Section -->
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="card-title mb-2">
                        <i class="fas fa-file-pdf text-danger me-2"></i>
                        Lembar Kerja Siswa - Perbandingan Senilai
                    </h5>
                    <p class="card-text text-muted mb-0">
                        Format: PDF • Ukuran: A4 • Dapat dicetak
                    </p>
                </div>
                <div class="col-md-4 text-end">
                    <a href="export_pdf.php" class="btn btn-danger btn-lg w-100 download-btn">
                        <i class="fas fa-download me-2"></i>
                        Download PDF
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cara Pengerjaan -->
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-light">
            <h5 class="mb-0">
                <i class="fas fa-list-ol me-2"></i>
                Langkah-langkah Pengerjaan
            </h5>
        </div>
        <div class="card-body">
            <ol class="mb-0">
                <li class="mb-2">Download lembar kerja dengan mengklik tombol "Download PDF" di atas</li>
                <li class="mb-2">Cetak lembar kerja menggunakan printer (Disarankan menggunakan kertas A4)</li>
                <li class="mb-2">Isi identitas diri pada kolom yang tersedia (nama, kelas, dan nomor absen)</li>
                <li class="mb-2">Kerjakan soal sesuai petunjuk dengan rapi dan jelas</li>
                <li>Kumpulkan lembar kerja yang telah diisi kepada guru mata pelajaran</li>
            </ol>
        </div>
    </div>

    <!-- Info Section -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-book me-2"></i>
                        Kompetensi Dasar: 3.12
                    </h5>
                    <p class="card-text">Memahami konsep perbandingan dengan menggunakan tabel, grafik, dan persamaan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-bullseye me-2"></i>
                        Tujuan
                    </h5>
                    <p class="card-text">Peserta didik mampu menentukan nilai perbandingan senilai yang disajikan dalam bentuk tabel, grafik dan persamaan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-clock me-2"></i>
                        Alokasi Waktu
                    </h5>
                    <p class="card-text">15 Menit</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="card">
        <div class="card-body">
            <div class="case-study mb-4">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="<?php echo BASE_URL; ?>/assets/img/gmbrtlr.jpg" class="img-fluid rounded shadow-sm" alt="Ilustrasi Telur">
                    </div>
                    <div class="col-md-8">
                        <div class="case-description">
                            <h4>Studi Kasus: Peternak Ayam</h4>
                            <p>Kalian dapat membantu peternak menghitung telur ayamnya! Satu ekor ayam dapat menghasilkan 6 butir telur.
                                Dua ekor ayam dapat menghasilkan 12 butir telur. Jika banyak telur yang dihasilkan semua ayam adalah sama.
                                Berapa telur yang dihasilkan oleh lima ekor ayam?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Task Sections -->
            <div class="tasks">
                <!-- Task 1: Table -->
                <div class="task-section mb-4">
                    <h4 class="section-title">
                        <i class="fas fa-table me-2"></i>
                        a. Menyajikan perbandingan senilai ke dalam bentuk Tabel
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>Banyaknya Ayam</th>
                                    <th>Jumlah Telur (Butir)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>6</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="table-active">...</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="table-active">...</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="table-active">...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="ratios mt-3">
                        <p>Angka-angka pada tabel tersebut dapat ditulis dalam perbandingan:</p>
                        <div class="math-formula">
                            \[\frac{1}{3} = \frac{6}{...}\]
                            \[\frac{2}{3} = \frac{...}{...}\]
                            \[\frac{5}{2} = \frac{...}{...}\]
                        </div>
                    </div>
                </div>

                <!-- Task 2: Graph -->
                <div class="task-section mb-4">
                    <h4 class="section-title">
                        <i class="fas fa-chart-line me-2"></i>
                        b. Menyajikan perbandingan senilai ke dalam bentuk Grafik
                    </h4>
                    <div class="graph-container">
                        <img src="<?php echo BASE_URL; ?>/assets/img/grafik.jpg" class="img-fluid rounded shadow-sm" alt="Grafik Koordinat">
                        <div class="graph-instructions mt-3">
                            <p class="text-muted">
                                <i class="fas fa-info-circle me-2"></i>
                                Gambar grafik dengan sumbu X sebagai Banyak Ayam dan sumbu Y sebagai Banyak Telur.
                                Plot titik-titik sesuai dengan tabel di atas dan hubungkan titik-titik tersebut.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Task 3: Equation -->
                <div class="task-section mb-4">
                    <h4 class="section-title">
                        <i class="fas fa-square-root-alt me-2"></i>
                        c. Menyajikan perbandingan senilai ke dalam bentuk persamaan
                    </h4>
                    <div class="equation-box bg-light p-4 rounded">
                        <div class="given-info mb-3">
                            <p>2 Ayam ⇒ 12 Butir Telur</p>
                            <p>5 Ayam ⇒ q Butir Telur</p>
                        </div>

                        <div class="solution-steps">
                            <p>Bentuk perbandingan senilai dari tabel adalah:</p>
                            <div class="math-formula">
                                \[\frac{2}{5} = \frac{12}{q}\]
                            </div>

                            <div class="step-by-step mt-3">
                                <p>Dapat diubah menjadi persamaan sebagai berikut:</p>

                                <div class="equation-step">
                                    <div class="equation-line">
                                        <span class="blank"></span>
                                        <span class="math-symbol">q</span>
                                        <span class="math-symbol">=</span>
                                        <span class="blank"></span>
                                        <span class="math-symbol">×</span>
                                        <span class="blank"></span>
                                    </div>
                                </div>

                                <div class="equation-step">
                                    <div class="equation-line">
                                        <span class="blank"></span>
                                        <span class="math-symbol">q</span>
                                        <span class="math-symbol">=</span>
                                        <span class="blank"></span>
                                    </div>
                                </div>

                                <div class="equation-step">
                                    <div class="equation-line">
                                        <span class="math-symbol">q</span>
                                        <span class="math-symbol">=</span>
                                        <span class="blank"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Conclusion -->
                <div class="conclusion-section">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h4 class="section-title">
                                <i class="fas fa-lightbulb me-2"></i>
                                Kesimpulan
                            </h4>
                            <div class="conclusion-content">
                                <p>Dari tabel, grafik, dan persamaan di atas dapat disimpulkan bahwa:</p>
                                <div class="fill-in-blank">
                                    <p>Makin banyak ayam, maka ............................ pula telur yang dihasilkan.</p>
                                    <p>Perbandingan seperti ini disebut perbandingan senilai.</p>
                                </div>

                                <div class="final-conclusion mt-4">
                                    <div class="alert alert-info">
                                        <i class="fas fa-info-circle me-2"></i>
                                        <strong>Pada perbandingan senilai,</strong> nilai suatu barang akan naik/turun sejalan dengan
                                        ....................................................
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
                    <a href="materi.php" class="btn btn-outline-primary w-100">
                        <i class="fas fa-arrow-left me-2"></i>
                        Kembali ke Materi
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
    </div>
</div>

<!-- Additional Styles -->
<style>
    .task-section {
        border-left: 4px solid var(--primary-color);
        padding-left: 20px;
        margin-bottom: 30px;
    }

    .step-by-step .step {
        margin: 10px 0;
        padding: 10px;
        background: white;
        border-radius: 5px;
    }

    .fill-in-blank p {
        font-style: italic;
        color: #666;
    }

    .equation-box {
        border: 1px solid #dee2e6;
    }

    .given-info {
        font-weight: 500;
    }

    .conclusion-content {
        font-size: 1.1rem;
    }

    .graph-container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .table th {
        background: var(--primary-color);
        color: white;
    }

    .table-active {
        background-color: #f8f9fa;
        font-style: italic;
    }

    .equation-step {
        display: flex;
        align-items: center;
        margin: 15px 0;
        padding: 12px;
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 6px;
    }

    .equation-line {
        font-family: 'Courier New', monospace;
        font-size: 1.1em;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .blank {
        display: inline-block;
        width: 50px;
        height: 25px;
        border-bottom: 2px dashed #3498db;
        margin: 0 5px;
        position: relative;
    }

    .blank::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 6px;
        height: 6px;
        background-color: #3498db;
        border-radius: 50%;
    }

    .math-symbol {
        color: #2c3e50;
        font-weight: bold;
        margin: 0 5px;
    }

    .download-btn {
        transition: all 0.3s ease;
        border: none;
        background: linear-gradient(45deg, #dc3545, #e74c3c);
    }

    .download-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(220, 53, 69, 0.3);
    }

    .card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 10px;
    }

    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
    }

    .alert {
        border-left: 4px solid #0dcaf0;
        border-radius: 10px;
    }

    .alert i {
        color: #0dcaf0;
    }

    .card-header {
        border-radius: 10px 10px 0 0 !important;
    }

    ol li {
        padding: 5px 0;
        position: relative;
    }

    ol li::marker {
        color: var(--primary-color);
        font-weight: bold;
    }
</style>

<?php
$content = ob_get_clean();
include_once '../layouts/main.php';
?>