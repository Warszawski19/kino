<?php include 'admin_pliki_serwerowe/sprawdzanie_sesji.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRUKUJ BILETY</title>
    <?php include 'admin_komponenty/head.php'; ?>
    <style>
      <?php include 'admin_style/drukuj.css'; ?>
    </style>
</head>

<body>
    <div id="strona">
        <?php

        $miejsca = explode(",", $_REQUEST['miejsca']);
        $elementy = count($miejsca);

        for ($i = 1; $i < $elementy; $i++) {
            echo '<div class="sztuka"> 
                <div class="tytul"> THE BEST CINEMA</div>
                <div class="lewa">
                    <p> FILM: ' . $_REQUEST['tytul'] . '</p>
                    <p> WERSJA: .... </p>
                    <p> ID: #' . $_REQUEST['id'] . '
                </div>
                <div class="prawa">
                    <p> GODZINA: 12:00</p>
                    <p> MIEJSCE: ' . $miejsca[$i - 1] . ' 
                    <p> RODZAJ: pojedyńczy bilet</p>
                </div>
                <div class="stopka">
                    <i>Życzymy miłego seansu !!!
                </div>
            </div>';
        };
        ?>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>

</html>