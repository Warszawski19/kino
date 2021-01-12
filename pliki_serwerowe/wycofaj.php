<?php
session_start();
include '../pliki_serwerowe/sprawdzanie_sesji.php';

$rez = $_REQUEST["rez"];

include '../_hasla.php';

// WYCOFANIE REZERWACJI
$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");
$query = "DELETE FROM `rezerwacje` WHERE `ID`=$rez";
$wynik = mysqli_query($com, $query);

// PRZEKIEROWANIE NA ODPOWIEDNIĄ STRONĘ
if ($wynik == 1) {
    header("Location: ../info.php?kom=1&id=" . $rez);
} else {
    header("Location: ../info.php?kom=0");
}

mysqli_close($com);
?>
