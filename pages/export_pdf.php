<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

ob_start();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Lembar Kerja Siswa (LKS) - Perbandingan Senilai</title>
    <style>
        /* Reset dan style dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        @page {
            margin: 2.5cm 2cm;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            padding: 20px;
        }

        /* Header dan Informasi Siswa */
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #333;
        }

        .student-info {
            margin: 20px 0;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .student-info p {
            margin: 5px 0;
        }

        .dotted-line {
            border-bottom: 1px dotted #333;
            display: inline-block;
            width: 200px;
            position: relative;
            top: -3px;
        }

        /* Info Section */
        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap: 15px;
            margin-bottom: 30px;
        }

        .info-box {
            padding: 10px;
            border: 1px solid #333;
            background-color: #f9f9f9;
        }

        /* Studi Kasus */
        .case-study {
            margin: 20px 0;
            padding: 15px;
            border-left: 3px solid #333;
            background-color: #f9f9f9;
        }

        /* Table Styles */
        .table-section {
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }

        .answer-cell {
            height: 30px;
            background-color: #f5f5f5;
        }

        /* Perbandingan Section */
        .ratio-section {
            margin: 20px 0;
        }

        .ratio-box {
            margin: 10px 0;
            padding: 10px;
            border: 1px dashed #333;
        }

        /* Graph Section */
        .graph-section {
            margin: 20px 0;
        }

        .graph-paper {
            border: 1px solid #333;
            height: 300px;
            margin: 15px 0;
            background-image: linear-gradient(#ddd 1px, transparent 1px),
                linear-gradient(90deg, #ddd 1px, transparent 1px);
            background-size: 20px 20px;
        }

        /* Equation Section */
        .equation-section {
            margin: 20px 0;
        }

        .equation-box {
            margin: 10px 0;
            padding: 15px;
            border: 1px solid #333;
            background-color: #f9f9f9;
        }

        .answer-line {
            display: inline-block;
            width: 100px;
            border-bottom: 1px solid #333;
            margin: 0 5px;
        }

        /* Conclusion Section */
        .conclusion {
            margin: 20px 0;
            padding: 15px;
            border: 2px solid #333;
            background-color: #f9f9f9;
        }

        /* Page Number */
        .page-number {
            position: fixed;
            bottom: -20px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 12px;
        }

        /* Footer */
        .footer {
            position: fixed;
            bottom: -40px;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 10px;
            color: #666;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <h1>LEMBAR KERJA SISWA (LKS)</h1>
        <h2>Perbandingan Senilai</h2>
    </div>

    <!-- Student Info -->
    <div class="student-info">
        <p>Nama: <span class="dotted-line"></span></p>
        <p>Kelas: <span class="dotted-line"></span></p>
        <p>Nomor Absen: <span class="dotted-line"></span></p>
        <p>Tanggal: <span class="dotted-line"></span></p>
    </div>

    <!-- Info Grid -->
    <div class="info-grid">
        <div class="info-box">
            <h3>Kompetensi Dasar: 3.12</h3>
            <p>Memahami konsep perbandingan menggunakan tabel, grafik, dan persamaan.</p>
        </div>
        <div class="info-box">
            <h3>Tujuan Pembelajaran</h3>
            <p>Menentukan nilai perbandingan senilai dalam bentuk tabel, grafik dan persamaan.</p>
        </div>
        <div class="info-box">
            <h3>Alokasi Waktu</h3>
            <p>15 Menit</p>
        </div>
    </div>

    <!-- Case Study -->
    <div class="case-study">
        <h3>Studi Kasus: Peternak Ayam</h3>
        <p>Kalian dapat membantu peternak menghitung telur ayamnya! Satu ekor ayam dapat menghasilkan 6 butir telur.
            Dua ekor ayam dapat menghasilkan 12 butir telur. Jika banyak telur yang dihasilkan semua ayam adalah sama.
            Berapa telur yang dihasilkan oleh lima ekor ayam?</p>
    </div>

    <!-- Table Section -->
    <div class="table-section">
        <h3>A. Menyajikan perbandingan senilai ke dalam bentuk Tabel</h3>
        <table>
            <thead>
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
                    <td class="answer-cell"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td class="answer-cell"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td class="answer-cell"></td>
                </tr>
            </tbody>
        </table>

        <div class="ratio-section">
            <p>Tuliskan perbandingan berikut:</p>
            <div class="ratio-box">
                1/3 = 6/<span class="answer-line"></span>
            </div>
            <div class="ratio-box">
                2/3 = <span class="answer-line"></span>/<span class="answer-line"></span>
            </div>
            <div class="ratio-box">
                5/2 = <span class="answer-line"></span>/<span class="answer-line"></span>
            </div>
        </div>
    </div>

    <!-- Graph Section -->
    <div class="graph-section">
        <h3>B. Menyajikan perbandingan senilai ke dalam bentuk Grafik</h3>
        <p>Gambar grafik dengan:</p>
        <ul>
            <li>Sumbu X sebagai Banyak Ayam</li>
            <li>Sumbu Y sebagai Banyak Telur</li>
            <li>Plot titik-titik sesuai dengan tabel di atas</li>
            <li>Hubungkan titik-titik tersebut</li>
        </ul>
        <div class="graph-paper"></div>
    </div>

    <!-- Equation Section -->
    <div class="equation-section">
        <h3>C. Menyajikan perbandingan senilai ke dalam bentuk persamaan</h3>
        <div class="equation-box">
            <p>Diketahui:</p>
            <p>2 Ayam ⇒ 12 Butir Telur</p>
            <p>5 Ayam ⇒ q Butir Telur</p>

            <p>Penyelesaian:</p>
            <div style="margin-left: 20px;">
                <p>2/5 = 12/q</p>
                <p>2q = <span class="answer-line"></span></p>
                <p>q = <span class="answer-line"></span></p>
            </div>
        </div>
    </div>

    <!-- Conclusion -->
    <div class="conclusion">
        <h3>Kesimpulan</h3>
        <p>Dari tabel, grafik, dan persamaan di atas dapat disimpulkan bahwa:</p>
        <p>Makin banyak ayam, maka <span class="answer-line"></span> pula telur yang dihasilkan.</p>
        <p>Perbandingan seperti ini disebut <span class="answer-line"></span>.</p>
    </div>

    <!-- Page Number -->
    <div class="page-number">
        Halaman 1
    </div>

    <!-- Footer -->
    <div class="footer">
        Disusun oleh: Risma Cahyaningrum © 2024
    </div>
</body>

</html>

<?php
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream("LKS_Perbandingan_Senilai.pdf", ["Attachment" => false]);
?>