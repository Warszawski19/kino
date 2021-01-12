<?php session_start(); ?>
<?php include 'pliki_serwerowe/sprawdzanie_sesji.php'; ?>
<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'komponenty/logo.php'; ?>
    <title>CINEMA - Aktywacja</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?><?php include 'style/profil.css'; ?>
    </style>

</head>

<body>
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
                        <h3 class="tytul">MOJE KONTO</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container komunikat">
                <div class="row">
                    <div class="col col-sm-12">
                        <div class="card">
                            <div class="card-body gora">
                                <div class="row ">
                                    <div class="col col-sm-4 ikona d-flex align-items-center justify-content-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z" />
                                        </svg>
                                    </div>
                                    <div class="col col-sm-8 tekst">
                                        <?php
                                        $id = $_SESSION["id"];

                                        include '_hasla.php';
                                        $com = mysqli_connect($hostname, $username, $password);
                                        mysqli_select_db($com, $dbname);
                                        mysqli_set_charset($com, "utf8");
                                        $query = "SELECT * FROM `uzytkownicy`  WHERE `ID` = '$id'";
                                        $result = mysqli_query($com, $query);

                                        if ($result) {
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<p> ID: <b>#' . $row["ID"] . '</b></p>
                                                    <p> Imię: <b>' . $row["Imie"] . '</b></p>
                                                    <p> Nazwisko: <b>' . $row["Nazwisko"] . '</b></p>
                                                    <p> E-mail: <b>' . $row["E-mail"] . '</b></p>
                                                    <p> Telefon: <b>' . $row["Telefon"] . '</b></p>';
                                            }
                                        }
                                        mysqli_close($com);
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="lista">
                    <div class="col col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4> MOJE REZERWACJE: </h4>
                                <div class="okno">
                                    <?php
                                    $id = $_SESSION["id"];

                                    $com = mysqli_connect($hostname, $username, $password);
                                    mysqli_select_db($com, $dbname);
                                    mysqli_set_charset($com, "utf8mb4_polish_ci");
                                    $query = "SELECT * FROM `rezerwacje` WHERE `ID_uzytkownika` = '$id'";
                                    $result = mysqli_query($com, $query);
                                    $count = mysqli_num_rows($result);

                                    if ($count > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo '<div class="wpis card mb-3" >
                                                    <div class="card-header">Rezerwacja  #' . $row["ID"] . '</div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col col-sm-12 col-md-8">
                                                                <h5 class="card-title">' . $row["Tytuł"] . '</h5>
                                                                <p class="card-text">Miejsca: ' . $row["Miejsca"] . '</p>
                                                            </div>
                                                            <div class="col col-sm-12 col-md-4">
                                                                <a href="drukowanie.php?id=' . $row["ID"]  . '&tytul=' . $row["Tytuł"] . '&miejsca=' . $row["Miejsca"] . '">                     
                                                                    <button class="kliki btn btn-secondary">DRUKUJ BILETY</button> 
                                                                </a>    
                                                                <a href="pliki_serwerowe/wycofaj.php?rez=' . $row["ID"]   . '">                     
                                                                    <button class="kliki btn btn-danger">ANULUJ REZERWACJE</button> 
                                                                </a>            
                                                            </div>
                                                        </div>
                                                     </div>
                                                </div>';
                                        }
                                    } else {
                                        echo '<div class="wpis card mb-3" >                                       
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col rezi col-sm-12">
                                                    <h5 class="card-title"> Nie masz jeszcze żadnej rezerwacji !</h5>
                                                    <p class="card-text"> Jeżeli zarezerwujesz miejsca wpis pojawi sięw tym miejscu.</p>
                                                </div>                                                
                                            </div>
                                         </div>
                                    </div>';
                                    } ?>
                                </div>
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