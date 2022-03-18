<?php
    // если была произведена отправка формы
    if(isset($_FILES['file'])) {
		// проверяем, можно ли загружать изображение
		$check = can_upload($_FILES['file']);
	  
		if($check === true){
		  // загружаем изображение на сервер
		  make_upload($_FILES['file']);
		  echo "<strong>Файл успешно загружен!</strong>";
		}
		else{
		  // выводим сообщение об ошибке
		  echo "<strong>$check</strong>";  
		}
		
	  }

  function can_upload($file){
	// если имя пустое, значит файл не выбран
    if($file['name'] == '')
		return 'Вы не выбрали файл.';
	
	/* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
	if($file['size'] == 0)
		return 'Файл слишком большой.';
	
	// разбиваем имя файла по точке и получаем массив
	$getMime = explode('.', $file['name']);
	// нас интересует последний элемент массива - расширение
	$mime = strtolower(end($getMime));
	// объявим массив допустимых расширений
	$types = array('jpg', 'png', 'gif', 'bmp', 'jpeg', '');
	
	// если расширение не входит в список допустимых - return
	if(!in_array($mime, $types))
		return 'Недопустимый тип файла.';
	
	return true;
  }

  function make_upload($file){	
	/*сюда из формы будем получать всю туфту */
	//var_dump($file);
	$name = $_POST['name'];
	$mint_center = $_POST['mint_center']; 
	$mint_year = $_POST['mint_year'];
	$material = $_POST['material'];
	$denomination = $_POST['denomination'];
	$weight = $_POST['weight'];
	$description = $_POST['description'];
/**/ 
	$result = date("YmdHis"); 
    require_once 'config/connect.php';

if($file['name'] == ''){
	$fname = 'empty';
    mysqli_query($connect,"INSERT INTO `coins` (`img_num`, `img_type`, `name`, `mint_center`,`mint_year`, `material`, `denomination`, `weight`, `description`) VALUES ( 'empty', 'png', '$name', '$mint_center', '$mint_year', '$material', '$denomination', '$weight', '$description'    )");
}
else {
	$fname = $file['name'];
	$getMime = explode('.', $file['name']);
    $fname = $result .'.'. $mime = strtolower(end($getMime));
    mysqli_query($connect,"INSERT INTO `coins` (`img_num`, `img_type`, `name`, `mint_center`,`mint_year`, `material`, `denomination`, `weight`, `description`) VALUES ( '$result', '$mime', '$name', '$mint_center', '$mint_year', '$material', '$denomination', '$weight', '$description'    )");
	copy($file['tmp_name'], 'images/coins/' . $fname);
}
	echo "$fname";
	//echo "$result";
	header('Location: /main.php');
  }  



