<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Michał Warszawski">

    <title>CINEMA - Cennik</title>
    <?php include 'komponenty/logo.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?>
        <?php include 'style/cennik.css'; ?>
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
                        <h3 class="tytul">CENNIK </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <div class="row wpis">
                    <h3 class="akapit">FILMY 2D </h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pn-Wt; Czw-Pt</th>
                                <th scope="col">Środa</th>
                                <th scope="col">Weekend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Normalny</th>
                                <td>21,0 zł</td>
                                <td>16,5 zł</td>
                                <td>25,0 zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Ulgowy</th>
                                <td>17,0 zł</td>
                                <td>16,5 zł</td>
                                <td>21,0 zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Student</th>
                                <td>17,0 zł</td>
                                <td>16,5 zł</td>
                                <td>21,0 zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Senior</th>
                                <td>17,0 zł</td>
                                <td>16,5 zł</td>
                                <td>21,0 zł</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <h3 class="akapit">FILMY 3D </h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pn-Wt; Czw-Pt</th>
                                <th scope="col">Środa</th>
                                <th scope="col">Weekend</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Normalny</th>
                                <td>23,0 zł</td>
                                <td>16,5 zł</td>
                                <td>27,0 zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Ulgowy</th>
                                <td>19,0 zł</td>
                                <td>16,5 zł</td>
                                <td>23,0 zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Student</th>
                                <td>19,0 zł</td>
                                <td>16,5 zł</td>
                                <td>23,0 zł</td>
                            </tr>
                            <tr>
                                <th scope="row">Senior</th>
                                <td>19,0 zł</td>
                                <td>16,5 zł</td>
                                <td>23,0 zł</td>
                            </tr>
                        </tbody>
                    </table>
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