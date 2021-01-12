<?php session_start(); ?>
<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'komponenty/logo.php'; ?>
    <title>CINEMA <?php
                    if (isset($_REQUEST["rez"])) {
                        if ($_REQUEST["rez"] != "") {
                            echo '- Sukces !';
                        } else {
                            echo '- Niepowodzenie !';
                        }
                    } else if (isset($_REQUEST["kom"])) {
                        if ($_REQUEST["rez"] != "") {
                            echo '- Sukces !';
                        } else {
                            echo '- Niepowodzenie !';
                        }
                    }
                    ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?><?php include 'style/info.css'; ?>
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
            <div class="container dymek">
                <div class="row">
                    <div class="col col-sm-12">
                        <?php
                        if (isset($_REQUEST["rez"])) {
                            if ($_REQUEST["rez"] != "") {
                                echo '<div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading hh">Sukces!</h4> 
                                    <hr>
                                    <p class="mb-0 pp">Twoje bilety zostały pomyślnie zarezerwowane.</p>
                                </div>';
                            } else {
                                echo '<div class="alert alert-danger hh" role="alert">
                                    <h4 class="alert-heading hh">Nie udało się dokonać rezerwacji !</h4> 
                                    <hr>
                                    <p class="mb-0 pp">Sprawdź czy poprawnie uzupełniłeś formularz lub spróbuj ponownie za chwilę.</p>
                                </div>';
                            }
                        } else if (isset($_REQUEST["kom"])) {
                            if ($_REQUEST["kom"] == "1") {
                                echo '<div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading hh">Sukces!</h4> 
                                    <hr>
                                    <p class="mb-0 pp">Pomyślnie anulowano rezerwację: <b>#' . $_REQUEST["id"] . '</b></p>
                                </div>';
                            } else if ($_REQUEST["kom"] == "0") {
                                echo '<div class="alert alert-danger hh" role="alert">
                                    <h4 class="alert-heading hh">Niepowodzenie!</h4> 
                                    <hr>
                                    <p class="mb-0 pp">
                                    Anulowanie rezerwacji nieudane.
                                    </p>
                                </div>';
                            } else if ($_REQUEST["kom"] == "3") {
                                echo '<div class="alert alert-danger hh" role="alert">
                                <h4 class="alert-heading hh">Błąd!</h4> 
                                <hr>
                                <p class="mb-0 pp">
                                    Próbujesz usunąć nie swoją rezerwację!
                                </p>
                            </div>';
                            }
                        } else if (isset($_REQUEST["rej"])) {
                            if ($_REQUEST["rej"] == "1") {
                                echo '<div class="alert alert-success hh" role="alert">
                            <h4 class="alert-heading hh">Konto zostało utworzone!</h4> 
                            <hr>
                            <p class="mb-0 pp">
                                Wysłaliśmy do Ciebie wiadomość na podany adres e-mail.
                                Sprawdź pocztę i aktywuj konto!
                            </p>
                        </div>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="container komunikat">
                <div class="row">
                    <div class="col col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                if (isset($_REQUEST["rez"])) {
                                    if ($_REQUEST["rez"] != "") {
                                        include '_hasla.php';

                                        $rez = $_REQUEST["rez"];
                                        $com = mysqli_connect($hostname, $username, $password);
                                        mysqli_select_db($com, $dbname);
                                        mysqli_set_charset($com, "utf8");

                                        $query = "SELECT * FROM rezerwacje WHERE ID = $rez ";
                                        $result = mysqli_query($com, $query);

                                        if ($result) {
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<h5>Szczegóły rezerwacji:</h5>
                                            <div class="row">
                                                <div class="col col-sm-10">
                                                    <p>ID rezerwacji: <b>#' . $rez . '</b></p>
                                                    <p>Imie i nazwisko: <b>' . $_SESSION['nazwa'] . '</b></p>
                                                    <p>Numer telefonu: <b>' . $_SESSION["numer"] . '</b></p>
                                                    <p>Film: <b>' . $row["Tytuł"] . '</b></p>
                                                    <p>Miejsca: <b>' . $row["Miejsca"] . '</b></p>
                                                    <p>ID użytkownika: <b>#' . $row["ID_uzytkownika"] . '</b></p>
                                                </div>
                                                <div class="col col-sm-2">
                                                    <a href="pliki_serwerowe/wycofaj.php?rez=' . $rez   . '">                     
                                                         <button class="btn btn-danger">ANULUJ REZERWACJE</button> 
                                                    </a>
                                                </div>
                                            </div>';
                                            }
                                        }
                                    } else {
                                        echo '<p>Jeżeli problem się powtarza - skontaktuj się z nami:<br />
                                            Telefon: (12) 123 45 56; (12) 987 65 43<br />
                                            E-mail: rezerwacje.krakow@thebestcinema.pl</p>';
                                    }
                                }
                                if (isset($_REQUEST["kom"])) {
                                    if ($_REQUEST["kom"] == "0") {
                                        echo '<p>Jeżeli problem się powtarza - skontaktuj się z nami:<br />
                                        Telefon: (12) 123 45 56; (12) 987 65 43<br />
                                        E-mail: rezerwacje.krakow@thebestcinema.pl</p>';
                                    }
                                }
                                if (isset($_REQUEST["kom"])) {
                                    if ($_REQUEST["kom"] == "1") {
                                        echo '<h5> KLiknij, aby wrócić do listy rezerwacji:
                                          <a href="profil.php#lista">                     
                                        <button class="btn btn-warning">MOJE REZERWACJE</button> 
                                     </a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STOPKA -->
        <?php include 'komponenty/footer.php'; ?>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>