<?php

/*
 Class produtos
*/

 require_once 'connect.php';



  class Produtos extends Connect
 {

    public function badge(){


       $this->query = "SELECT * FROM `produto` order by iditens asc" ;
    $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

    
        $conta = 0;
        while ($row = mysqli_fetch_array($this->result)) {

          $conta++;
        }
      echo'<span class="badge badge-primary">'.$conta.'</span>';
    }


  public function registro(){
    $this->query = "SELECT * FROM `produto` order by iditens asc" ;
    $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

      $this->query = "SELECT * FROM `cliente` order by idcliente asc" ;
    $this->result2 = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

     $this->query3 = "SELECT sum(valorprodvenda*quantprodvenda) FROM vendas";
    $this->result3 = mysqli_query($this->SQL, $this->query3) or die ( mysqli_error($this->SQL));
       while ($row = mysqli_fetch_array($this->result3)) {

         $soma =  $row['sum(valorprodvenda*quantprodvenda)'];
         
        }




        $contaproduto = 0;
        $contacliente = 0;
        $vendasfinal = number_format($soma,2,",",".");
        while ($row = mysqli_fetch_array($this->result)) {

          $contaproduto++;
        }
        while ($row2 = mysqli_fetch_array($this->result2)) {

          $contacliente++;
        }
        echo '<div class="container"><div class="row">
        <div class="col-xl-4 col-sm-6 mb-4">
          <div class="card text-white bg-secondary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-user-o" aria-hidden="true"></i>
              </div><h4>'.$contacliente.'</h4><br>
              <div class="mr-5">Total de Clientes</div><br>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="exibircliente.php">
              <span class="float-left">Pesquisar Clientes</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-4">
          <div class="card text-white bg-info o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
               <i class="fa fa-heart" aria-hidden="true"></i>

                
              </div><h4>'.$contaproduto.'</h4><br>
              <div class="mr-5">Total de Produtos</div><br>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="exibir.php">
              <span class="float-left">Pesquisar Produtos</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-4">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-money" aria-hidden="true"></i>

              </div><h4>R$ '.$vendasfinal.'</h4><br><br>
              <div class="mr-5">Total de Vendas (Mensal)</div><br>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="relatorios.php">
              <span class="float-left">Pesquisar Vendas</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div></div>';

    }
   

  


 	
 	public function index()
 	{
              


    

 		$this->query = "SELECT * FROM `produto` order by iditens asc" ;
 		$this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

 		if($this->result){
     
 		 echo'<div class="row">';
 			while ($row = mysqli_fetch_array($this->result)) {

     
        $valorvenda =  $row['ValVendItens'];
        $valorfinalvenda = number_format($valorvenda,2,",",".");
         $valorcompra =  $row['ValCompItens'];
        $valorfinalcompra = number_format($valorcompra,2,",",".");
        $Decodenomeproduto = $row['NomeProduto'];
       

               				echo '
                      <div class="card-block  col-md-4 p-3">
                        <div class="card ">
                              <img class="card-img-top img-fluid" src="../img/'.$row['imagem'].'"  alt="Card image cap">
                            <div class="card-body ">
                                 
                                 <!-- todo text -->
                    <small class="text-muted fonte-numero">'.$row['iditens'].':</small> <h4 class="fonte-externa titulo">'.$Decodenomeproduto.'<br></h4>
                                <span class="quant">Quantidade: ' .$row['Quantitens'].'</span>
                            </div>
                              
                                <div class="card-body ">
                                  <button class="btn btn-primary btn-card" data-toggle="modal" data-target="#exampleModal" data-whateverimagem="'.$row['imagem'].'" data-whatever="'.$row['NomeProduto'].'"data-whateverquantidade="'.$row['Quantitens'].'" data-whateverid="'.$row['iditens'].'" data-whatevervalor="R$'.$valorfinalvenda.'"data-whatevervalorcompra="R$'.$valorfinalcompra.'"><i class="fa fa-search-plus" aria-hidden="true"></i></button>

                                  <button class="btn btn-danger btn-card2" class="btn btn-primary" data-toggle="modal" data-target="#delproduto" data-whatever="'.$row['NomeProduto'].'" data-whateverid="'.$row['iditens'].'"><i class="fa fa-window-close" aria-hidden="true"></i>
                                  </button>

                                  <div class="alert alert-success">R$ '.$valorfinalvenda.'</div>
                                </div> 
                        </div>

                        



                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"></h5>
                          <button type="button" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="App/Database/updateprod.php" method="POST">    <div class="form-group">

                                        <img class="card-img-top img-fluid" id="imagemalterar" alt="Card image cap"><br>
                                          
                                        </div>
                                        <input type="hidden" name="idprod" id="iditem">
                                  <div class="form-group">
                                        <label for="recipient-name" class="form-control-label">Nome do Produto:</label>
                                        <input type="text" class="form-control" id="recipient-name" name="produtonome">
                                  </div>
                                        <div class="form-group">
                                         <label for="message-text" class="form-control-label">Adicionar Quantidade:</label>
                                            <input type="number" min="0" max="100" step="1"  class="form-control hidden" name="produtoquantidade"id="quantprod"></textarea>
                                        </div>
                            <div class="form-group">
                              <label for="message-text" class="form-control-label">Valor Venda:</label>
                               <input type="text"  name ="produtovalorvenda" id="valorprod" class="form-control ValoresItens" placeholder="Valor" required>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="form-control-label">Valor Compra:</label>
                               <input type="text"  name ="produtovalorcompra" id="valcompraitem" class="form-control ValoresItens" placeholder="Valor" required>
                            </div>

                       

                              <button type="submit" name="upload" class="btn btn-danger">Alterar</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          </form>
                        </div>
                        <div class="modal-footer">
                      
                          
                        </div>
                      </div>
                    </div>
                  </div>



                  <div class="modal fade" id="delproduto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form action="App/Database/delitem.php" method="POST">
        <input type="hidden" id="idproddel"  name="idproduto">    
           <button type="submit" name="btndelete" class="btn btn-danger">Deletar</button>
            <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
        </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>

          
 </div>





                              
                              


  

                            
                          
                  ';
                  
                 				
 			}
      
      echo'</div>';

 			 
 		}





 	}

  public function listProdutos($value = NULL){
    $this->query("SET NAMES 'utf8'");
         header('Content-Type: text/html; charset=utf-8');
        $this->query('SET character_set_connection=utf8');
        $this->query('SET character_set_client=utf8');
        $this->query('SET character_set_results=utf8');

    $this->query = "SELECT *FROM `produto`";
    $this->result = mysqli_query($this->SQL, $this->query) or die ( mysqli_error($this->SQL));

    if($this->result){
    
      while ($row = mysqli_fetch_array($this->result)) {
        if($value == $row['CodRefProduto']){ 
          $selected = "selected";
        }else{
          $selected = "";
        }
        echo '<option value="'.$row['CodRefProduto'].'" '.$selected.' >'.$row['NomeProduto'].'</option>';
      }

  }
 }  

 	public function InsertProd($nomeProduto, $idUsuario){

 		$this->query = "INSERT INTO `produto`(`CodRefProduto`, `NomeProduto`, `Usuario_idUser`) VALUES (NULL,'$nomeProduto','$idUsuario')";
 		if($this->result = mysqli_query($this->SQL, $this->query) or die(mysqli_error($this->SQL))){

 			header('Location: ../../views/prod/index.php?alert=1');
 		}else{
 			header('Location: ../../views/prod/index.php?alert=0');
 		}


 	}
 }

 $produtos = new Produtos;
?>

