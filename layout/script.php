<?php 

require_once 'App/Models/itens.class.php';
 header ('Content-type: text/html; charset=ISO-8859-1');



$url = "http://localhost/control-estoque/";

$head = '<!DOCTYPE html>


 



<head>




     
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="WebSite controle de estoque" content="">
  <meta name="Tiago Alves de Oliveira" content="">
  <title>Painel Administrador - Controle de estoque</title>
  <!-- Bootstrap core CSS-->
  
  <link href="'.$url.'vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="'.$url.'vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="'.$url.'vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="'.$url.'css/sb-admin.css" rel="stylesheet">
  


  
  
</head>';




$top = '<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php"><span class="logocolor">Painel</span> Administrativo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item test" data-toggle="tooltip" data-placement="right" title="Menu">
          <a class="nav-link navthis">
            <i class="fa fa-list-ul" aria-hidden="true"></i>

            <span class="nav-link-text disabled menuzin navthis">Menu:</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Painel de controle">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Painel de Controle</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Clientes">
          <a class="nav-link nav-link-collapse collapsed"  href="#collapseComponents2" data-toggle="collapse"  data-parent="#exampleAccordion">
            <i class="fa fa-user-o" aria-hidden="true"></i>
            <span class="nav-link-text">Clientes</span>
           
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents2">
            <li>
              <a href="adicionarcliente.php">Adicionar</a>
            </li>
            <li>
              <a href="exibircliente.php">Exibir</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Fornecedores">
          <a class="nav-link" href="fornecedores.php">
           <i class="fa fa-truck" aria-hidden="true"></i>

            <span class="nav-link-text">Fornecedores</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gerenciar produtos">
          <a class="nav-link nav-link-collapse collapsed" href="#collapseComponents" data-toggle="collapse"  data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Gerenciar produtos </span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="adicionar.php">Adicionar</a>
            </li>
            <li>
              <a href="exibir.php">Exibir</a>
            </li>
          </ul>
        </li>
       <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Gerenciar pedidos">
          <a class="nav-link" href="fornecedores.php">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Gerenciar pedidos</span>
          </a>
          
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Vendas">
          <a class="nav-link" href="vendas.php">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Vendas</span>
          </a>
         
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Contato">
          <a class="nav-link" href="relatorios.php">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Relatórios</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alertas

              
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Novas notificações</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                
                  <i class="fa fa-long-arrow-up fa-fw"></i>Atualizações</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message big">Gerenciador de notificações</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">Ver todas as notificações</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Sair</a>
        </li>
      </ul>
    </div>
  </nav>';



$footer = ' <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Desenvolvivdo por Tiago Oliveira - 2017 </small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente Desconectar do usuário? :/</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Selecione "Sair" para desconectar do usuário.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary"  href="../views/destroy.php">Sair</a>
          </div>
        </div>
      </div>
    </div>';


$js = ' <!-- Bootstrap core JavaScript-->

    <script src="'.$url.'vendor/jquery/jquery.min.js"></script>
    <script src="'.$url.'vendor/popper/popper.min.js"></script>
    <script src="'.$url.'vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="'.$url.'js/jquery.maskMoney.js" type="text/javascript"></script>
     <script src="'.$url.'js/jquery.mask.js" type="text/javascript"></script>

    <script src="'.$url.'js/bootstrap-datepicker.min.js"></script>
     <script src="'.$url.'locales/bootstrap-datepicker.pt-BR.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="'.$url.'vendor/chart.js/Chart.min.js"></script>
    <script src="'.$url.'vendor/datatables/jquery.dataTables.js"></script>


    <script src="'.$url.'vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    
   


    <!-- Custom scripts for this page-->
    <link href="'.$url.'vendor/bootstrap/css/card.css" rel="stylesheet">
    
    <link href="'.$url.'css/bootstrap-datepicker.css" rel="stylesheet">

    <script src="'.$url.'js/sb-admin-datatables.min.js"></script>
    <script src="'.$url.'js/sb-admin-charts.min.js"></script>
 <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />

    <script type="text/javascript">
  $("#date1").datepicker({
    format: "dd/mm/yyyy",  language:"pt-BR",
});
</script>

<script>
  $(function() {
    $("#money1").maskMoney();



  })


  $(document).ready(function()
{
     $(".ValoresItens").maskMoney({
         prefix: "R$",
         decimal: ",",
         thousands: "."
     });
});



  






  
</script>

<script>

var SPMaskBehavior = function (val) {
  return val.replace(/\D/g, "").length === 11 ? "(00) 00000-0000" : "(00) 0000-00009";
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(SPMaskBehavior.apply({}, arguments), options);
    }
};


jQuery(document).ready(function(){
$(".telefone").mask(SPMaskBehavior, spOptions);
$(".cep").mask("00000-000");
});

$("#myModal").on("shown.bs.modal", function () {
  $("#myInput").focus()
});


$("#exampleModal").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data("whatever") // Extract info from data-* attributes
  var recipientid = button.data("whateverid")
  var recipientvalorvenda = button.data("whatevervalor")
  var recipientvalorcompra = button.data("whatevervalorcompra")
  var recipientimagem = button.data("whateverimagem")

  var modal = $(this)
  modal.find(".modal-title").text("Detalhes do Produto: "  + recipient)
  modal.find("#recipient-name").val(recipient)
  modal.find("#iditem").val(recipientid)
  modal.find("#quantprod").val("0")
  modal.find("#valorprod").val(recipientvalorvenda)
  modal.find("#valcompraitem").val(recipientvalorcompra)
  modal.find("#imagemalterar").attr("src","../img/"+recipientimagem)
  
})

$("#delproduto").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data("whatever")
  var recipientiddel = button.data("whateverid")
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modals content. Well use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find(".modal-title").text("Deseja realmente desativar o produto: "  + recipient)
  modal.find(".modal-body input").val(recipient)
 modal.find("#idproddel").val(recipientiddel)
})


$(document).ready(function(){
	$("#produtosel").change(function(){
			var produto_id = $(this).val();
			
			$.ajax({
				url:"layout/attlist.php",
				method:"POST",
				data:{prodid:produto_id},
				dataType:"text",
				success:function(data){
					$(".dinheiro").html(data);
					$(".dinheiro").val(data);
				}
			});
	});
});






</script>


<script language="javascript" type="text/javascript>
function validar(){
	alert("esta");
}
</<script>



    ';
    
?>