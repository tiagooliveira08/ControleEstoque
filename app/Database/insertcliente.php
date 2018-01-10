<?php
require_once '../auth.php';
require_once '../Models/itens.class.php';


																	if(isset($_POST['upload']) == 'Cadastrar'){
															$NomedoClient =  $_POST['nomeCli'];
															$Endereco =  $_POST['EnderecodoCliente'];
															$TelefodoClient = $_POST['telefoneCli'];
															
															$CepClient = $_POST['cepCli'];
															
															
                                 $enderecoformatado = str_replace("'", '/',$Endereco);
									
															

															
					$itens->InsertCliente(0,$NomedoClient,$TelefodoClient,$enderecoformatado, $CepClient);
				}
													
?>