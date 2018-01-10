<?php

/*
 Class produtos
*/

 require_once 'connect.php';

  class Itens extends Connect
 {
 	
 	public function index()
 	{
 		$this->query = "SELECT *FROM `produto`";
 		$this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

 		if($this->result){
 		
 			while ($row = mysqli_fetch_array($this->result)) {
 				echo '<li>
                  <!-- drag handle -->
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                  <span class="text">
                  <!-- checkbox -->
                  <form class="badge" name="ativ'.$row['idItens'].'" action="action.php" method="post">
                  <input type="hidden" name="id" id="id" value="'.$row['idItens'].'">
                  <input type="hidden" name="status" id="status" value="'.$row['Ativo'].'">
                  <input type="checkbox" id="status" name="status" ';
                   if($row['Ativo'] == 1){ echo 'checked'; } 
                  echo ' value="'.$row['Ativo'].'" onclick="this.form.submit();"></form>
                  <!-- todo text -->
                  <span class="badge left">'.$row['idItens'].'</span> '.$row['QuantItens'].'
                   - '.$row['QuantItensVend'].'
                  - '.$row['ValCompItens'].'
                  - '.$row['ValVendItens'].'
                  - '.$row['DataCompraItens'].'
                  - '.$row['DataVenci_Itens'].'
                  - '.$row['Ativo'].'
                  - '.$row['Produto_CodRefProduto'].'
                  - '.$row['Fabricante_idFabricante'].'
                  - '.$row['Usuario_idUser'].'</span>

                  <!-- Emphasis label -->
                  
                  <!-- General tools such as edit or delete-->
                  <div class="tools right">
                    
                    <form class="right" name="editItens'.$row['idItens'].'" action="editItens.php" method="post">
                      <input type="hidden" name="idItens" id="idItens" value="'.$row['idItens'].'">
                      <a href="#" type="button" onclick="this.form.submit();"><i class="fa fa-edit"></i></a></form>
                    <form class="right" name="delItens'.$row['idItens'].'" action="delItens.php" method="post">
                    <input type="hidden" name="idItens" id="idItens" value="'.$row['idItens'].'">
                     <a href="#" type="button" onclick="this.form.submit();"><i class="fa fa-trash-o"></i></a></form>
                  </div>
                </li>';
                 				
 			}
 			
 		}

 	}






 	public function InsertItens($idItens,$NomeProduto,$imagem, $QuantItens, $ValCompItens, $ValVendItens, $DataCompraItens){
    $msg = false;
 		$this->query = "INSERT INTO `produto`(`iditens`,`NomeProduto`,`imagem`,`QuantItens`,`ValCompItens`, `ValVendItens`, `DataCompraItens`) 
                                         VALUES (NULL, '$NomeProduto','$imagem','$QuantItens','$ValCompItens', '$ValVendItens', '$DataCompraItens')";
 		if($this->result = mysqli_query($this->SQL, $this->query) or die(mysqli_error($this->SQL))){
   if(mysqli_affected_rows($this->SQL) != 0){
   echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../adicionar.php'><script type=\"text/javascript\">
      alert(\"Cadastrado com sucesso\");
    </script> ";

     
   }
   else{
     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../index.php'><script type=\"text/javascript\">
      alert(\"Erro no cadastro\");
    </script> ";
   }    
   
  

}
}

  public function InsertVenda($id,$quantidade,$idvenda,$nomevenda,$valorvenda, $quantidadevenda, $datavenda,$formavenda,$clientevenda){

         $this->query = "SELECT Quantitens FROM `produto` WHERE iditens = $id ";
   $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

   if($this->result){

    while ($row = mysqli_fetch_array($this->result)) {
     
       
     $verificacaoquantidade =   $row['Quantitens'];
    }


    if($verificacaoquantidade <=0  || $quantidade > $verificacaoquantidade){
     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../exibir.php'><script type=\"text/javascript\">
      alert(\"Quantidade de produto nao disponivel em estoque\");
    </script> ";
    }else{
                              $msg = false;
                     $this->query2 = "UPDATE  produto SET QuantItens = QuantItens-$quantidade WHERE idItens = $id ";

                                                   $msg = false;
                                  $this->query3 = "INSERT INTO `vendas`(`idvenda`,`nomeprovenda`,`valorprodvenda`,`quantprodvenda`,`dataprodvenda`,`formaprodvenda`,`nomeclientevenda`)VALUES (NULL,'$nomevenda','$valorvenda','$quantidadevenda','$datavenda','$formavenda','$clientevenda')";

                                  if($this->result3 = mysqli_query($this->SQL, $this->query3) or die(mysqli_error($this->SQL))){
                                 if(mysqli_affected_rows($this->SQL) != 0){

                                    echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../adicionar.php'><script type=\"text/javascript\">
                                    alert(\"Vendido com sucesso\");
                                  </script> ";
                                   
                                 } else{
                                   echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../index.php'><script type=\"text/javascript\">
                                    alert(\"Erro no cadastro\");
                                  </script> ";
                                 }    
                                 
                                

}

                      
                      if($this->result2 = mysqli_query($this->SQL, $this->query2) or die(mysqli_error($this->SQL))){
                     if(mysqli_affected_rows($this->SQL) != 0){
                    
                       
                     } else{
                       echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../index.php'><script type=\"text/javascript\">
                        alert(\"Erro no cadastro\");
                      </script> ";
                     }    
                     
                    

                  }

    }

  }






    
}

public function sellprod($id,$quantidade){

 



}


  public function InsertCliente($idClientes,$nomeclientes,$telefonecliente, $enderecocliente, $cepcliente){
    $msg = false;
    $this->query = "INSERT INTO `cliente`(`idCliente`,`nomeCliente`,`telefoneCliente`,`enderecoCliente`,`cepCliente`) 
                                         VALUES (NULL, '$nomeclientes','$telefonecliente','$enderecocliente','$cepcliente')";
    if($this->result = mysqli_query($this->SQL, $this->query) or die(mysqli_error($this->SQL))){
   if(mysqli_affected_rows($this->SQL) != 0){
   echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../adicionarcliente.php'><script type=\"text/javascript\">
      alert(\"Cliente cadastrado com sucesso\");
    </script> ";

     
   } else{
     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../index.php'><script type=\"text/javascript\">
      alert(\"Erro no cadastro\");
    </script> ";
   }    
   
  

}
}


  public function listvendas(){

   $this->query = "SELECT *FROM `produto` order by iditens asc ";
   $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));
      
   if($this->result){
 echo'<option value="0">Selecionar produto</option>';
    while ($row = mysqli_fetch_array($this->result)) {
     
       
      echo '<option value="'.$row['iditens'].' - '.$row['NomeProduto'].'">'.$row['iditens'].' - '.$row['NomeProduto'].'</option>';
    }

  }
  }

  public function listnome(){

   $this->query = "SELECT *FROM `cliente` order by nomeCliente asc ";
   $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

   if($this->result){

    while ($row = mysqli_fetch_array($this->result)) {
     
       
      echo '<option>'.$row['nomeCliente'].'</option>';
    }

  }
  }






  
 







  public function editItens($value)
  {
    $this->query = "SELECT *FROM `produto` WHERE `idItens` = '$value'";
    $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

    if($row = mysqli_fetch_array($this->result)){

        $idItens = $row['idItens'];
        $QuantItens = $row['QuantItens'];
        $ValCompItens = $row['ValCompItens'];
        $ValVendItens = $row['ValVendItens'];
        $DataCompraItens= $row['DataCompraItens'];
        $DataVenci_Itens = $row['DataVenci_Itens'];
        $Produto_CodRefProduto = $row['Produto_CodRefProduto'];
        $Fabricante_idFabricante = $row['Fabricante_idFabricante'];
        
       return $resp = array('Itens' => ['idItens' => $idItens,
                      'QuantItens'   => $QuantItens,
                      'ValCompItens' => $ValCompItens,
                      'ValVendItens' => $ValVendItens,
                      'DataCompraItens' => $DataCompraItens,
                      'DataVenci_Itens' => $DataVenci_Itens,
                      'CodRefProduto' => $Produto_CodRefProduto,
                      'idFabricante' => $Fabricante_idFabricante ] , );  
     }
    
  }

  public function updateItens($iditem, $nomeitem, $quantitens, $ValVendItens, $valcompraitens)
  {
    $this->query = "UPDATE produto SET NomeProduto ='$nomeitem', Quantitens = '$quantitens' + Quantitens, ValVendItens ='$ValVendItens', ValCompItens ='$valcompraitens' WHERE iditens='$iditem' ";

    if($this->result = mysqli_query($this->SQL, $this->query) or die(mysqli_error($this->SQL))){

     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../exibir.php'><script type=\"text/javascript\">
      alert(\"Produto alterado com sucesso!!\");
    </script> ";
    }else{
     echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../adicionarcliente.php'><script type=\"text/javascript\">
      alert(\"Error ao alterar produto, procure o administrador do site\");
    </script> ";
    }

  }

  public function deletarproduto($idproduto){
    $this->query = "DELETE FROM produto WHERE iditens = '$idproduto'";

    if($this->result = mysqli_query($this->SQL, $this->query) or die(mysqli_error($this->SQL))){

      echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../exibir.php'><script type=\"text/javascript\">
      alert(\"Deletado com sucesso!!\");
    </script> ";
    }else{
      echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=../../exibir.php'><script type=\"text/javascript\">
      alert(\"Error ao deletar!!\");
    </script> ";
    }
  }
  

  public function QuantItensVend($value, $idItens)
  { 
    $this->query = "UPDATE `itens` SET `QuantItensVend` = '$value' WHERE `idItens`= '$idItens'";
    
    if($this->result = mysqli_query($this->SQL, $this->query) or die(mysqli_error($this->SQL))){

      header('Location: ../../views/itens/index.php?alert=1');
    }else{
      header('Location: ../../views/itens/index.php?alert=0');
    }
  }

  public function relatoriovendas(){
    
              


    

    $this->query = "SELECT * FROM `vendas` order by dataprodvenda DESC" ;
    $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));



    if($this->result){

     echo'
     <table class="table table-hover table-striped">
      <thead class="thead-inverse">
        <tr>

          <th>Data - Hora</th>
          <th>Nome Produto</th>
          <th>Quantidade</th>
          <th>Forma</th>
            <th>Data - Hora</th>
          <th>Nome do Cliente</th>
        </tr>
      </thead><tbody>';

    
        
      while ($row = mysqli_fetch_array($this->result)) {
  $valorvenda =  $row['valorprodvenda'];
        $valorfinalvenda = number_format($valorvenda,2,",",".");
     
      echo '
      
    <tr>
  
      <td>'.$row["dataprodvenda"].'</td>
      <td>'.$row["nomeprovenda"].'</td>
      <td>'.$row["quantprodvenda"].'</td>
      <td>'.$row["formaprodvenda"].'</td>
      <td>R$'.$valorfinalvenda.'</td>
      <td>'.$row["nomeclientevenda"].'</td>
    </tr>

  </tbody>
';
                  
                        
      }
     echo' </table></div>';
      
      echo'</div>';

       
    }





  }

  




  




  public function cliente()
  {
              


    

    $this->query = "SELECT * FROM `cliente` order by idCliente asc" ;
    $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

    if($this->result){

     echo'
     <table class="table table-hover">
      <thead class="thead-inverse">
        <tr>
          <th>ID</th>
          <th>Nome do Cliente:</th>
          <th>Telefone do Cliente</th>
          <th>Endereco do Cliente</th>
          <th>CEP do Cliente</th>
        </tr>
      </thead><tbody>';
      while ($row = mysqli_fetch_array($this->result)) {

     
      echo '
      
    <tr>
      <th scope="row">'.$row["idCliente"].'</th>
      <td>'.$row["nomeCliente"].'</td>
      <td>'.$row["telefoneCliente"].'</td>
      <td>'.$row["enderecoCliente"].'</td>
      <td>'.$row["cepCliente"].'</td>
    </tr>

  </tbody>
';
                  
                        
      }
     echo' </table></div>';
      
      echo'</div>';

       
    }





  }



  



 }




 $itens = new Itens;