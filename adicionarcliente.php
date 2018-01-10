


<?php
require_once  'layout/script.php';
echo $head;
echo $top;


echo ' <div class="content-wrapper"> <div class="container-fluid">';
	
echo '<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 text>
        Adicionar <small>Cliente</small>
      </h1>
      <ol class="breadcrumb">
        
        <li class="active">Cliente</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content test1">
      <!-- Small boxes (Stat box) -->
      ';

echo ' 
      
        
        
       
          
            <div class="box-header with-border">
             
            </div>
             
              
            
           
            <form role="form" action="App/Database/insertcliente.php?funcao=gravar" enctype="multipart/form-data" method="POST">

							 
				<div class="row">			  
							             
              <div class="col-md-6 mb-3">
              
      <label for="validationDefault01">Nome do Cliente</label>
      
      <input type="text" class="form-control" name="nomeCli" id="validationDefault01" placeholder="Nome" required>
    </div>
	


   
     <div class="col-md-6 mb-3">
     <label for="telefone">Telefone de Contato</label>
<input pattern="\([0-9]{2}\)[\s][0-9]{4,5}-[0-9]{4}" class="telefone form-control" id="telefone" name="telefoneCli" maxlength="15" placeholder="Fixo ou Celular com DDD" required> 
  </div>
  

 <div class="col-md-9 mb-3">
              
      <label for="nothing">Endereço</label>
      
      <input type="text" class="form-control" name="EnderecodoCliente" id="validationDefault01" placeholder="Rua..." required>
</div>
 <div class="col-md-3 mb-3">
              
      <label for="cep">CEP</label>
      
      <input type="text" class="form-control cep" name="cepCli" id="validationDefault01" placeholder="CEP" required>
</div>


        

    </div>
   <div class="box-footer">
                <button type="submit" name="upload" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
                <a class="btn btn-danger" href="index.php">Cancelar</a>
              </div>
    



  </div>




              
            </form>
            
                  
                    </div>
                    </div>
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


