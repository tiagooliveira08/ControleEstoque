


<?php
require_once  'layout/script.php';
echo $head;
echo $top;


echo ' <div class="content-wrapper"> <div class="container-fluid">';
	
echo '<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 text>
        Adicionar <small>Produtos</small>
      </h1>
      <ol class="breadcrumb">
        
        <li class="active">Produtos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content test1">
      <!-- Small boxes (Stat box) -->
      ';

echo ' 
      
        
        
         
          
            <div class="box-header with-border">
             
            </div>
            
           
            <form role="form" action="App/Database/insertitens.php?funcao=gravar" enctype="multipart/form-data" method="POST">

							 
				<div class="row">			  
							             
              <div class="col-md-6 mb-3">
              
      <label for="validationDefault01">Nome do Produto</label>
      
      <input type="text" class="form-control" name="NomeProd" id="validationDefault01" placeholder="Nome" required>
    </div>
	


    <div class="col-md-6 mb-3">
      <label for="validationDefault02">Quantidade de Entrada</label>
      <input type="number" min="0" max="100" step="1" name ="QuantItens" class="form-control" id="validationDefault02" placeholder="Quantidade" required>
    </div>
  </div>

<div class="row">
    <div class="col-md-6 mb-3">
      <label for="Valor de Venda">Valor de Venda</label>
      <div class="input-group ">
      <div class="input-group-addon ">$</div>

      <input type="text"  name ="ValVendItens" class="form-control ValoresItens"  placeholder="Venda" required>
      <div class="invalid-feedback">
      </DIV>

        
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Valor de Compra</label>
      <input type="text"  name ="ValCompItens" class="form-control ValoresItens" placeholder="Compra" required>
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Data de entrada</label>
					      <div class="input-group date"  data-provide="datepicker"  id="date1" >
            
				    <input type="text" placeholder="data" class="form-control" name="DataCompraItens">
				    <div class="input-group-addon">
				        <i class="fa fa-calendar" aria-hidden="true"></i>

				    </div>
				</div>
    </div>



  </div>

  <input type="file" name="arquivo" class="arquivo" aid="arquivo"  required>
  <div class="row">
	 <div class="col-md-12 mb-3">
	 	


	 </div>
  </div>
  	<div class="box-footer">
                <button type="submit" name="upload" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
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


