<?php

    $directory = getcwd(); // main folder path - ".../RunnerApp"
    $path = dirname($_SERVER["REQUEST_URI"]); // folder name - "/RunnerApp"

    include "$directory/php/header.php";

    if(!isset($_SERVER['HTTPS'])){
        $preusmjeri = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        header("Location:$preusmjeri");
    }
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user"]) && isset($_POST["userpass"])){
        Session::createSession();
        $_SESSION["user"] = "admin";
        $_SESSION["role"] = 1;
        header("Location:php/runners.php");
    }
    if($_SESSION["user"] == "admin" && $_SESSION["role"] == 1){
        header("Location:php/runners.php");
    }


    /* --------- SMARTY - load tpl --------- */

    $smarty = new Smarty;
    $smarty->assign("menu", $menu);
    $smarty->display("$directory/tpl/index.tpl");

?>