<?php
require_once  'layout/script.php';
require_once 'App/Models/itens.class.php';
echo $head;
echo $top;

echo ' <div class="content-wrapper"> <div class="container-fluid">';

echo '
		
    <section class="content-header">
    
      <ol class="breadcrumb produtos3">
                <li class="nav-item pull-right	">
          <form class="form-inline">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Buscar">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="active"> </li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    ';
    $itens->relatoriovendas();


echo '</div>';
echo '</section>';
      
       
	  echo'';

echo '</div>';

 echo "</div></div>";
echo $footer;
echo $js;

?>