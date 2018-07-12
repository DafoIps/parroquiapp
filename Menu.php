<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/EstiloMenu.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
  </head>
        <?php include("sesion.php"); ?>
    <div id='cssmenu'>
    <ul>
       <li><a href='Inicio.php'><span>Inicio</span></a></li>
       <li class='active has-sub'><a href='#'><span>Personas</span></a>
         <ul>
            <li><a href='VerificarInsertarPersona.php'><span>Registrar</span></a></li>
            <li class='last'><a href='ListadePersonas.php'><span>Lista</span></a></li>
            <li class='last'><a href='BuscarPersona.php'><span>Buscar</span></a></li>
         </ul>
       </li>
       <li class='active has-sub'><a href='#'><span>Bautismos</span></a>
          <ul>
             <li class='has-sub'><a href='#'><span>Boletas</span></a>
                <ul>
                   <li><a href='VerificarInsertarBoleta.php'><span>Registrar</span></a></li>
                   <li class='last'><a href='ListadeBoletas.php'><span>Editar</span></a></li>
                   <li class='last'><a href='BuscarBoleta.php'><span>Buscar</span></a></li>
                </ul>
             </li>
             <li class='has-sub'><a href='#'><span>Bautismos</span></a>
                <ul>
                   <li><a href='RegistrarBautismo.php'><span>Registrar</span></a></li>
                   <li class='last'><a href='ListadeBautismos.php'><span>Lista</span></a></li>
                   <li class='last'><a href='BuscarBautismo.php'><span>Buscar</span></a></li>
                </ul>
             </li>
          </ul>
       </li>
       <li class='has-sub'><a href='#'><span>Estipendios</span></a>
          <ul>
             <li><a href='EstipendioBautismos.php'><span>Bautismos</span></a></li>
             <li class='last'><a href='#'><span>x</span></a></li>
             <li class='last'><a href='#'><span>x</span></a></li>
          </ul>
       </li>

       <li class='last'><a href='salir.php'><span>Salir</span></a></li>
    </ul>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/efectos.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
