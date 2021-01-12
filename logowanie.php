<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CINEMA - Logowanie</title>
    <?php include 'komponenty/logo.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?><?php include 'style/logowanie.css'; ?>
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
                        <h3 class="tytul">ZALOGUJ SIE </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <?php
                if (isset($_REQUEST["log"])) {
                    if ($_REQUEST["log"] == 0) {
                        echo '<div class="d-flex justify-content-center">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h4 class="alert-heading">Niepowodzenie!</h4>
                                    <p>Niestety, logowanie nie powiodło się. Upewnij się, że wprowadzone dane są prawidłowe..</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>';
                    }
                }
                ?>
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <div id="formularz">
                            <form action="pliki_serwerowe/zaloguj.php" method="POST">
                                <div class="form-group">
                                    <label for="login">E-mail: </label>
                                    <input id="login" name="login" type="email" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Hasło: </label>
                                    <input id="password" name="password" type="password" minlength="8" class="form-control" value="" required>
                                </div>
                                <br />
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">LOGUJ</button>
                                </div>
                            </form>
                            <br />
                            <div id="odsylacz">
                                <a href="rejestracja.php">Nie masz jeszcze konta? REJESTRACJA</a>
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