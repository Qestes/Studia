<?php
    session_start();

    if(!isset($_POST['login'])){
        $_SESSION['error'] = "Nie podano loginu lub emailu.";
        header("Location: ../index.php");
		die;
    }
    if(!isset($_POST['password'])){
        $_SESSION['error'] = "Nie podano hasła.";
        header("Location: ../index.php");
		die;
    }

    $login    = $_POST['login'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "kawusia");
    $sql = "SELECT `password` FROM `user` WHERE `nickname` = '$login' OR `email` = '$email';";
    $result = $conn->query($sql);
    if($result && mysqli_num_rows($result) > 0)
    {
        $user_data = mysqli_fetch_assoc($result);   
        if($user_data['password'] == $password)
        {
            $_SESSION['login'] = $password;
            $_SESSION['error'] = NULL;
            header("Location: ../index.php");
            die;
        }
    }
    else{
        $_SESSION['error'] = "Złe dane logowania.";
        header("Location: ../index.php");
        die;
    }
?>