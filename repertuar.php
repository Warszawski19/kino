<?php session_start(); ?>
<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CINEMA - Repertuar</title>
    <?php include 'komponenty/logo.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?><?php include 'style/repertuar.css'; ?>
    </style>

</head>

<body>
    <?php include 'komponenty/messenger.php'; ?>

    <div id="root" class="container-fluid">
        <!-- NAGŁÓWEK -->
        <?php include 'komponenty/header.php'; ?>
        <!-- MENU -->
        <?php include 'komponenty/nav.php'; ?>
        <!-- MAIN CONTENT -->
        <div class="tytulowy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="tytul">REPERTUAR </h3><select id="miasto">
                            <option>Kraków - Monte Cassino</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <?php
                include '_hasla.php';

                $com = mysqli_connect($hostname, $username, $password);
                mysqli_select_db($com, $dbname);
                mysqli_set_charset($com, "utf8mb4_polish_ci");
                $query = "SELECT * FROM `filmy`";
                $result = mysqli_query($com, $query);

                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo ' <div class="row wiersz">
                                    <div class="col col-sm-4 col-md-6 col-lg-4">
                                        <a  href="film.php?id=' . $row["ID"] . '"> <img src="okladki/' . $row["ID"] . '.jpg" class="float-left img-fluid okladki" alt="' . $row["Tytuł"] . '"></a>
                                    </div>
                                    <div class="col col-sm-8 col-md-6 col-lg-8">
                                        <a id="linkacz" href="film.php?id=' . $row["ID"] . '"><h4>'  . $row["Tytuł"] . '</h4></a>
                                        <p>'  . $row["Gatunek"] . '  |  '  . $row["Czas"] . ' min</p>
                                        <p style="display: inline-block; padding: 3px; background-color: rgb(139, 139, 139); color: #fff;">' . $row["Wersja"] . '</p><br />
                                    </div>
                                </div>';
                    }
                } ?>
            </div>
        </div>
        <!-- STOPKA -->
        <?php include 'komponenty/footer.php'; ?>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>