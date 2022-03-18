<?php include 'application/views/first_section.php' ?>





<h1>Результат поиска</h1>
<div class="products__items">
 
    <?php
    include_once('sql_results.php');
    $search = $_POST['search'];
    $row=main_search_result($search);

    foreach ($row as $row) {    
    ?>
     <div class="products__item">
        <div class="products__image">
            <img src="images/coins/<?php echo "$row[1]"?>.<?php echo "$row[2]"?>" alt="">
        </div>
        <div class="products__name"><?php echo "$row[3]"?></div>
        <div class="products__description"><?php echo "$row[4]"?> <?php echo "$row[7]"?></div>  
        <div><a href="portfolio.php?id=<?= $row[0] ?>" style = "display:block" class="products__button">Подробнее </a></div>
    </div>
    <?php
        }
    ?>          
</div>







<?php include 'application/views/second_section.php' ?>