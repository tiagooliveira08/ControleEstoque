<?php 

$connect = mysqli_connect("localhost","root","","controlestoque");

$iditem = $_POST["prodid"];
$sql = "SELECT ValVendItens FROM produto WHERE iditens = '$iditem' ";
$result = mysqli_query($connect,$sql);

if($iditem == 0){}else{
while ($row = mysqli_fetch_array($result)) {
	
	$output = $row["ValVendItens"];
	$escrever = 'value="'.$output.'"';
}
	$vendasfinal = number_format($output,2,",",".");
	echo 'R$'.$vendasfinal;
	

}


?>