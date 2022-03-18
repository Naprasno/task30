<?php
require_once '../config/connect.php';
$id = $_GET['id'];
$coin_id = $_GET['coin_id'];
mysqli_query($connect, "DELETE FROM `comments` WHERE `comments`.`id` = '$id'");
header("Location: /portfolio.php?id=$coin_id");