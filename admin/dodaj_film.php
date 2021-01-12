<?php include 'admin_pliki_serwerowe/sprawdzanie_sesji.php'; ?>
<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'admin_komponenty/head.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'admin_style/main.css'; ?>
        <?php include 'admin_style/dodaj_film.css'; ?>
    </style>
</head>

<body>
    <div id="root" class="container-fluid">
        <!-- NAGŁÓWEK -->
        <?php include 'admin_komponenty/header.php'; ?>
        <!-- MENU -->
        <?php include 'admin_komponenty/nav.php'; ?>
        <!-- MAIN CONTENT -->
        <div class="tytulowy">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="tytul">--- DODAJ FILM ---</h3>
                    </div>
                </div>
            </div>
            <div class="container hh">
                <?php
                if (isset($_REQUEST["up"])) {
                    $up = $_REQUEST["up"];
                    if ($up == 1) {
                        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Film został dodany!</strong> Od teraz jest dostępny w repertuarze.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    } else {
                        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Niepowodzenie!</strong></br>'  . $_REQUEST["error"] .'
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }
                }
                ?>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="formularz">
                            <form action="admin_pliki_serwerowe/nowy.php" method="POST" enctype="multipart/form-data">                           
                                <div class="form-group">
                                    <label for="tytul">Tytuł: </label>
                                    <input id="tytul" name="tytul" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="gatunek"> Gatunek: </label>
                                    <input id="gatunek" name="gatunek" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="czas"> Czas: </label>
                                    <input id="czas" name="czas" type="number" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="wersja"> Wersja: </label>
                                    <select class="form-control" id="wersja" name="wersja" required>
                                        <option>PL</option>
                                        <option>Napisy PL</option>
                                        <option>Dubbing PL</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="data">Data premiery: </label>
                                    <input id="data" name="data" type="text" class="form-control" placeholder="RRRR-MM-DD" required>
                                </div>
                                <label for="opis">Opis:</label>
                                <textarea class="form-control" id="opis" name="opis" rows="5" required></textarea>
                                <div class="form-group">
                                    <label for="zwiastun">Zwiastun: </label>
                                    <input id="zwiastun" name="zwiastun" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="plakat">Plakat: </label>
                                    <input id="plakat" name="plakat" type="file" class="form-control" required>
                                </div>
                                <p>Wszystkie pola są wymagane !</p>
                                <div class="container">
                                    <button type="submit" class="btn  btn-primary mx-auto d-block">DODAJ FILM</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STOPKA -->
        <?php include 'admin_komponenty/footer.php'; ?>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>