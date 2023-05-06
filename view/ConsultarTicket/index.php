<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>

<!DOCTYPE html>
<html>

    <?php require_once("../MainHead/head.php"); ?>

    <title>JN</>::CONSULTAR TICKET</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/Header.php"); ?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php"); ?>


  <!--   Contenido -->
	<div class="page-content">
		<div class="container-fluid">
      <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Consultar Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Consultar Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

      <div class="box-typical box-typical-padding">
      <table id="ticket_data" class="table table-bordered table-striped table-vcenter js-dataTable-full">
          <thead>
            <tr>
              <th styler="width: 10%;">Nro. Ticket</th>
              <th style="width: 15%;">Categoria</th>
              <th classe="d-none d-sm-table-cell" style="width: 25%;">Titulo</th>
              <th classe="text-center" styler="width: 15%;"></th>
            </tr>
          </thead>
          <tbody>

          </tbody>
      </table>      
       </div>

		</div><!--.container-fluid-->
	</div><!--.page-content-->

    <?php require_once("../MainJs/js.php"); ?>
    <script type="text/javascript" src="consultarticket.js"></script>

</body>
</html>

<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>