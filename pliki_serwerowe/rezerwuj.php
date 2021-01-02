<?php

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
#-------------------- Dane z formularza
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = input($_POST["id"]);
    $seats = input($_POST["seats"]);
    $name = input($_POST["name"]);
    $phone = input($_POST["phone"]);
}

#----------------- Pobranie tytułu filmu 
include '../_hasla.php';

//Sprawdzenie tytułu na podstawie id pobranego z url
$title = "";
$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");

$query = "SELECT * FROM `filmy` WHERE ID = $id";

$result = mysqli_query($com, $query);

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $title = $row["Tytuł"];
    }
}

$valid = 1;
//Walidacja numeru telefonu
if (strlen($phone) != 9 && !is_int($phone)) {
    $valid = 0;
}

if ($valid == 1) {
    // Wstawienie danych do tabeli
    $com = mysqli_connect($hostname, $username, $password);
    mysqli_select_db($com, $dbname);
    mysqli_set_charset($com, "utf8");

    $ran = rand(1, 100) + rand(1, 100) + rand(1, 100);

    $query = "INSERT INTO `rezerwacje`(`ID`,`Tytuł`, `Imie i nazwisko`, `Numer telefonu`, `Miejsca`) VALUES ('$ran', '$title', '$name', '$phone', '$seats')";
    $result = mysqli_query($com, $query);

    if ($result == 1) {
        header("Location: ../info.php?stat=" . $result . "&id=" . $ran);
    } else {
        header("Location: ../info.php?stat=" . $result);
    }
} else {
    header("Location: ../info.php?stat=0");
}
exit;
