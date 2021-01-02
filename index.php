<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CINEMA - Witamy!</title>
    <?php include 'komponenty/logo.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?>
        <?php include 'style/home.css'; ?>
    </style>
</head>

<body>
    <div id="root" class="container-fluid">
        <!-- NAGŁÓWEK -->
        <?php include 'komponenty/header.php'; ?>
        <!-- MENU -->
        <?php include 'komponenty/nav.php'; ?>
        <!-- MAIN CONTENT-->
        <div class="container">
            <div class="view intro-video">
                <video poster="media/zajawka.png" playsinline autoplay muted loop>
                    <source src="media/promo.mp4" type="video/mp4">
                    Nie można odtworzy filmu :(
                </video>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <h3> O naszym kinie:</h3>
                <p><span id="tbc">THE BEST CINEMA</span> Kraków posiada 1 klimatyzowaną salę, mieszczącą jednocześnie 300 widzów. Tutaj znajduje się jedna z sześciu największych w Polsce sal, należących do najważniejszych i najdoskonalszych na świecie platform dystrybucji kinowej dla hollywoodzkich hitów. </p>
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