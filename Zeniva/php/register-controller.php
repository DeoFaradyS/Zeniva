<?php
    include ('User.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User($_POST['username'],$_POST['email'],$_POST['password']);
    $user->simpan();
    header('Location: ../html/login.php');
    // echo "<pre>";
    // var_dump($user);
    // echo "</pre>";
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['status']=='del') {
    $user = new User();
    $pesan = $user->hapus($_GET['id']);
    header('Location:index.php?pesan='.$pesan['status']);
    
}

?>