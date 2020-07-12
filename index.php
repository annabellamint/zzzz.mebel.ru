<?php
session_start ();
require 'vendor/autoload.php';
include ("include/db.php");
include ("include/function.php");

include ("blocks/header.php");

$url = $_SERVER['REQUEST_URI'];

if ($url === '/') {
    include ("module/registr.php");
}
if ($url == '/log') {
    include ("module/login.php");
}
if ($url == '/signup') {
    include ("module/signup.php");
}
if ($url == '/category') {
    include ("module/category.php");
}

include ("blocks/footer.php");
