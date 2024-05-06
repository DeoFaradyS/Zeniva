<?php
session_start(); 
require_once('../controller/Product.php');


if (isset($_SESSION['username'])) {
    include ('../components/user/header-logged.php');
    include ('../components/user/main.php');
    include ('../components/user/footer.php');
} else {
    include ('../components/user/header.php');
    include ('../components/user/main.php');
    include ('../components/user/footer.php');
}

