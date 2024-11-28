<?php
define('BASE_URL', '/Portal_Pembelajaran_Matematika');
require_once __DIR__ . '/../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama']);
    $sekolah = trim($_POST['sekolah']);
    $email = trim($_POST['email']);

    // Validasi input
    if (empty($nama) || empty($sekolah) || empty($email)) {
        $_SESSION['error'] = "Semua field harus diisi!";
        header("Location: proyek.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Format email tidak valid!";
        header("Location: proyek.php");
        exit();
    }

    // Handle file upload
    if (isset($_FILES['dokumen']) && $_FILES['dokumen']['error'] === UPLOAD_ERR_OK) {
        $file = $_FILES['dokumen'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        // Get file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        // Allowed extensions
        $allowed = array('pdf', 'doc', 'docx');

        if (in_array($fileExt, $allowed)) {
            if ($fileSize <= 5000000) { // 5MB max
                // Create unique filename
                $fileNameNew = uniqid('proyek_', true) . "." . $fileExt;
                // Upload directory
                $uploadDir = __DIR__ . '/../uploads/';
                if (!file_exists($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }
                $fileDestination = $uploadDir . $fileNameNew;

                if (move_uploaded_file($fileTmpName, $fileDestination)) {
                    // Save to database
                    try {
                        $stmt = $pdo->prepare("INSERT INTO submissions (nama, sekolah, email, file_name, upload_date) VALUES (?, ?, ?, ?, NOW())");
                        $stmt->execute([$nama, $sekolah, $email, $fileNameNew]);

                        $_SESSION['success'] = "Tugas berhasil diupload!";
                        header("Location: proyek.php");
                        exit();
                    } catch (PDOException $e) {
                        $_SESSION['error'] = "Gagal menyimpan data ke database!";
                        header("Location: proyek.php");
                        exit();
                    }
                } else {
                    $_SESSION['error'] = "Gagal mengupload file!";
                    header("Location: proyek.php");
                    exit();
                }
            } else {
                $_SESSION['error'] = "Ukuran file terlalu besar! Maksimal 5MB.";
                header("Location: proyek.php");
                exit();
            }
        } else {
            $_SESSION['error'] = "Format file tidak diizinkan!";
            header("Location: proyek.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Terjadi kesalahan saat upload file!";
        header("Location: proyek.php");
        exit();
    }
}
