
<?php

require_once '../auth.php';
require_once '../Models/itens.class.php';

function remover_caracter($string) {
     return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/ /"),explode(" ","a A e E i I o O u U n N _"),$string);
     	

   
}




if($_GET['funcao'] == "gravar" && is_file($_FILES['arquivo']['tmp_name'])){
	$foto = $_FILES['arquivo']['name'];

	$semacentuacao = remover_caracter($foto);
	$namefinal = strtolower($semacentuacao);
	


	$tipos = array('image/jpeg','image/png','image/gif','image/pjpeg');
	$arqType = $_FILES['arquivo']['type'];
	if(array_search($arqType, $tipos) === false){
		echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../adicionar.php'><script type=\"text/javascript\">
      alert(\"Tipo de imagem invalida\");
    </script> ";

	}else{
			if(file_exists("../../img/$namefinal")){
				$a = 1;
					while(file_exists("../../img/[$a]$namefinal")){
						$a++;

					}
				$namefinal = "[".$a."]".$namefinal;



			}	

			if(!move_uploaded_file($_FILES['arquivo']['tmp_name'], "../../img/".$namefinal)){
				echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../adicionar.php'><script type=\"text/javascript\">
      alert(\"Erro no upload\");
    </script> ";


			}

																	if(isset($_POST['upload']) == 'Cadastrar'){
															$NomedoProd = $_POST['NomeProd'];
															$QuantItens = $_POST['QuantItens'];
															$ValCompItens = $_POST['ValCompItens'];
															$ValVendItens = $_POST['ValVendItens'];
															$DataCompraItens = $_POST['DataCompraItens'];
															
															$date = str_replace('/', '-', $_POST['DataCompraItens']);
															$date = date('Y-m-d', strtotime($date));

															$valorcompra1 = str_replace('R$','',$ValCompItens);
															$valorfinalcompra = str_replace(',','.',str_replace('.','',$valorcompra1)); 
															

															$valorvenda1 =  str_replace('R$','', $ValVendItens);
															$valorfinalvenda = str_replace(',','.',str_replace('.','',$valorvenda1));
																
															

															
															$itens->InsertItens(0,$NomedoProd,$namefinal,$QuantItens, $valorfinalcompra, $valorfinalvenda, $date);
															}
															
	}








}