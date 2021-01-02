<?php

$id = $_REQUEST["id"];
$tytul = "";

include '../_hasla.php';

//----------Pobranie tytułu
$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");

$query = "SELECT * FROM filmy WHERE ID = $id";
$result = mysqli_query($com, $query);

if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $tytul = $row["Tytuł"];
    }
}

//----------Usunięcie filmu
$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");

$query = "DELETE FROM `filmy` WHERE `ID`='$id'";
$result = mysqli_query($com, $query);


//----------Usunięcie okładki
$file_pointer = "../../okladki/" . $tytul . ".jpg";
if (!unlink($file_pointer)) {
    $result = 0;
} else {
    $result = 1;
}

header("Location: ../filmy.php?rez=" . $result);
exit();
