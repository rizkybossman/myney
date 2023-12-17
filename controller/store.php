<?php 
    include("../model/connection.php");

    var_dump($_POST);

    if (!empty($_POST)) {
        session_start();
        $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        require_once (__DIR__ . "/class/Member.php");
        
        $isLoggedIn = $member->processLogin($username, $password);
        if (! $isLoggedIn) {
            $_SESSION["errorMessage"] = "Invalid Credentials";
        }
        header("Location: ./index.php");
        exit();
    }
    
?>