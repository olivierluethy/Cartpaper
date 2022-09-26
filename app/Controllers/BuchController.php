<?php

class BuchController{
    public function index(){
        // Initialize the session
        session_start();

        $Instakilo = new Instakilo();
        $pdo = connectDatabase();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check if the user is already logged in, if yes then redirect him to index page
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
        
        }else {
            
        }

        // Check if the user is already logged in, if yes then redirect him to index page
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            
        }else {
            
        }
        require 'app/Views/main.view.php';
    }
}