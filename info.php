<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CINEMA <?php $stat = $_REQUEST["stat"];
                    if ($stat == 1) {
                        echo '- Sukces !';
                    } else {
                        echo '- Niepowodzenie !';
                    }
                    ?></title>
    <?php include 'komponenty/logo.php'; ?>

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
                        $stat = $_REQUEST["stat"];

                        if ($stat == 1) {
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
                                $stat = $_REQUEST["stat"];

                                if ($stat == 1) {
                                    $id = $_REQUEST["id"];
                                    include '_hasla.php';

                                    $com = mysqli_connect($hostname, $username, $password);
                                    mysqli_select_db($com, $dbname);
                                    mysqli_set_charset($com, "utf8");
                                    
                                    $query = "SELECT * FROM rezerwacje WHERE ID = $id";
                                    $result = mysqli_query($com, $query);

                                    if ($result) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo
                                                '<h5>Szczegóły rezerwacji:</h5>
                                                <p>Imie i nazwisko: <b>' . $row["Imie i nazwisko"] . '</b></p>
                                                <p>Numer telefonu: <b>' . $row["Numer telefonu"] . '</b></p>
                                                <p>Film: <b>' . $row["Tytuł"] . '</b></p>
                                                <p>Miejsca: <b>' . $row["Miejsca"] . '</b></p>
                                                <p>ID rezerwacji: <b>' . $id . '</b></p>';
                                        }
                                    }
                                } else {
                                    echo
                                        '<p>Jeżeli problem się powtarza - skontaktuj się z nami:</p>
                                        Telefon: (12) 123 45 56; (12) 987 65 43<br />
                                        E-mail: rezerwacje.krakow@thebestcinema.pl';
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