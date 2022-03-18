<?php
session_start();
require_once '../config/connect.php';
//var_dump($_SESSION['user']['login']);
$id = $_POST['id'];
$user = $_SESSION['user']['login'];
$date = date("Y-m-d H:i:s");
$comment = $_POST['comment'];

mysqli_query($connect, "INSERT INTO `comments`( `id_coin`, `user`, `d_date`, `comm`) VALUES ('$id','$user','$date','$comment')");

header("Location: /portfolio.php?id=$id");
