<?php
    $hn = 'localhost'; // Nazwa hosta
    $db = 'test'; // Nazwa bazy danych
    $un = 'root'; // Nazwa użytkownika
    $pw = ''; // Hasło

    $conn = mysqli_connect($hn, $un, $pw, $db);

    if(!$conn) {
        die("Connection lost");
    }

?>
