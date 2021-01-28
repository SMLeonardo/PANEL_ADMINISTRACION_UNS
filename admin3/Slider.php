<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>WebAdmin | Panel de Control</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
     <link rel="stylesheet" type="text/css" href="js/select2/css/select2.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">

     <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script src="js/select2/js/select2.js"></script>
    <script src="js/alertifyjs/alertify.js"></script>
    <script src="js/functions.js"></script>
     <!-- // Always provide paths that start with a slash character ("/").-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>  
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
            <li class="active"><a href="Slider.php">Sliders</a></li>
            <li><a href="Noticias.php">Noticias</a></li>
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
       <h1><span class="glyphicon glyphicon-cog"></span> Panel de Control<small>Administrador Web</small></h1>
     </div>
     <div class="col-md-2">
        <div class="dropdown crear">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Crear Contenido
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a type="button" href="agregarSlider.php"><img src="imagenes/add.png" style="width: 30px;"> Agregar Sliders</a></li>
             
           
   
            </ul>
      </div>

     </div>
   </div>
 </div> 
</header>

<section id="breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li class="active">Panel de Control</li>
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
          <div class="panel-heading"> Sliders </div>
          <div class="panel-body">
            <table class="table table-striped table-hover">
             <?php
                      include("contolador/conexion.php");
                      $solicitud="SELECT * FROM sliders";
                      $resultado=mysqli_query($conexion,$solicitud);
                      
              ?>
                      
                      <table class='table table-striped table-hover'> 
                      <tr>
                      <th  style="text-align: center;">N°</th>
                      <th  style="text-align: center;">Imagen</th>
                      <th  style="text-align: center;">Descripcion</th>
                      <th></th>
                      </tr>
                  <?php    
                      $cont=0;
                      while ($fila = mysqli_fetch_row($resultado)) {
                        $datos=$fila[0]."||".
                        $fila[1]."||".$fila[2]."||".$fila[3]; 
                        $cont=$cont+1;
                        ?>
                      <tr>
                        <td><?php echo $cont ?></td>
                        <td ><img src="<?php echo $fila[2] ?>"  width="120" height="70" /></td>
                        <td ><?php echo $fila[1] ?></td>
                        <td class="col-md-4"> <a class="btn btn-default" href="editarSlider.php?id=<?php echo $fila[0] ?>">Editar</a> 
                                              
                        <?php
                            if ($fila[3]=='1') {
                                                     
                        ?>

                        <a class="btn btn-primary" href="verSlider.php?id=<?php echo $fila[0] ?>">Ocultar</a> 

                        <?php
                            }else{

                            ?>
                         <a class="btn btn-primary" href="verSlider.php?id=<?php echo $fila[0] ?>">Mostrar</a> 
                            <?php
                          }
                          ?>
                          <a class="btn btn-danger" onclick="preguntarSiNoSlider('<?php echo $fila[0] ?>')">Borrar </a> </td>
                      </tr>
                        <?php 
                      }
                      ?>
                         
                        

                        
                      </table>
                      <button class="btn btn-primary" data-toggle="modal" data-target="#" onclick="" >Visualizar Cambios</button>
          </div>
        </div>
     </div> 
    </div>
  </div>
</section>

<footer id="footer">
  <p> Copyright MiPanel, &copy;2021</p>
</footer>

<!------------------------------------------------ CREAR MENU  -------------------------------------------->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Agregar Sliders</h4>
                </div>
                <div class="modal-body">
                  <!--<div class="form-group">
                    <label>Titulo de la Pagina</label>
                    <input type="text" class="form-control" placeholder="Titulo de la Pagina">
                </div>-->
                 <div class="form-group">
                    <label>Informacion de la Pagina</label>
                    <textarea name="editor1" class="form-control"rows="3" placeholder="Informacion de la pagina"> </textarea>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="">Publicado
                  </label>
                  
                </div>
                <div class="form-group">
                    <label>Palabras clave</label>
                    <input type="text" class="form-control" placeholder="Agregar algunas palabras">
                </div>
                <div class="form-group">
                    <label>Meta descripcion</label>
                    <input type="text" class="form-control" placeholder="Agregar una metadescripcion...">
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Guardar Cambios</button>
                </div>
              </form>
            </div>
          </div>
        </div>

<!-----------------------------------------CREAR USUARIO------------------------------------------->
<div class="modal fade" id="agregarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="form-horizontal">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Registro de Usuario</h4>
                </div>
                <div class="modal-body">
                 
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Nombres</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control"  id="nombre" name="nombre" placeholder="Ingrese Nombres">
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Apellidos</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese Apellidos">
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Usuario</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese Usuario">
                          </div>
                        </div>
                        <div class="form-group">
                          <label  class="col-sm-2 control-label">Contraseña</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese Contraseña">
                          </div>
                        </div>
             
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal" id="agregarUser">Registrar</button>
                </div>
              </form>
            </div>
          </div>
        </div>

<!-----------------------------------------CREAR SLIDERS------------------------------------------->

<div class="modal fade" id="modalSliders" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form class="form-horizontal" name="MiForm" id="MiForm" method="POST" action="modelo/agregarNoticia.php" enctype="multipart/form-data">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">CREAR SLIDER</h4>
                </div>
                <div class="modal-body text-center">
                 
                        
                        <div class="form-group text-center">
                          
                          
                          <div class="col-sm-12" >
                            <input type="" name="" class="form-control">
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
   <!-- SCRIPT PARA EJECUTAR EDITOR CKEDITOS
    ================================================== -->
<script type="text/javascript">
  // Always provide paths that start with a slash character ("/").
CKEDITOR.replace( 'editor1', {
} );
</script>
 <!-- // Always provide paths that start with a slash character ("/").
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>


   

    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>  -->
  </body>
</html>

 <!------------CODIGO PARA PASAR DATOS A FUNCTION CREAR USUARIO------>
<script type="text/javascript">
        
       $(document).ready(function(){
        $('#agregarUser').click(function(){
          nombre=$('#nombre').val();
          apellidos=$('#apellidos').val();
          email=$('#email').val();
          usuario=$('#usuario').val();
          pass=$('#pass').val();
            agregardatos(nombre,apellidos,email,usuario,pass);
        });

    });
</script>    
 <!------------CODIGO PARA PASAR DATOS A FUNCTION CREAR NOTICIA------>
<script type="text/javascript">
        
       $(document).ready(function(){
        $('#agregarNoticia').click(function(){
          descripcion=$('#descripcion').val(); 
          imagen=$('#file').val();
          //var filename = document.getElementById('file').files[0].name;
    
    alert(files);
            agregarNoticia(descripcion,files);
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