<?php

require_once '../auth.php';
require_once '../Models/itens.class.php';

	if(isset($_POST['btndelete']) == "Deletar"){
		$idproduto = $_POST['idproduto'];
		$itens->deletarproduto($idproduto);
	}


?>