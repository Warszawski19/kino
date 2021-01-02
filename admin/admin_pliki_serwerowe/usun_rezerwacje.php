<?php

$id = $_REQUEST["id"];
echo $id;
#----------------- Pobranie tytułu filmu 
include '../_hasla.php';

$com = mysqli_connect($hostname, $username, $password);
mysqli_select_db($com, $dbname);
mysqli_set_charset($com, "utf8");

$query = "DELETE FROM `rezerwacje` WHERE `ID`='$id'";
$result = mysqli_query($com, $query);

header("Location: ../klienci.php?rez=".$result);
exit();
