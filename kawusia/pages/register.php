<?php
    session_start();

    if(!isset($_POST['reg_login'])){
        $_SESSION['error'] = "Nie podano loginu.";
        header("Location: ../index.php");
		die;
    }
    if(!isset($_POST['reg_email'])){
        $_SESSION['error'] = "Nie podano emailu.";
        header("Location: ../index.php");
		die;
    }
    if(!isset($_POST['reg_pass'])){
        $_SESSION['error'] = "Nie podano hasła.";
        header("Location: ../index.php");
		die;
    }
    if(!isset($_POST['reg_rep'])){
        $_SESSION['error'] = "Podane hasła się nie zgadzają.";
        header("Location: ../index.php");
		die;
    }
    if(isset($_POST['reg_tel'])){
        $tel = $_POST['reg_tel'];
    }

    $login = $_POST['reg_login'];
    $email = $_POST['reg_email'];
    $pass  = $_POST['reg_pass'];
    $rep   = $_POST['reg_rep'];

    if(strlen($login) < 6 || strlen($login) > 30){
        $_SESSION['error'] = "Login musi mieć od 6 do 30 znaków.";
        header("Location: ../index.php");
		die;
    }
    if(strlen($pass) < 6 || strlen($pass) > 60){
        $_SESSION['error'] = "Hasło musi składać się od 6 do 60 znaków";
    }
    if($pass != $rep){
        $_SESSION['error'] = "Podane hasłą się różnią.";
        header("Location: ../index.php");
		die;
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['error'] = "Podano niepoprawny adres email.";
        header("Location: ../index.php");
		die;
    }

    $conn = new mysqli("localhost", "root", "", "kawusia");

    $sql = "INSERT INTO `user` VALUES(NULL, '$login', '$email', '$pass', 'blank')";
    
    if(!$conn->query($sql)){
        echo $conn->error_log;
        header("Location: ../index.php");
		die;
    }

    $_SESSION['login'] = $login;
    $_SESSION['error'] = NULL;
    header("Location: ../index.php");
		die;

?>