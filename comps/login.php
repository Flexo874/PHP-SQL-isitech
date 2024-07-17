<?php
include_once 'pages/connect.php';

session_start();
#https://www.php.net/manual/fr/function.header.php
if (!isset($_SESSION['username'])) {
    header('location: pages/connect.php');

}

