<?php include 'application/views/first_section.php' ?>





<h1>Результат поиска</h1>

<div class="products__items">
 
    <?php
    include_once('sql_results.php');

    $search_all = array();

    $search_all['name'] = $_POST['search_name'];
    $search_all['mint_center'] = $_POST['search_mint_center'];
    $search_all['mint_year'] = $_POST['search_mint_year'];
    $search_all['material'] = $_POST['search_material'];
    $search_all['denomination'] = $_POST['search_denomination'];
    $search_all['weight'] = $_POST['search_weight'];

    /*штобл?! галочка ^_^  */ 
    foreach ($search_all as $key => $value) {
        if (empty($search_all[$key])){
            $search_all[$key] = '^';
        }
        /*echo "{$key} => {$value} ";
        print_r($arr);*/
    }


    /*var_dump($search_all);
    var_dump(empty($search_all['mint_center']));*/
    


    $row=main_search_result_all($search_all);

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