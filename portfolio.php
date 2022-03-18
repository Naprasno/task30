<?php include 'application/views/first_section.php' ?>



<h1>Подробная информация</h1>

<?php
require_once 'config/connect.php';
$idCoin  = $_GET['id'];


$comm = mysqli_query($connect, "SELECT * FROM `comments` where id_coin =$idCoin order by id desc");
$rowcomm = mysqli_fetch_all($comm);
$icom = 0;

 $sql = mysqli_query($connect, "SELECT * FROM `coins` where id =$idCoin order by id desc");
 $row = mysqli_fetch_all($sql);
 $i = 0;
 foreach ($row as $row) {
 $i++; 
?>

<div class="parent">
  <div class="portfolio__photo"> 
    <div class="products__image">
      <a href="images/coins/<?php echo "$row[1]"?>.<?php echo "$row[2]"?>" target="_blank"> <img src="images/coins/<?php echo "$row[1]"?>.<?php echo "$row[2]"?>"> </a>
    </div>
  </div>

  <div class="portfolio__text"> 
    <div class="products__name"><?php echo "$row[3]"?></div>
    <div class="products__name__text">
      <p>центр чеканки: <?php echo "$row[4]"?></p>
      <p>период чеканки: <?php echo "$row[5]"?></p>
      <p>материал монеты: <?php echo "$row[6]"?></p>
      <p>номинал: <?php echo "$row[7]"?></p>
      <p>вес: <?php echo "$row[8]"?></p>
      <p>Описание:<?php echo "$row[9]"?></p>
    </div>
  </div>
  <div class="portfolio__description"> 
<?php } 
							if ($_SESSION['user']) {
?>
                <a href="newcomment.php?id=<?= $row[0]?>" class="products__button">Добавить комментарий </a>
                <br>
                <a href="editing.php?id=<?= $row[0]?>" class="products__button">Редактировать </a>
                <br>
                <a href="vendor/delete.php?id=<?= $row[0] ?>" class="products__button" onclick="return confirmAction()" >УДАЛЕНИЕ</a>
            <?php  }
foreach ($rowcomm as $rowcomm) {
  $i++; 
?>
  <div class = "comment_block">
    <p>Автор:<?php echo "$rowcomm[2]"?></p>
    <p>дата:<?php echo " $rowcomm[3]"?></p>
    <br>
    <p><?php echo "$rowcomm[4]"?></p>
    <?php 	if ($_SESSION['user']) {?>
      <a href="vendor/deletecomm.php?id=<?= $rowcomm[0] ?>&coin_id=<?= $row[0] ?>" >Удалить комментарий</a>
    <?php } ?>
  </div>
<?php
}
?>
  
  </div>
</div>

<script>
    function confirmAction(){
      var confirmed = confirm("Вы уверены? Это приведет к удалению этой записи");
      return confirmed;
    }
</script>

<?php include 'application/views/second_section.php'?>