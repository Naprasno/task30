<?php include 'application/views/first_section.php' ?>



<h1>Добавить комментарий</h1>

<?php
//var_dump($_SESSION['user']['login']);

require_once 'config/connect.php';
$idCoin  = $_GET['id'];
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
                    <br> <br>
                
    </div>

  </div>
  <div class="portfolio__description"> 
  </div>

</div>
<form action="vendor/addcomm.php" method="post">
                    <input type="hidden" name="id" value="<?php echo "$row[0]"?>">
                    <textarea name="comment" rows="10" cols="75" placeholder="Оставить комментарий" style="resize: none;"></textarea><br>
                    <button type="submit">Сохранить</button>
                </form>


<?php
}
?>


<?php include 'application/views/second_section.php' ?>