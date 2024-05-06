<?php
include('User.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'], $_POST['email'], $_POST['password'])) {
    $user = new User($_POST['username'], $_POST['email'], $_POST['password']);
    $user->simpan();
    header('Location: ../page/login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['status']) && $_GET['status'] == 'del' && isset($_GET['id'])) {
    $user = new User();
    $pesan = $user->hapus($_GET['id']);
    header('Location: index.php?pesan=' . $pesan['status']);
    exit();
}
