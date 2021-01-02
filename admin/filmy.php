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
        <?php include 'admin_style/filmy.css'; ?>
        <?php include 'admin_style/main.css'; ?>
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
                        <h3 class="tytul">--- BAZA FILMÓW ---</h3>
                    </div>
                </div>
            </div>
            <div class="container hh">
                <?php
                if (isset($_REQUEST["rez"])) {
                    $rez = $_REQUEST["rez"];
                    if ($rez == 1) {
                        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Film został usunięty!</strong> Od teraz nie będzie dostępny w repertuarze.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                             </div>';
                    } else {
                        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Nie udało się usunąć filmu!</strong> Spróbuj ponownie.
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
                <?php
                include '_hasla.php';

                $com = mysqli_connect($hostname, $username, $password);
                mysqli_select_db($com, $dbname);
                mysqli_set_charset($com, "utf8");
                
                $query = "SELECT * FROM `filmy`";
                $result = mysqli_query($com, $query);

                if ($result) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo ' <div class="row wiersz">
                                    <div class="col col-sm-3 col-md-5 col-lg-4">
                                       <img src="../okladki/' . $row["Tytuł"] . '.jpg" class="float-left img-fluid okladki" alt="...">
                                    </div>
                                    <div class="col col-sm-8 col-md-6 col-lg-7">
                                        <h4>'  . $row["Tytuł"] . '</h4>
                                        <p>'  . $row["Gatunek"] . '  |  '  . $row["Czas"] . ' min</p>
                                        <p style="display: inline-block; padding: 3px; background-color: rgb(139, 139, 139); color: #fff;">' . $row["Wersja"] . '</p><br />
                                    </div>
                                    <div class="col col-sm-1 col-md-1 col-lg-1">
                                    <a href="admin_pliki_serwerowe/usun_film.php?id=' . $row["ID"]  . '">                     
                                        <button type="button" class="btn btn-danger">USUŃ FILM</button> 
                                        </a>
                                    </div>
                                </div>';
                    }
                }
                ?>
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