<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POBRANIE DANYCH Z FORMULARZA
    $login = $_POST["login"];
    $haslo = $_POST["password"];

    include '../_hasla.php';

    $com = mysqli_connect($hostname, $username, $password);
    mysqli_select_db($com, $dbname);
    mysqli_set_charset($com, "utf8");
    $zapytanie = "SELECT * FROM `administratorzy` WHERE `Login` = '$login'and `Haslo` = '$haslo'";
    $result = mysqli_query($com, $zapytanie);

    $count = mysqli_num_rows($result);
    if ($count == 1) {
        // USTANOWIENIE SESJI
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $login;
        header("location: ../index.php");
    } else {
        header("location: ../administrator.php?log=0");
    }
    mysqli_close($com);
}
?>
