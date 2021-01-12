<?php
$id = $_REQUEST["id"];

include '../_hasla.php';
$tytul = "";
$res = [];

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

$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");

$query = "SELECT `Miejsca` FROM `rezerwacje` WHERE Tytuł='$tytul'";
$result = mysqli_query($com, $query);

$wypisz = "";
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        $wypisz .= $row[0];
    }
}
echo $wypisz;
?>
