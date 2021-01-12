<?php
session_start();
include '../pliki_serwerowe/sprawdzanie_sesji.php';

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// POBRANIE DANYCH Z FORMULARZA
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_filmu = input($_POST["film_id"]);
    $seats = input($_POST["seats"]);
    // $name = input($_POST["name"]);
    // $phone = input($_POST["phone"]);
    $id_usera = input($_POST['user_id']);
}

include '../_hasla.php';

// POBRANIE TYTUŁU NA PODSTWIE ID FILMU
$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");
$query = "SELECT * FROM `filmy` WHERE ID = $id_filmu";
$wynik = mysqli_query($com, $query);

$title = "";
if ($wynik) {
    while ($row = mysqli_fetch_array($wynik)) {
        $title = $row["Tytuł"];
    }
}

// DODANIE REZERWACJI
$zapyt = "INSERT INTO `rezerwacje`(`Tytuł`, `Miejsca`, `ID_uzytkownika`) VALUES ('$title', '$seats', '$id_usera')";
$result = mysqli_query($com, $zapyt);

// PRZEKIEROWANIE DO ODPOWIEDNIEJ STRONY
if ($result == 1) {
    $id_rezerwacji = mysqli_insert_id($com);
    header("Location: ../info.php?rez=" . $id_rezerwacji . "");
}
else{
    header("Location: ../info.php");
}

mysqli_close($com);
?>