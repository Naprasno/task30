<?php
require_once '../config/connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$mint_center = $_POST['mint_center']; 
$mint_year = $_POST['mint_year'];
$material = $_POST['material'];
$denomination = $_POST['denomination'];
$weight = $_POST['weight'];
$description = $_POST['description'];

mysqli_query($connect, "UPDATE `coins` SET 
`name` = '$name', 
`mint_center` = '$mint_center',
`mint_year` = '$mint_year',
`material` = '$material',
`denomination` = '$denomination',
`weight` = '$weight',
`description` = '$description'
 WHERE `coins`.`id` = '$id'");

header("Location: /portfolio.php?id=$id");



