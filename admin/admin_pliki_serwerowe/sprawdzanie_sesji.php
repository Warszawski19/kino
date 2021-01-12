<?php
session_start();
if (!isset($_SESSION['zalogowany'])) {
    header("Location: ./administrator.php");
}
?>