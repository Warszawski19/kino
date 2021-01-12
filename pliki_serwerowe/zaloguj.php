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
    $zapytanie = "SELECT * FROM `uzytkownicy` WHERE `E-mail` = '$login'and `Haslo` = '$haslo'and `Aktywne`='TAK'";
    $result = mysqli_query($com, $zapytanie);

    $count = mysqli_num_rows($result);
    // USTANOWIENIE SESJI
    if ($count == 1) {
        $_SESSION['klient'] = true;
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['nazwa'] = $row["Imie"] . ' ' . $row["Nazwisko"];
            $_SESSION['numer'] = $row["Telefon"];
            $_SESSION['id'] = $row['ID'];
        }
        if (isset($_SESSION['nazwa']) && isset($_SESSION['id'])) {
            header("location: ../index.php");
        }
    } else {
        header("location: ../logowanie.php?log=0");
    }
    mysqli_close($com);
}
?>
