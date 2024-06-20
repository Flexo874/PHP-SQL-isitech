<?php

session_start();
#https://www.php.net/manual/fr/function.header.php
if (!isset($_SESSION['username'])) {
    header('location: /B1/pages/connect.php');

}

