<?php
require_once 'includes/auth.php';
require_once '../config/database.php';
checkLogin();

// Get counts
$stmt = $pdo->query("SELECT COUNT(*) as latihan_count FROM hasil_latihan");
$latihanCount = $stmt->fetch()['latihan_count'];

$stmt = $pdo->query("SELECT COUNT(*) as submissions_count FROM submissions");
$submissionsCount = $stmt->fetch()['submissions_count'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - MateriKu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

        .stats-card {
            transition: all 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-5px);
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
                            <a class="nav-link active" href="dashboard.php">
                                <i class="fas fa-home me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="hasil_latihan.php">
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
                <h2 class="mb-4">Dashboard</h2>

                <div class="row g-4">
                    <!-- Stats Card 1 -->
                    <div class="col-md-6">
                        <div class="card stats-card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-subtitle mb-2">Total Hasil Latihan</h6>
                                        <h2 class="card-title mb-0"><?php echo $latihanCount; ?></h2>
                                    </div>
                                    <i class="fas fa-tasks fa-3x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Card 2 -->
                    <div class="col-md-6">
                        <div class="card stats-card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h6 class="card-subtitle mb-2">Total Upload Tugas</h6>
                                        <h2 class="card-title mb-0"><?php echo $submissionsCount; ?></h2>
                                    </div>
                                    <i class="fas fa-file-alt fa-3x opacity-50"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>