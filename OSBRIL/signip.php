<?php
    session_start();
    require_once 'connect.php';

    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
   

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        
        
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "email" => $user['email']


        ];

        if($email == "admin@gmail.com" or $password == "0000"){
            header('Location: /admin.php');
        }
        else{
            header('Location: /vxod.html');
        }

    }else{
        echo " <script> alert('Не верный email или пароль')</script>";
        // $_SESSION['message'] = 'Не верный email или пароль';
        header('Location: /avtoriz.php');
        

    }
    
?>