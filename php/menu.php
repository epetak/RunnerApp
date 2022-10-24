<?php

    $logout = $_SERVER['REQUEST_URI'] ."?logout=true";

    if(isset($_SESSION["role"]) && $_SESSION["role"] == 0){
        return "<a class=\"active\" href=\"$path/index.php\">Prijava</a>
        <a class=\"nonactive\">Baza trkača</a>
        <a class=\"nonactive\">Baza utrka</a>
        <a class=\"nonactive\">Prijava</a>
        <a class=\"nonactive\">Rezultati</a>";
    }

    if(isset($_SESSION["role"]) && $_SESSION["role"] == 1){
        return "<a class=\"active\" href=\"$path/php/runners.php\">Baza trkača</a>
        <a class=\"active\" href=\"$path/php/runnerapplication.php\">Prijava trkača</a>
        <a class=\"active\" href=\"$path/php/mainrace.php\">Glavna utrka</a>
        <a class=\"active\" href=\"$path/php/firerace.php\">Utrka vatrogasaca</a>
        <a class=\"active\" href=\"$path/php/race.php\">Utrka građana</a>
        <a class=\"active\" href=\"$path/php/result.php\">Upis Rezultata</a>
        <a class=\"active\" href=\"$logout\">Odjava</a>";
    }


?>