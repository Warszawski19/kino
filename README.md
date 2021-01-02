Działanie projekt:

---------------------------------------------------------------------------------------------------------------
STRONA DLA KLIENTÓW
Strona główna znajduje się w folderze kino:
Adres: localhost/kino lub localhost (zależy jak wgrano pliki)

Podstrony części klienta: 
- Strona główna
- Repertuar 
- Cennik
- Kontakt


Rezerwacja:
repertuar.php >> film.php >> rezerwacja.php >> rezerwuj.php >> info.php

Style css znajdują się w katalogu: style.
Główny plik css: main.css.
Opróćz tego każda podstrona ma własny arkusz stylów.

Skrypty js w katalogu: skrypty.
W folderze okladki znajdują się plakaty filmów, a w katalogu media pozostałe multimedia.

Dla ułatwienia aktualizacji zawartości elementy stałe na wszystkich podstronach są dodawane poprzez include. Znajdują się one w katalogu: komponenty.

Pliki odpowiedzialne za akcje formularzy i [opwtarzalny kod php umieszczono w folderze: pliki_serwerowe.

-----------------------------------------------------------------------------------------------------------------
PANEL ADMINA
Strona posiada także panel admina pod adresem localhost/kino/admin/ lub localhost/admin.

Podstrony części admina: 
- Strona główna
- Dodaj film 
- Filmy w bazie
- Rezerwacje
- Wypełnienie sali

Dodawanie filmów:
dodaj_film.php >> nowy.php >> dodaj_film.php

Usuwanie filmów:
filmy.php >> usun_film.php >> filmy.php

Usuwanie rezerwacji:
klienci.php >> usun_rezerwacje.php >> klienci.php

Sprawdzanie sal:
sala.php >> widownia.php

Drzewo katalogów w folderze admin jest podobne do strony klienta, z tym że każdą nazwę folderu poprzedza wyraz "admin".

-------------------------------------------------------------------------------------------------------------
Struktura mysql:

Baza danych: "kino".
Tabele: "filmy" i "rezerwacje".

kino ---|
	|----- filmy
	|----- rezerwacje

Dane logowania do mysql:
	adres: localhost
	user: michal
	password: zaq1@WSX
Dane logowania przechowuje plik: _hasla.php w katalogu głównym oraz w folderze admin.

Użyte języki i technologie:
- HTML 5
- CSS 3
- Java Script ES6
- PHP PHP 7.4
- MySQL
- Bootstrap 4
- API Google Maps
- API YouTube

-----------------------------------------------------------------------------------------------------------------
