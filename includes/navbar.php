<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
            <i class="fas fa-square-root-alt me-2"></i>
            MateriKu
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'home' ? 'active' : ''; ?>"
                        href="<?php echo BASE_URL; ?>/pages/home.php">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'materi' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/pages/materi.php">
                        <i class="fas fa-book me-1"></i> Materi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'lembarkerja' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/pages/lembarkerja.php">
                        <i class="fas fa-pencil-alt me-1"></i> Lembar Kerja
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'latihan' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/pages/login_latihan.php">
                        <i class="fas fa-tasks me-1"></i> Latihan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $page === 'proyek' ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/pages/proyek.php">
                        <i class="fas fa-project-diagram me-1"></i> Proyek
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>