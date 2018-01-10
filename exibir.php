

<?php
require_once  'layout/script.php';
require_once 'App/Models/produto.class.php';
echo $head;

echo $top;




echo ' <div class="content-wrapper exibirbackground"> <div class="container-fluid">';

echo '
		
    <section class="content-header">
    
      <ol class="breadcrumb produtos3">
        <li class="nav-item pull-right  ">
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
    require 'layout/alert.php';

             
               $produtos->index();

              
        /*echo '</ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <a href="addprod.php" type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add Produto</a>
            </div>
          </div>
          */
	 


		   
echo '</div>';
echo '</section>';
      
       
	  

echo '</div>';

 echo "</div></div>";
echo $footer;
echo $js;

?>

