<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>WebAdmin | Usuarios</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="js/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">

    
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="js/select2/js/select2.js"></script>
    <script src="js/alertifyjs/alertify.js"></script>
    <script src="js/functions.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AppAdmin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Panel de Control</a></li>
            <li><a href="Menus.php">Menus</a></li>
            <li><a href="Slider.php">Sliders</a></li>
            <li class="active"><a href="Noticias.php">Noticias</a></li>
            <li><a href="Vinculos.php">Vinculos</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li style="position: absolute;margin-left: 73%;"><a href="plogin.php">Cerrar Sesion</a></li>
          </ul>
          
          
      
        </div><!--/.nav-collapse -->
        
      </div>
    </nav>

<header id="header">
 <div class="container">
   <div class="row">
     <div class="col-md-10">
       <h1><span class="glyphicon glyphicon-cog"></span> Panel de Control<small>Usuarios</small></h1>
     </div>
     <div class="col-md-2">
        <div class="dropdown crear">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Crear Contenido
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              
              <li><a type="button" data-toggle="modal" data-target="#modalNoticia"><img src="imagenes/add.png" style="width: 30px;"> Agregar Noticias</a></li>
   
            </ul>
      </div>

     </div>
   </div>
 </div> 
</header>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="active">Panel de Control / Usuarios</li>
    </ol>
  </div>
</section>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item active color-principal">
            <span class="glyphicon glyphicon-cog"></span> Panel de Control
          </a>
          <a href="paginas.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span> Menus <span class="badge">1</span></a>
          <a href="entradas.html" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span> <span class="badge">1</span> Sliders</a>
          <a href="entradas.html" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span> <span class="badge">1</span> Noticias</a>
          <a href="entradas.html" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span> <span class="badge">1</span> Vinculos</a>
          <a href="usuarios.html" class="list-group-item"><span class="glyphicon glyphicon-user"></span> <span class="badge">1</span> Usuarios</a>
        </div>
        <div class="well">
          <h4>Espacio en disco</h4>
          <div class="progress">
            <div class="barra-progreso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"> 2% 
            </div>
          </div>
          <h4>Ancho de Banda</h4>
          <div class="progress">
            <div class="barra-progreso" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"> 75% 
            </div>
          </div>
        </div>
      </div>

     <div class="col-md-9 text-center">

      <div class="panel panel-default">
          <div class="panel-heading">Ultimas Noticias</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Filtrar Usuarios">
              </div>
              </div>
              <br>
              
               <?php
                      include("contolador/conexion.php");
                      $solicitud="SELECT * FROM noticias";
                      $resultado=mysqli_query($conexion,$solicitud);
                      
              ?>
                      
                      <table class='table table-striped table-hover' id='noti'> 
                      <tr>
                      <th  style="text-align: center;">Nº</th> 
                      <th  style="text-align: center;">Imagen</th>
                      <th  style="text-align: center;">Descripcion</th>
                      <th style="text-align: center;">Operaciones</th>
                      <th></th>
                      </tr>
         

   

                  <?php    
                      while ($fila = mysqli_fetch_array($resultado)) {
                        $datos=$fila[0]."||".
                       // $fila[1]."||".
                        $fila[1]; 
                        ?>
                       <tr>
                        <td><?php echo $fila[0] ?></td>
                        <td ><img src="modelo/verNoticia.php?id=<?php echo $fila[0] ?>" width="100"></td>
                        <td ><?php echo $fila[1] ?></td>
                        <td class="col-md-4"><button class="btn btn-default" data-toggle="modal" data-target="#actualizarNoticia" onclick="llenarModal_Noticia('<?php echo $datos ?>')" >Editar</button>
                        <a class="btn btn-danger" onclick="preguntarSiNoN('<?php echo $fila[0] ?>')">Borrar </a> 
                        <?php
                            if ($fila[4]=='1') {
                              # code...
                            
                        ?>
                        <button class="btn btn-primary" id='<?php echo 'show'.$fila[0] ?>' onclick="mostrarBoton('<?php echo 'show'.$fila[0] ?>','<?php echo 'hide'.$fila[0] ?>','<?php echo $fila[0] ?>')">Ocultar </button> 
                        <button class="btn btn-primary" id='<?php echo 'hide'.$fila[0] ?>' onclick="mostrarBoton1('<?php echo 'show'.$fila[0] ?>','<?php echo 'hide'.$fila[0] ?>','<?php echo $fila[0] ?>')"  style="display: none;">Mostrar </button> 
                        <?php
                            }else{

                            ?>
                        <button class="btn btn-primary" id='<?php echo 'show'.$fila[0] ?>' onclick="mostrarBoton('<?php echo 'show'.$fila[0] ?>','<?php echo 'hide'.$fila[0] ?>','<?php echo $fila[0] ?>')" style="display: none;">Ocultar </button> 
                        <button class="btn btn-primary" id='<?php echo 'hide'.$fila[0] ?>' onclick="mostrarBoton1('<?php echo 'show'.$fila[0] ?>','<?php echo 'hide'.$fila[0] ?>','<?php echo $fila[0] ?>')" >Mostrar </button>
                            <?php
                          }
                          ?>
                         </td>
                     
                        <!--<a class="fa fa-fw fa-eye password-icon show-password" onclick="actualizaEstadoNoticia('//<?php //echo $fila[0] ?>')" style="font-size: 25px; text-decoration: none;"></a>-->
                        
                        </tr>
                        <?php 
                      }
                      ?>
                      </table>   

                    <a class="btn btn-primary" href="REMODELACION-DE-LA-PAGINA-DE-LA-UNS/index.php" target="_blank">Visailizar Cambios </a> 
          </div>
        </div>
     </div> 
    </div>
  </div>
