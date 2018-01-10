<?php
require_once '../auth.php';
require_once '../Models/itens.class.php';

date_default_timezone_set('America/Sao_Paulo');

																	if(isset($_POST['upload']) == 'Cadastrar'){
																		extract($_POST);
															$nomeprod =  $_POST['nomeprod'];
															
															$quantprod = $_POST['quantvenda'];
															$data = date('Y-m-d H:i:s');
															$formavenda = $_POST['forma'];
															$nomeclientevenda =$_POST['nomedocliente'];															
															
	                                							

															$valorprodvendido = str_replace('R$','',$ValorVendItens);
															$valorfinalprovendido = str_replace(',','.',str_replace('.','',$valorprodvendido));
															$idnum = substr($nomeprod,0,4);
															$id = preg_replace("/[^0-9]/", "", $idnum);
															

															

																
						
						
						$itens->Insertvenda($id,$quantprod,0,$nomeprod,$valorfinalprovendido,$quantprod, $data,$formavenda,$nomeclientevenda);
				}
													
?>