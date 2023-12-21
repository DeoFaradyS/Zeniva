<?php
require_once('User.php');

if(@$_POST['btn-login']!=null){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo $usr."|".$pwd;
    $user = new User();
    if($username!=null && $password!=null){        
        $data = $user->auth($username,$password);
        if($data!=null){
            session_start();
            $_SESSION['username']=$data['username'];
            $_SESSION['password']=$data['password'];
            header('Location:index.php');
        }else{
            header('Location:../html/login.php?pesan=username atau password salah!');    
        }
        
    }else{
        header('Location:../html/login.php?pesan=username atau password kosong!');
    }
}
?>