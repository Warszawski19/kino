<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CINEMA - Film</title>
    <?php include 'komponenty/logo.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">

    <style>
        <?php include 'style/main.css'; ?><?php include 'style/film.css'; ?>
    </style>

</head>

<body>
    <div id="root" class="container-fluid">
        <!-- NAGŁÓWEK -->
        <?php include 'komponenty/header.php'; ?>
        <!-- MENU -->
        <?php include 'komponenty/nav.php'; ?>
        <!-- MAIN CONTENT -->
        <div class="main">
            <?php
            $id = $_REQUEST["id"];

            include '_hasla.php';

            $com = mysqli_connect($hostname, $username, $password);
            mysqli_select_db($com, $dbname);
            mysqli_set_charset($com, "utf8");

            $query = "SELECT * FROM filmy WHERE ID = $id";

            $result = mysqli_query($com, $query);

            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    echo
                        '<div class="container">
                            <h3>"' . $row["Tytuł"] . '"</h3>
                            <div class="view intro-video">'
                            . $row["Zwiastun"] .
                            '</div>
                        </div>
                        <div class="container">
                            <div class="info">
                                <div><b>Data premiery: </b>' . $row["Data premiery"] . '</div>
                                <div><b>Czas trwania: </b> ' . $row["Czas"] . ' min</div>
                                <div><b>Opis: </b></div>
                                <p>' . $row["Opis"] . '</p>
                            </div>
                        </div>
                        <div class="container">
                            <a href="rezerwacja.php?id=' . $row["ID"]  . '">      
                                <button class="btn mx-auto d-block kup">KUP BILET</button>
                            </a>
                        </div>';
                }
            }
            ?>
        </div>
        <!-- STOPKA -->
        <?php include 'komponenty/footer.php'; ?>

        <!-- < !--jQuery first, then Popper.js, then Bootstrap JS-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>