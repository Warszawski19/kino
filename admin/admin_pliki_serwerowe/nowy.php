<?php

function input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// POBRANIE DANYCH Z FORMULARZA
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = input($_POST["id"]);
    $tytul = input($_POST["tytul"]);
    $gatunek = input($_POST["gatunek"]);
    $czas = input($_POST["czas"]);
    $wersja = input($_POST["wersja"]);
    $data = input($_POST["data"]);
    $opis = input($_POST["opis"]);
    $zwiastun = htmlspecialchars(input($_POST["zwiastun"]));
}

include '../_hasla.php';

$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");
$query = "INSERT INTO `filmy` (`Tytuł`,`Gatunek`, `Czas`, `Wersja`,`Data premiery`, `Opis`, `Zwiastun`) VALUES ('$tytul','$gatunek', '$czas', '$wersja', '$data','$opis','$zwiastun')";
$result = mysqli_query($com, $query);

// UPLOAD ZDJĘCIA PLAKATU
$target_dir = "../../okladki/";
$target_file = $target_dir . $_FILES["plakat"]["name"];
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

$error = "";
$uploadOk = 1;
// Sprzwdzenei czy plik jest obrazem
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["plakat"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        $error =  "Plik nie jest obrazem.";
        $uploadOk = 0;
    }
}

// Sprawdzenie czy dany plik już istnieje
if (file_exists($target_file)) {
    $error = "Plik już istnieje.";
    $uploadOk = 0;
}

// Sprawdzenei czy plik nie jest za duży
if ($_FILES["plakat"]["size"] > 30000) {
    $error = "Plik jest za duży.";
    $uploadOk = 0;
}

// Sprawdzenie czy plik ma odpowiednie rozszerzenie
if ($imageFileType != "jpg") {
    $error  =  "Dozwolone są tylko pliki JPG.";
    $uploadOk = 0;
}

// Odpowiedź serwera
if ($uploadOk == 0) {
    header("Location: ../dodaj_film.php?up=" . $uploadOk . "&error=" . $error);
} else {
    $target_file = $target_dir . $tytul . ".jpg";
    if (move_uploaded_file($_FILES["plakat"]["tmp_name"], $target_file)) {
        header("Location: ../dodaj_film.php?up=" . $uploadOk);
    }
};
?>
