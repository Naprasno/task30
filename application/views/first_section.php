<?php 
session_start();
/*
if (!$_SESSION['user']) {
    header('Location: /');
}*/
//error_reporting(0);
if( isset($_GET['error']) && $_GET['error'] == "true" ) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
} else{
error_reporting(0);
ini_set("display_errors", 0);
};

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>учусь, ногами не пинать</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<!-- <a href="/">Монетки</a> -->
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/main.php">Галерея</a></li>
						
						<?php 
							if ($_SESSION['user']) {

    							echo '<li><a href="/services.php">Добавить монету</a></li><li><a href="vendor/logout.php" class="logout">Выход</a></li>' ;
							}
							else {
								echo '<li><a href="index.php" class="logout">Войти</a></li>';
							}
						?>
						
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar" class="sticky">
					<div class="side-box" >
						<h3>Основное меню</h3>
						<ul class="list">
						<?php 
							if ($_SESSION['user']) {
    							echo "Вы вошли как <b>".$_SESSION['user']['login']."</b>"  ;
							}
						?>
							<li> 
								<form action="/search_result.php" method="post">
									<input required type="text" placeholder="поиск по названию" name="search" value="">
									<input type="submit" name="" value="Поиск" class="">
								</form>
							</li>
							<li class="first "><a href="/main.php">Галерея</a></li>
							<?php 
							if ($_SESSION['user']) { 
								echo '<li><a href="/services.php">Добавить монету</a></li>';
							}
							?>
							<li><span id="toggleLink" href="" onclick="viewdiv('mydiv');">Расширенный поиск</span>
									<div id="mydiv" style="display:none;">
										<form action="/search_result_all.php" method="post">
											<p class="toggleLink">Название</p>
											<input type="text" placeholder="" name="search_name" value="">
											
											<p class="toggleLink">Центр чеканки</p>
											<input type="text" placeholder="" name="search_mint_center" value="">

											<p class="toggleLink">Период чеканки</p>
											<input type="text" placeholder="" name="search_mint_year" value="">

											<p class="toggleLink">Материал</p>
											<input type="text" placeholder="" name="search_material" value="">

											<p class="toggleLink">Номинал</p>
											<input type="text" placeholder="" name="search_denomination" value="">

											<p class="toggleLink">Вес</p>
											<input type="text" placeholder="" name="search_weight" value="">
											<p class="toggleLink"></p>
											<input type="submit" name="" value="Поиск" class="">
										</form>
									</div>
							</li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">