<!DOCTYPE html>
 <?php include("sesion.php"); ?>
<html>
  <head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
<nav class="navbar navbar-inverse bg-inverse">
<a class="navbar-brand" href="#"> PARROQUIAPP </a>
</nav>  
<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="Inicio.php"><span class="glyphicon glyphicon-home">
                            </span> Inicio</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                            </span> Personas</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="VerificarInsertarPersona.php">Registrar</a> <span class="label label-success">Nuevo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="BuscarPersona.php">Consultar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="ListadePersonas.php">Lista</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-th">
                            </span> Boletas</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="VerificarInsertarBoleta.php">Registrar</a> <span class="label label-success">Nuevo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="ListadeBoletas.php">Editar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="BuscarBoleta.php">Buscar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-certificate">
                            </span> Bautismos</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="RegistrarBautismo.php">Registrar</a> <span class="label label-success">Nuevo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="BuscarBautismo.php">Consultar</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="ListadeBautismos.php">Lista</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-leaf">
                            </span> Estipendios</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="EstipendioBautismos.php">Bautismo</a> <span class="label label-success">Nuevo</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Menu 2</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Menu 3</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/efectos.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div class="navbar  navbar-inverse navbar-fixed-bottom"> 
     <div class="container">
       <div class="navbar-text pull=left">
	    <p> © Ip Experts Security 2018.</p>
	   </div>
	      
	 </div>
   </div>
</html>
