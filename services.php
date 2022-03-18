<?php include 'application/views/first_section.php';
include_once('vendor/insert.php');
error_reporting(0);
?>
  <h1>Добавление новой монеты</h1>
<form method="post" enctype="multipart/form-data">
    <p>Номер</p>
    <input type="text" name="name">

    <p>Центр чеканки</p>
    <input type="text" name="mint_center">
    
    <p>Период чеканки</p>
    <input type="text" name="mint_year">

    <p>Материал монеты</p>
    <input type="text" name="material">

    <p>Номинал </p>
    <input type="text" name="denomination">
    
    <p>Вес</p>
    <input type="text" name="weight">

    <p>Описание-комментарий</p>
    <textarea name="description"></textarea>

    <p>Фотография</p>
    <input type="file" name="file">
    <br>
    <input type="submit" value="Добавить монету">
</form>


<?php include 'application/views/second_section.php' ?>