<?php
session_start();

function checkLogin()
{
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: index.php");
        exit();
    }
}
