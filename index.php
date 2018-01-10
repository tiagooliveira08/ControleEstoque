<?php 
  require_once 'app/auth.php';
	require_once 'layout/script.php';
  require_once 'app/models/connect.php';
  require_once 'app/models/produto.class.php';

	echo $head;
  
	echo $top;


	echo ' <div class="content-wrapper"> <div class="container-fluid">';

echo ' <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          Indicadores
        </li>
        <li class="breadcrumb-item active">Painel de Controle</li>
      </ol>
     
      
 <!-- Icon Cards-->
      
       
      </div>';$produtos->registro();


    echo "</div></div>";



      echo $footer;
      echo $js;
?>