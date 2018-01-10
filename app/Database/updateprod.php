<?php
require_once '../auth.php';
require_once '../Models/itens.class.php';

if(isset($_POST['upload']) == 'Alterar'){
	$iditem = $_POST['idprod'];
	$nomeprod = $_POST['produtonome'];
	$quantidade = $_POST['produtoquantidade'];
	$valorvenda = $_POST['produtovalorvenda'];
	$valorcompra = $_POST['produtovalorcompra'];

	$valorprodvendido = str_replace('R$','',$valorvenda);
	$valorfinalprovendido = str_replace(',','.',str_replace('.','',$valorprodvendido));

	$valorprodcomprado = str_replace('R$','',$valorcompra);
	$valorfinalprocomprado = str_replace(',','.',str_replace('.','',$valorprodcomprado));
		$datatual = date('Y-m-d');
		
	$itens->updateItens($iditem,$nomeprod,$quantidade,$valorfinalprovendido,$valorfinalprocomprado);


}else{echo 'erro contante o administrador do site';}

?>