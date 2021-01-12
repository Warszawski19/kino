<?php
$from = "noreply@thebestcinema.pl";
$subject = "Aktywacja konta The Best Cinema";

// NAGŁÓWEK WIADOMOŚCI
$headers = "From: The Best Cinema";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// TREŚĆ WIADOMOŚCI
$body = '<!DOCTYPE html>
            <html lang="pl">    
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <style>
                    button:hover {
                        opacity: 0.8;
                        cursor: pointer;
                        color: white;
                    }
            
                    .paski {
                        display: block;
                        height: 50px;
                        width: 100%;
                        margin-bottom: 30px;
                        background-color: black;
                        border-bottom: 3px solid rgb(235, 152, 0);
                    }
            
                    a {
                        text-decoration: none;
                    }
            
                    button {
                        background-color: rgb(235, 152, 0);
                        border-radius: 15%;
                        color: black;
                        border: 1px solid black;
                        padding: 15px;
                    }
            
                    ul>li>span {
                        color: rgb(235, 152, 0);
                        font-weight: bold;
                    }
                </style>
            </head>    
            <body>
                <div class="paski">
                </div>
                <div style="width: 70%; margin: 0 auto">
                    <h1>Witaj ' . $name . '!</h1>
                    <p>Kliknij poniższy przycisk, aby aktywować konto <b>THE BEST CINEMA</b></p>
                    <br />
                    <div style="text-align: center">
                        <a href="' . $link . '">
                            <button type="button">Aktywuj
                                konto </button>
                        </a>
                    </div>
                    <br />
                    <h2>Od teraz masz możliwość:</h2>
                    <ul>
                        <li><span>Rezerwacji miejsc </span> – opcja dostępna
                            tylko dla
                            zarejestrowanych użytkowników
                        </li>
                        <li><span>Wygodniejszego dokonywania zakupów</span> -
                            Twoje dane zostaną automatycznie uzupełnione w trakcie procesu
                            rezerwacji i
                            zakupu
                        <li><span>Zarządzania rezerwacjami</span> – będziesz miał
                            podgląd swoich wszystkich rezerwacji i biletów, widok
                            historii
                            zakupów
                            oraz możliwość odwołania rezerwacji w razie potrzeby</li>
                        <li><span>Być zawsze na bieżąco</span> – będziesz
                            informowany o najnowszych promocjach i ofertach specjalnych, o ile
                            wyrazisz
                            zgodę
                            na ich otrzymywanie drogą mailową</li>
                    </ul>
                    <br />
                    <i>Niniejsza wiadomość jest informacją systemową, niezdbędną do realizacji usługi dostępu do konta <b>The Best
                            Cinema</b> i zamówionych usług.</i>
                    <br />
                    <br />
                    <p> Dziękujemy i do zobaczenia w kinie!
                        <br />
                        <b>Zespół The Best Cinema</b>
                    </p>
                </div>
                <div
                    style="display: block; height: 50px; width: 100%; margin-top: 30px; background-color: black; border-top: 3px solid rgb(235, 152, 0); ">
                </div>
            </body>    
            </html>';

// WYSŁANIE WIADOMOŚCI
$send = mail($to, $subject, $body, $headers);
?>
