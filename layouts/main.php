<?php
require_once '../config/database.php';
include_once '../includes/header.php';
include_once '../includes/navbar.php';
?>

<main class="main-content">
    <div class="container">
        <?php echo $content ?? ''; ?>
    </div>
</main>

<?php include_once '../includes/footer.php'; ?>