</section>

<footer id="footer">
  <p> Copyright MiPanel, &copy;2021</p>
</footer>


<!-----------------------------------------CREAR NOTICIA------------------------------------------->
<div class="modal fade" id="modalNoticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="form-horizontal" name="MiForm" id="MiForm" method="POST" action="modelo/agregarNoticia.php" enctype="multipart/form-data">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Registro de Noticia</h4>
                </div>
                <div class="modal-body text-center">
                 
                        
                        <div class="form-group text-center">
                          
                          
                          <div class="col-sm-12" >
                            <input type="file" class="form-control" name="image" id="file" multiple>
                            <hr>
                            <div  class="form-group" id="preview" ></div>
                          </div>
                            
                                 
                             
                        </div>
                        <div class="form-group text-center">
                          <label  class="col-sm-2 control-label">Descripcion</label>
                          <div class="col-sm-12">
                            <textarea  class="form-control" name="descripcion" id="descripcion" rows="5" cols="50"></textarea >
                          </div>
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button  name="submit" class="btn btn-primary" >Registrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>

<!-----------------------------------------ACTUALIZAR NOTICIA------------------------------------------->
<div class="modal fade" id="actualizarNoticia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="form-horizontal" name="MiForm" id="MiForm">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Registro de Noticia</h4>
                </div>
                <div class="modal-body text-center">
                 
                        
                        <div class="form-group text-center">
                          
                          <div class="form-group">
                      <input type="text" hidden="" id="ID" name="ID">
                      </div>

                          <!--<div class="col-sm-12" >
                            <input type="file" class="form-control" name="image" id="file" multiple>
                            <hr>
                            <div  class="form-group" id="preview" ></div>
                          </div> 
                       
                        </div>-->
                        <div class="form-group text-center">
                          <label  class="col-sm-2 control-label">Descripcion</label><br>
                          <div class="col-sm-12 text-center">
                            <textarea  class="form-control" name="descripcion1" id="descripcion1" rows="5" cols="50"></textarea >
                          </div>
                        </div>
                      
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  
                  <button type="button" id="actualizanoticia" class="btn btn-primary" data-dismiss="modal">Guardar Cambios</button>
                </div>
              </form>
            </div>
          </div>
        </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- SCRIPT PARA EJECUTAR EDITOR CKEDITOS
    ================================================== -->
<script type="text/javascript">
  // Always provide paths that start with a slash character ("/").
CKEDITOR.replace( 'editor1', {
} );
</script>



 <!-- // Always provide paths that start with a slash character ("/").-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


   
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
        <!------------CODIGO PARA PASAR DATOS A FUNCTION ACTUALIZARDATOS------>
 <script>
     
        
        function mostrarBoton (id,h,c) {
          var btn_1 = document.getElementById(id);
        var btn_2 = document.getElementById(h);
            btn_1.style.display = 'none';
            btn_2.style.display = 'inline';
            actualizaEstadoNoticia(c,'0');
        }
        function mostrarBoton1 (id,h,c) {
          var btn_1 = document.getElementById(id);
        var btn_2 = document.getElementById(h);
            btn_1.style.display = 'inline';
            btn_2.style.display = 'none';
            actualizaEstadoNoticia(c,'1'); 
        }
    </script>
 <!------------CODIGO PARA PASAR DATOS A FUNCTION CREAR NOTICIA------>
<script type="text/javascript">
    $(document).ready(function(){

        $('#actualizanoticia').click(function(){
          actualizaNoticia();
        });

    });
</script> 

<script type="text/javascript">
document.getElementById("file").onchange = function(e) {
  let reader = new FileReader();
  
  reader.onload = function(){
    let preview = document.getElementById('preview'),
        image = document.createElement('img');

    image.src = reader.result;
    
    preview.innerHTML = '';
    preview.append(image);
  };
 
  reader.readAsDataURL(e.target.files[0]);
}
</script>