<?php include 'application/views/first_section.php' ?>



<h1>Редактирование</h1>

<?php
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
                <form action="vendor/update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo "$row[0]"?>">

                    <p>Номер</p>
                    <input type="text" name="name" value="<?php echo "$row[3]"?>">
                    <p>центр чеканки</p>
                    <input type="text" name="mint_center" value="<?php echo "$row[4]"?>">
                    <p>период чеканки</p>
                    <input type="text" name="mint_year" value="<?php echo "$row[5]"?>">
                    <p>материал монеты</p>
                    <input type="text" name="material" value="<?php echo "$row[6]"?>">
                    <p>номинал</p>
                    <input type="text" name="denomination" value="<?php echo "$row[7]"?>">
                    <p>вес</p>
                    <input type="text" name="weight" value="<?php echo "$row[8]"?>">
                    <p>Описание</p>
                    <textarea name="description" ><?php echo "$row[9]"?></textarea>
                    <br> <br>
                    <button type="submit">Сохранить</button>
                </form>
    </div>
  </div>

</div>



<?php
}
?>


<?php include 'application/views/second_section.php' ?>