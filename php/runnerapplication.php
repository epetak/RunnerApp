<?php

    $directory = dirname(getcwd()); // main folder path - ".../RunnerApp"
    $path = dirname(dirname($_SERVER["REQUEST_URI"])); // folder name - "/RunnerApp/php"

    include "$directory/php/header.php";

    if($_SESSION["user"] != "admin" && $_SESSION["role"] != 1){
        header("Location:../index.php");
    }

    if($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["logout"])){
        logOut($path);
    }

    /* --------- SMARTY - load tpl --------- */

    $smarty = new Smarty;
    $smarty->assign("menu", $menu);
    $smarty->display("$directory/tpl/runnerapplication.tpl");


?>