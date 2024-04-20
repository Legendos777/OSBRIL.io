<?php
    session_start();
    require_once 'connect.php';

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $nomer = $_POST['nomer'];
    $password = $_POST['password'];
    $password_repeat = $_POST['password_repeat'];

    if ($password === $password_repeat){


        $password = md5($password);
        $password_repeat = md5($password_repeat);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `email`, `nomer`, `password`, `password_repeat`) VALUES (NULL, '$full_name', '$email', '$nomer', '$password', '$password_repeat')");

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: /avtoriz.php');


    }else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: /registr.php');
    }

?>