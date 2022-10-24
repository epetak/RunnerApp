<?php

    class Session{

        static function createSession(){
            if(session_id() ==""){
                session_start();
            }
        }

        static function checkRole(){
            if(!isset($_SESSION["role"])){
                $_SESSION["user"] = "Guest";
                $_SESSION["role"] = 0;
            }
        }

        static function deleteSession(){
            session_unset();
            session_destroy();
        }
    }

?>