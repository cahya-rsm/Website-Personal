<?php
require_once 'includes/auth.php';
require_once '../config/database.php';
checkLogin();

// Get hasil latihan data
$stmt = $pdo->query("SELECT * FROM hasil_latihan ORDER BY created_at DESC");
$hasil_latihan = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Latihan - Admin MateriKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <style>
        .sidebar {
            min-height: 100vh;
            background: #2c3e50;
            color: white;
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.8);
        }

        .nav-link:hover {
            color: white;
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 position-fixed sidebar">
                <div class="p-3">
                    <h5 class="text-center mb-4">MateriKu Admin</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">
                                <i class="fas fa-home me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="hasil_latihan.php">
                                <i class="fas fa-tasks me-2"></i>Hasil Latihan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="submissions.php">
                                <i class="fas fa-file-alt me-2"></i>Tugas Upload
                            </a>
                        </li>
                        <li class="nav-item mt-4">
                            <a class="nav-link text-danger" href="logout.php">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 ms-auto px-4 py-3">
                <h2 class="mb-4">Hasil Latihan Siswa</h2>

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="hasilLatihan">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nilai</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th>Durasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hasil_latihan as $index => $hasil): ?>
                                        <tr>
                                            <td><?php echo $index + 1; ?></td>
                                            <td><?php echo htmlspecialchars($hasil['nama']); ?></td>
                                            <td><?php echo htmlspecialchars($hasil['email']); ?></td>
                                            <td>
                                                <span class="badge <?php echo $hasil['nilai'] >= 70 ? 'bg-success' : 'bg-danger'; ?>">
                                                    <?php echo $hasil['nilai']; ?>%
                                                </span>
                                            </td>
                                            <td><?php echo date('d/m/Y H:i', strtotime($hasil['waktu_mulai'])); ?></td>
                                            <td><?php echo date('d/m/Y H:i', strtotime($hasil['waktu_selesai'])); ?></td>
                                            <td>
                                                <?php
                                                $start = new DateTime($hasil['waktu_mulai']);
                                                $end = new DateTime($hasil['waktu_selesai']);
                                                $duration = $start->diff($end);
                                                echo $duration->format('%i menit %s detik');
                                                ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hasilLatihan').DataTable({
                "order": [
                    [4, "desc"]
                ], // Sort by waktu_mulai
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Tidak ada data yang ditemukan",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ada data yang tersedia",
                    "infoFiltered": "(difilter dari _MAX_ total data)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
</body>

</html>