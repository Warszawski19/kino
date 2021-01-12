<?php
if (!isset($_SESSION['klient'])) {
    header("Location: ./logowanie.php");
}
?>