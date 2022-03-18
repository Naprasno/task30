<?php
function main_result(){
	require_once 'config/connect.php';
	$sql = mysqli_query($connect, "SELECT * FROM `Coins`  order by id desc");
	$row = mysqli_fetch_all($sql);
	return $row ;
};



function main_search_result($search){
	require_once 'config/connect.php';
	$sql = mysqli_query($connect, "SELECT * FROM `Coins` where name like '%$search%' order by id desc");
	$row = mysqli_fetch_all($sql);
	return $row ;
};



function main_search_result_all($search_all){
	require_once 'config/connect.php';
	/*var_dump("SELECT * FROM `Coins` where (name like '%{$search_all['name']}%' and '%{$search_all['name']}%' != '^' or '%{$search_all['name']}%' = '^') 
	and (mint_center like '%{$search_all['mint_center']}%' and '%{$search_all['mint_center']}%' != '^' or '%{$search_all['mint_center']}%' = '^') order by id desc");*/

	/*штобл?! галочка ^_^  */ 
	$sql = mysqli_query($connect, 
	"SELECT * FROM `Coins` where (name like '%{$search_all['name']}%' and '{$search_all['name']}' != '^' or '{$search_all['name']}' = '^') 
	and (mint_center like '%{$search_all['mint_center']}%' and '{$search_all['mint_center']}' != '^' or '{$search_all['mint_center']}' = '^') 
	and (mint_year like '%{$search_all['mint_year']}%' and '{$search_all['mint_year']}' != '^' or '{$search_all['mint_year']}' = '^') 
	and (material like '%{$search_all['material']}%' and '{$search_all['material']}' != '^' or '{$search_all['material']}' = '^') 
	and (denomination like '%{$search_all['denomination']}%' and '{$search_all['denomination']}' != '^' or '{$search_all['denomination']}' = '^') 
	and (weight like '%{$search_all['weight']}%' and '{$search_all['weight']}' != '^' or '{$search_all['weight']}' = '^') 
		order by id desc");

	$row = mysqli_fetch_all($sql);
	return $row ;
}