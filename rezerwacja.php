<?php session_start(); ?>
<?php include 'pliki_serwerowe/sprawdzanie_sesji.php'; ?>
<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CINEMA - Rezerwacja</title>
    <?php include 'komponenty/logo.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?><?php include 'style/rezerwacja.css'; ?>
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
                        <h3 class="tytul"> REZERWACJA </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main" id="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 id="tyt">
                            <?php
                            require_once "pliki_serwerowe/tytul_filmu.php";
                            ?>
                        </h3>
                        <div id="pustak">
                            <?php
                            require_once "pliki_serwerowe/zajete_miejsca.php";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" container sala">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="ekran">
                            <img class="img-fluid" src="media/screen.png" alt="ekran" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="align-middle">
                            <div id="widownia" class="">
                                <script src="skrypty/rezerwacja.js"></script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="formularz">
                            <form action="pliki_serwerowe/rezerwuj.php" method="POST">
                                <input name="film_id" type="text" value="<?php echo $_REQUEST["id"]; ?>" style="display: none;" required>
                                <input name="user_id" type="text" value="<?php echo $_SESSION['id']; ?>" style="display: none;" required>
                                <div class="form-group">
                                    <label for="seats"><span class="req">*</span> Miejsca: (wybierz klikając powyżej)</label>
                                    <input id="seats" name="seats" type="text" class="form-control" placeholder="miejsce1,miejsce2..." value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="name"><span class="req">*</span> Imie i nazwisko: </label>
                                    <input id="name" name="name" type="text" class="form-control" value='<?php echo $_SESSION['nazwa']; ?>' required>
                                </div>
                                <div class="form-group">
                                    <label for="phone"><span class="req">*</span> Numer telefonu: </label>
                                    <input id="phone" name="phone" type="number" class="form-control" value='<?php echo $_SESSION['numer']; ?>' required>
                                    <small id="smallphone" class="form-text text-muted">Nie udostępnimy nikomu twojego numeru.</small>
                                </div>
                                <!-- <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check" required>
                                    <label class="form-check-label" for="check">Przeczytałam(em) i akceptuję Regulamin rezerwacji i zakupu biletów on-line <span class="req">*</span></label>
                                </div> -->
                                <p><span class="req">*</span> Pola wymagane</p>
                                <button type="submit" class="btn btn-primary">REZERWUJ</button>
                            </form>
                        </div>
                    </div>
                </div>
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