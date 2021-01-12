<!doctype html>
<html lang="pl">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>CINEMA - Rejestracja</title>
    <?php include 'komponenty/logo.php'; ?>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" rel="stylesheet" crossorigin="anonymous">
    <style>
        <?php include 'style/main.css'; ?><?php include 'style/rejestracja.css'; ?>
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
                        <h3 class="tytul">UTWÓRZ KONTO </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="container">
                <?php
                if (isset($_REQUEST["inf"])) {
                    if ($_REQUEST["inf"] == 1) {
                        echo '<div class="d-flex justify-content-center">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h4 class="alert-heading">Błąd!</h4>
                                    <p>Hasła nie są takie same. Spróbuj ponownie.</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>';
                    }
                    if ($_REQUEST["inf"] == 2) {
                        echo '<div class="d-flex justify-content-center">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h4 class="alert-heading">Błąd!</h4>
                                    <p>Użytkownik z takim adresem e-mail już istnieje. Użyj innego adresu.</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>';
                    }
                    if ($_REQUEST["inf"] == 3) {
                        echo '<div class="d-flex justify-content-center">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <h4 class="alert-heading">Błąd!</h4>
                                    <p>Napotkano problem. Spróbuj ponownie później.</p>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>';
                    }
                } ?>
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <div id="formularz">
                            <div class="d-flex justify-content-center">
                                <a id="odsylacz" href="logowanie.php">Masz już konto? ZALOGUJ</a>
                            </div>
                            <form action="pliki_serwerowe/rejestruj.php" method="POST">
                                <div class="form-group">
                                    <label for="imie">Imię: <span class="req">*</span></label>
                                    <input id="imie" name="imie" type="text" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="nazwisko">Nazwisko: <span class="req">*</span></label>
                                    <input id="nazwisko" name="nazwisko" type="text" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="login">E-mail: <span class="req">*</span></label>
                                    <input id="login" name="login" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Hasło: <span class="req">*</span></label>
                                    <a href="#formularz"  id="pop1" title="Hasło musi zawierać:" data-toggle="popover"  data-trigger="hover click" data-placement="top" data-content="małą literę, wielką literę, cyfrę od 0 do 9, znak specjalny, min. 8 znaków">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg></a>
                                    <input id="password" name="password" type="password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Powtórz hasło: <span class="req">*</span></label>
                                    <input id="password" name="powtorka" type="password" minlength="8" class="form-control" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="numer">Numer telefonu: <span class="req">*</span></label>
                                    <a href="#formularz" title="" id="pop2" data-toggle="popover" data-trigger="hover click" data-placement="top" data-content="bez oznaczenia kierunkowego, bez spacji i myślników, 9 cyfr">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                        </svg></a>
                                    <input id="numer" name="numer" type="tel" placeholder="123456789" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" class="form-control" value="" required>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="check" required>
                                    <label class="form-check-label" for="check">Mam ukończone 16 lat i potwierdzam, że przeczytałem i zrozumiałem<br /> oraz akceptuję Regulamin świadczenia usług drogą elektroniczną. <span class="req">*</span></label>
                                </div>
                                <br />
                                <p><span class="req">*</span> Pola wymagane</p>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary ">UTWÓRZ KONTO </button>
                                </div>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
        });
    </script>
</body>

</html>