<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $czy = 1;

    // SPRAWDZENIE CZY HASŁA SĄTAKIE SAME
    if ($_POST["password"] == $_POST["powtorka"]) {
        $czy = 1;
    } else {
        $czy = 0;
        header("location: ../rejestracja.php?inf=1");
    }
    
    // POBRANIE WARTOŚCI Z FORMULARZA
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $login = $_POST["login"];
    $numer = $_POST["numer"];
    $haslo = $_POST["password"];

    include '../_hasla.php';

    // SPRAWDZENIE CZY PODANY MAIL JEST JUŻ ZAJĘTY
    $com = mysqli_connect($hostname, $username, $password);
    mysqli_select_db($com, $dbname);
    mysqli_set_charset($com, "utf8");

    $query = "SELECT * FROM `uzytkownicy` WHERE `E-mail` = '$login'";
    $result = mysqli_query($com, $query);
    $count = mysqli_num_rows($result);

    if ($count >= 1) {
        $czy = 0;
        header("location: ../rejestracja.php?inf=2");
    } else {
        $czy = 1;
    }

    // DODANIE USERA
    if ($czy == 1) {
        $zapytanie = "INSERT INTO `uzytkownicy`(`Imie`, `Nazwisko`, `E-mail`, `Telefon`, `Haslo`, `Aktywne`) VALUES ('$imie','$nazwisko','$login','$numer','$haslo','NIE')";
        $result = mysqli_query($com, $zapytanie);
        $last_id = mysqli_insert_id($com);

        // WYSŁANIE MAILA AKTYWACYJNEGO
        if ($result == 1) {
            $to = $login;
            $name = $imie;
            $link = $adres_strony . "/aktywacja_konta.php?id=" . $last_id;

            include 'wyslij_wiadomosc.php';
            if ($send == 1) {
                header("location: ../info.php?rej=1");
            } else {
                header("location: ../rejestracja.php?inf=3");
            }
        } else {
            header("location: ../rejestracja.php?inf=3");
        }
    }
    mysqli_close($com);
}
