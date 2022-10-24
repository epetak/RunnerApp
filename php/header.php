<?php

    include "$directory/foreign_data/smarty/libs/Smarty.class.php";
    include "$directory/php/session.php";

    Session::createSession();
    Session::checkRole();

    $menu = include "$directory/php/menu.php";

    function logOut($path){
        Session::deleteSession();
        Session::createSession();
        Session::checkRole();
        header("Location:https://".$_SERVER['HTTP_HOST'].$path."/index.php");
    }


?>