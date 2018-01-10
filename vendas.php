<?php


require_once  'layout/script.php';
require_once 'App/Models/itens.class.php';
header ('Content-type: text/html; charset=ISO-8859-1');
echo $head;
echo $top;

echo ' <div class="content-wrapper"> <div class="container-fluid">';
	
echo '<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 text>
        Vender <small>Produtos</small>
      </h1>
      <ol class="breadcrumb">
        
        <li class="active">Vendas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content test1">
      <!-- Small boxes (Stat box) -->
      ';

echo ' 
      
        
        
         
          
            <div class="box-header with-border">
             
            </div>
            
           
            <form role="form" action="App/Database/insertvenda.php" enctype="multipart/form-data" method="POST">

							 
				<div class="row">			  

							             
              <div class="col-md-6 mb-3">
              
      <label for="validationDefault01">Nome do Produto</label>
      <select class="form-control" name="nomeprod" id="produtosel">
            
            
            ';
      
      $itens->listvendas();
      echo'</select>
    </div>
    <div class="col-md-3 mb-3">
      <label for="Valor de Venda">Valor Recomendado</label>
      <div class="input-group ">
      <div class="input-group-addon ">$</div>

      <input type="text"  id="valorrecomendado" name="ValorVendItens" class="form-control dinheiro ValoresItens"  placeholder="Venda"  required>
      <div class="invalid-feedback">
      </DIV>

        
      </div>
    </div>
    
	


   
  </div>
<div class="row">


   
    <div class="col-md-3 mb-3">
      <label for="validationDefault02">Quantidade da venda</label>
      <input type="number" value="1" min="1" max="100" step="1" name ="quantvenda" class="form-control" id="validationDefault02" placeholder="Quantidade" required>
    </div>

	<div class="col-md-3 mb-3">
		<label for="tipodevenda">Forma de pagamento</label>
		<select class="form-control" name="forma" id="tipodevenda">
		<option value="vista">À Vista</option>
		<option value="cartao">Cartão</option>
		</select>
</div>

<div class="col-md-6 mb-3">
		<label for="nomedocliente">Nome do Cliente</label>
		<select class="form-control" name="nomedocliente">
		';
		$itens->listnome();

		echo'</select>
	</div>
  </div>

  
  <div class="row">
	 <div class="col-md-12 mb-3">
	 	


	 </div>
  </div>
  	<div class="box-footer">
                <button type="submit" onclick="return validar()" name="upload" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Cancelar</a>
              </div>

             

              
            </form>
          </div>
          <!-- /.box -->
          </div>
          </div>

          
</div>';

echo '</div>';
echo '</div>';
echo '</section>';
echo '</div>';


 echo "</div></div>";
echo $footer;
echo $js;

?>