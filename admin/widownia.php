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
        <?php include 'admin_style/main.css'; ?><?php include 'admin_style/widownia.css'; ?>
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
                        <h3 class="tytul">--- PODGLĄD SALI---</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="row">
                <div class="col-sm-12">
                    <h3 id="tyt">
                        <?php
                        require_once "admin_pliki_serwerowe/tytul_filmu.php";
                        ?>
                    </h3>
                    <div id="pustak">
                        <?php
                        require_once "admin_pliki_serwerowe/zajete_miejsca.php";
                        ?>
                    </div>
                </div>
            </div>
            <div class=" container sala">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="ekran">
                            <img class="img-fluid" src="../media/screen.png" alt="ekran" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="widownia"></div>
                    </div>
                </div>
                <div class="row karta">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="tresc">
                                    <h5>Wszystkie miejsca są wolne</h5>
                                    <h5>Liczba miejsc: 300</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STOPKA -->
        <?php include 'admin_komponenty/footer.php'; ?>
    </div>
    <script src="admin_skrypty/miejsca.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>