<?php
require_once '../config/connect.php';
$id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `coins` WHERE `coins`.`id` = '$id'");
mysqli_query($connect, "DELETE FROM `comments` WHERE `comments`.`id_coin` = '$id'");
header('Location: /main.php');