<?php

session_start();
#https://www.php.net/manual/fr/function.header.php
if (!isset($_SESSION['username'])) {
    header('location: ./php-SQL-isitech/pages/connect.php');

}

