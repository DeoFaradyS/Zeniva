<?php
require_once('User.php');

if(isset($_POST['btn-login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new User();
    if(!empty($username) && !empty($password)){        
        $data = $user->auth($username, $password);
        if($data !== null){
            session_start();
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            header('Location: ../page/index.php');
            exit();
        }else{
            header('Location: ../page/login.php?pesan=username atau password salah!&alert=true');    
            exit();
        }
    }else{
        header('Location: ../page/login.php?pesan=username atau password kosong!');
        exit();
    }
}

