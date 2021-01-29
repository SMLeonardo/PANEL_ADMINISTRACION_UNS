<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     
    <!--my estilo css-->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/noticia.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<!--  TIPOGRAFIA TEKO GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">



<!--  ANIMAACION CAROUSEL DE NOTICIAS JQUERY-->
    <script>
var current = 0;
var imagenes = new Array();

$(document).ready(function() {
    var numImages = 8;
    if (numImages <= 4) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
   
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 4;
        }
        
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    });

    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('click', function() {
        if (numImages > current + 4) {
            current = current+1;
        } else {
            current = 0;
        }
        
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        
        return false;
    }); 
 });
</script>

<!--  ANIMAACION LINEA DE TITULO DE VIDEO-->
<script type="text/javascript">

 $(document).ready(function(){
   var refreshId = setInterval(linea, 1000);
   $.ajaxSetup({ cache: false });
 });

function linea() {
  $(".lineaa").toggle();
  $(".lineaa").css('opacity', 0.4);
 
}
</script>


    <title>Universidad Nacional del Santa</title>
  </head>
  <body>
    <?php
                      include("../contolador/conexion.php");
                      $solicitud="SELECT * FROM secciones";
                      $resultado=mysqli_query($conexion,$solicitud);
                 while ($fila = mysqli_fetch_array($resultado)) {
                  if ($fila[2]=="1" && $fila[1]=="MENU1") {
                  
?>
   <nav class="navbar navbar-expand-lg navbar-dark  fixed-top sps sps--abv">
  <div class="container" >
    <a class="navbar-brand" href="#">
    <img src="images/logo_rojo1.png" alt="" width="150" height="70" class="d-inline-block align-top">
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="#">DIRECTORIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="#">INTRANET</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="#">CAMPUS VIRTUAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">CORREO UNS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">TRANSPARENCIA</a>
        </li>
      </ul>

      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="      " aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>

  </div>
</nav> 
<?php
}
}
?>

  
     

 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  

  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="images/6974ce5ac660610b44d9b9fed0ff9548.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" >
      <img src="images/banner1.jpg" class="d-block w-100" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item" >
      <img src="images/ec8956637a99787bd197eacd77acce5e.jpg" class="d-block w-100" alt="...">
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>
<!--segundo menu-->
  <?php
                      include("../contolador/conexion.php");
                      $solicitud="SELECT * FROM secciones";
                      $resultado=mysqli_query($conexion,$solicitud);
                 while ($fila = mysqli_fetch_array($resultado)) {
                  if ($fila[2]=="1" && $fila[1]=="MENU2") {
                  
?>
<ul class="nav justify-content-center" style="background-color: rgb(27, 27, 27)">

   <li class="nav-item dropdown">
          <a class="lista dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
            ADMISION
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="nav-link dropdown-item" href="#">Proceso de Inscripcion</a></li>
            <li><a class="nav-link dropdown-item" href="#">Cronograma</a></li>
            <li><a class="nav-link dropdown-item" href="#">Derecho de Inscripcion</a></li>
            <li><a class="nav-link dropdown-item" href="#">Inscripcion Online</a></li>
            <li><a class="nav-link dropdown-item" href="#">Reglamento</a></li>
            <li><a class="nav-link dropdown-item" href="#">Temario</a></li>
            <li><a class="nav-link dropdown-item" href="#">Consejos</a></li>
            <li><a class="nav-link dropdown-item" href="#">Preguntas Frecuentes</a></li>
          </ul>
        </li>
    <li class="nav-item dropdown">
          <a class="lista dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            DIRECCIONES
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class=" nav-link dropdown-item" href="#">Rectorado</a></li>
            <li><a class="nav-link dropdown-item" href="#">Vicerrectorado Academico</a></li>
            <li><a class="nav-link dropdown-item" href="#">Vicerrectorado de Investigacion</a></li>
            <li><a class="nav-link dropdown-item" href="#">Direccion General de Administracio</a></li>
          </ul>
        </li>
    <li class="nav-item dropdown">
          <a class="lista dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            POSGRADO
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="nav-link dropdown-item" href="#">Maestrias</a></li>
            <li><a class="nav-link dropdown-item" href="#">Doctorados</a></li>
            
          </ul>
        </li>
     
      <li class="nav-item dropdown">
          <a class="lista dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            C.DE PRODUCCION
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="nav-link dropdown-item" href="#">Centro Preuniversitario</a></li>
            <li><a class="nav-link dropdown-item" href="#">Centro de Idiomas</a></li>
            <li><a class="nav-link dropdown-item" href="#">Centro de Computo</a></li>
            <li><a class="nav-link dropdown-item" href="#">Institucion Educativa Experimental</a></li>
            <li><a class="nav-link dropdown-item" href="#">Planta Piloto Agroindustrial</a></li>
          </ul> 
      </li>
</ul>
<?php
}
}
?>
<!--aqui comienza diseno de cuerpo de pagina-->
<main>
  
  <section class="section1 " >
    
    <br>
    <div class="verticalLine "> &nbsp;
    </div><br>
<div class="verticalLine "> &nbsp;
    </div><br><br>
    <div class="text-center">
      <h1 id="pregunta1">¿ Por que Estudiar en la UNS ?</h1><br>
      <p class="mensaje-uns ">La universidad Nacional del Santa es una comunidad academica orientada a la investigacion,</p>
      <p class="mensaje-uns ">extension cultural y proyeccion  social  que brinda uns formacion humanistica, cientifica </p>
      <p class="mensaje-uns ">y tecnologia con clara consiencia de nuestro pais como realidad</p>
    </div>
    
    <div class="verticalLine "> &nbsp;
    </div><br>
    <div class="verticalLine "> &nbsp;
    </div><br><br>

    <div class="logros text-center">
      <a href="#">Logros Obtenidos</a>
    </div>

 
     <div class="verticalLine "> &nbsp;
    </div><br>
     <div class="verticalLine "> &nbsp;
    </div><br><br>

    <div class="container " >
      <div class="row " >

        <div class="col-12 col-sm-4 text-center">
          <div class="logro">
          <img class="imagen-presentacion " src="images/school.png"  alt="Banner 01">
          <h5>Carreras Acreditadas</h5></div>
        </div>

        <div class="col-12 col-sm-4 text-center">
          <div class="logro">
          <img class="imagen-presentacion" src="images/signs.png"  alt="Banner 02">
          <h5>Alumnos Becarios</h5></div>
        </div>

        <div class="col-12 col-sm-4 text-center">
          <div class="logro">
          <img class="imagen-presentacion" src="images/two.png"  alt="Banner 03">
          <h5>Convenios Firmados</h5></div>
        </div>
         <div class="col-12 col-sm-4 text-center">
          <div class="logro">
          <img class="imagen-presentacion" src="images/book.png"  alt="Banner 04">
          <h5>Investigaciones Publicadas</h5></div>
        </div>
         <div class="col-12 col-sm-4 text-center">
          <div class="logro">
          <img class="imagen-presentacion" src="images/graphic.png"  alt="Banner 05">
          <h5>Fondos Concursables</h5></div>
        </div>
         <div class="col-12 col-sm-4 text-center">
          <div class="logro">
          <img class="imagen-presentacion" src="images/people.png"  alt="Banner 06">
          <h5>Proyectos de Emprendimiento</h5></div>
        </div>
</div>
      </div>

  <!---------------------------------------------SECCION SERVICIO-----------------------------------------------------S-->
  <!--<section class="fondo-blanco text-center">
    <div class="contenedor">
      <div class="texto">
      <h2 class="step-title color1">Servicios  </h2>

     </div>
     <div class="imagen">
       <img class="forma " src="images/seccion-galeria.png " alt="forma1">
     </div> 
    </div>-->
     
      <div class="verticalLine "> &nbsp;
      </div><br>
       <div class="verticalLine "> &nbsp;
      </div><br>
  </section> 
    <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->


  
 
<!-- CORTE DE SECCION EN PIE DE PAGINA EN DIAGONAL-->
 <div  class="separador" style="height: 50px; background-color: white; overflow: hidden; " >

 <svg class="svgg"viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
    
  <path class="pat" d="M-9.87,-0.48 C-77.59,-41.94 498.59,-84.38 565.18,28.13 L548.81,189.95 L519.47,154.44 Z" style="stroke: none; fill: rgb(56, 56, 56);">
  </path>
</svg>

</div>

<!--------------------------------------- SECCION SERVICIOS----------------------------------------- -->
 <?php
                      include("../contolador/conexion.php");
                      $solicitud="SELECT * FROM secciones";
                      $resultado=mysqli_query($conexion,$solicitud);
                 while ($fila = mysqli_fetch_array($resultado)) {
                  if ($fila[2]=="1" && $fila[1]=="SERVICIOS") {
                  
?>
<section class="fw-theme-steps">
     
    <br>
          <div class="fw-theme-step-wrap">
            <div class="fw-step-left-part">
                                   <!--- <h2 class="step-title color1">Estrategia</h2> -->
                              <img  class="number" src="images/01-1.jpg" alt="01">      
                            </div>
            <div class="fw-step-center-part">
                <img class="forma" src="images/seccion-galeria.png" alt="Estrategia">
            </div>
            <div class="fw-step-right-part">
                                    <p class="step-text"style="color: black;">La uns cuenta con los mejores servicios academicos y los pone a disposicion de toda la comunidad universitaria.</p>
                            </div>
        </div>
          <div class="fw-theme-step-wrap">
            <div class="fw-step-left-part">
                                     <!--- <h2 class="step-title color2">Diseño</h2>-->
                                      <img  class="number"src="images/02-1.jpg" alt="02">    
                            </div>
            <div class="fw-step-center-part">
                <img class="forma" src="images/seccion-ccultural.png" alt="centro cultural">
            </div>
            <div class="fw-step-right-part">
                                    <p class="step-text"style="color: black;">La uns cuenta con los mejores servicios academicos y los pone a disposicion de toda la comunidad universitaria..</p>
                            </div>
        </div>
          <div class="fw-theme-step-wrap">
            <div class="fw-step-left-part">
                                    <!---  <h2 class="step-title color3">Desarrollo</h2>-->
                                     <img  class="number"src="images/03-1.jpg" alt="03">    
                            </div>
            <div class="fw-step-center-part">
                <img class="forma" src="images/seccion-iita.png" alt="planta agroindustrial">
            </div>
            <div class="fw-step-right-part">
                                    <p class="step-text" style="color: black;">La uns cuenta con los mejores servicios academicos y los pone a disposicion de toda la comunidad universitaria.</p>
                            </div>
        </div>
          <div class="fw-theme-step-wrap">
            <div class="fw-step-left-part">
                                   <!---   <h2 class="step-title color4">Soporte</h2> -->
                                    <img class="number" src="images/04-1.jpg" alt="04">    
                            </div>
            <div class="fw-step-center-part">
                <img class="forma" src="images/seccion-genetica.png" alt="laboratorio">
            </div>
            <div class="fw-step-right-part">
                                    <p class="step-text"style="color: black;">La uns cuenta con los mejores servicios academicos y los pone a disposicion de toda la comunidad universitaria.</p>
                            </div>
        </div>

       
       <br>
  <div  class="separador" style="height: 50px; background-color: rgb(56, 56, 56); overflow: hidden; " >

 <svg class="svgg"viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
    
  <path class="pat" d="M-9.87,-0.48 C-77.59,-41.94 498.59,-84.38 565.18,28.13 L548.81,189.95 L519.47,154.44 Z" style="stroke: none; fill: #fff;">
    <div style="margin-top: -100px">
    <br>
        
         </div> 
  </path>
</svg>

</div>
  </section>
  <?php
}
}
  ?>
<!-- ''''''''''''''''''COMIENZA LA SECCION DE NOTICIA EN LA WEB'''''''''''''''''''''''''''''''''''''''-->
   <?php
                      include("../contolador/conexion.php");
                      $solicitud="SELECT * FROM secciones";
                      $resultado=mysqli_query($conexion,$solicitud);
                 while ($fila = mysqli_fetch_array($resultado)) {
                  if ($fila[2]=="1" && $fila[1]=="NOTICIAS") {
                  
?>
  <section class="noticia" style="background-color:rgb(56, 56, 56) ">
   
   
        <div class="verticalLine "> &nbsp;
        </div><br>
        <div class="verticalLine "> &nbsp;
        </div><br>
        <center><h1 id="noti"  >NOTICIAS</h1></center>
<div class="mural">
       
    <center><div class="container" >
    
    <div class="row">
        <div id="content" class="col-lg-12">
            <div id="carrusel">
                <a href="#" class="left-arrow"><img src="images/left-arrow.png" /></a>
                <a href="#" class="right-arrow"><img src="images/right-arrow.png" /></a>
                <div class="carrusel" style=" border:white 2px solid">
<?php
                      include("../contolador/conexion.php");
                      $solicitud="SELECT * FROM noticias";
                      $resultado=mysqli_query($conexion,$solicitud);
                 while ($fila = mysqli_fetch_array($resultado)) {
                  if ($fila[4]=="1") {
                  
?>
                    <div class="product"  style="background-color:white; border:white 4px solid;width: 300px;height: 400px;">
                      <img src="../modelo/verNoticia.php?id=<?php echo $fila[0] ?>" width="280" height="300">
                       <!-- <img src="images/N1.jpg" width="280" height="300" /> -->
                        <br><br><p><?php echo $fila[1]?></p>
                    </div>
  <?php 
                        # code...
                  }  
                      }
                      ?>                 
                </div>
            </div>
        </div>
    </div>
    </div></center>
          
     
  </div>  



    
      
        <div class="verticalLine "> &nbsp;
        </div><br>
        <div class="verticalLine "> &nbsp;
        </div><br><br>
         
  </section>
<?php
}}
?>
    <!---------------------------------------------SECCION VIDEO------------------------------------->
 <?php
                      include("../contolador/conexion.php");
                      $solicitud="SELECT * FROM secciones";
                      $resultado=mysqli_query($conexion,$solicitud);
                 while ($fila = mysqli_fetch_array($resultado)) {
                  if ($fila[2]=="1" && $fila[1]=="SECCION VIDEO") {
                  
?>
  <section  style = " ">
    <div class="banner-video">
    <center></center>
    
   
        <br>
     <div> 
    <span class="elementor-headline" style="stroke: red; stroke-width:2;fill: none;stroke-dasharray: 1500;">
      <div ><h1  style="color:rgb(15, 15, 15); margin-left: 80px;">VIDEO INSTITUCIONAL</h1></div>
      <div style="margin-top: -60px">
    <svg viewBox="-10 110 900 150" preserveAspectRatio="none" >
      <path class="lineaa" d="M7.7,145.6C109,125,299.9,116.2,401,121.3c42.1,2.2,87.6,11.8,87.3,25.7">
      
      </path>
      </svg></div></span>
</div> 
      <div class="video" style="margin-left:20px; height: 500px;">
    <iframe  src="https://www.youtube.com/embed/PHd69pGfeig" frameborder="0" style="width: 96%;height: 90%;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
     </div>
    <br>
    </div>
  </section>
  <?php
}}
  ?>
  <!-----------------------------------SECCION VINCULOS DE INTERES----------------------------------->
   <?php
                      include("../contolador/conexion.php");
                      $solicitud="SELECT * FROM secciones";
                      $resultado=mysqli_query($conexion,$solicitud);
                 while ($fila = mysqli_fetch_array($resultado)) {
                  if ($fila[2]=="1" && $fila[1]=="VINCULOS") {
                  
?>
  <section>
     <div style="margin-bottom: -120px;">
    <h1 class=" titulo" style="color: rgb(15, 15, 15); margin-left: 80px;">VINCULOS DE INTERES</h1>
     <div class="mural">
       
    <center><div class="container" >
    
    <div class="row">
        <div id="content" class="col-lg-12">
            <div id="carrusel">
                <a href="#" class="left-arrow"><img src="images/left-arrow.png" /></a>
                <a href="#" class="right-arrow"><img src="images/right-arrow.png" /></a>
                <div class="carrusel" >
                    <div class="product" id="product_0" style=" border:#FFFFFF 3px solid; border-radius: 100%;width: 195px; height:200px;">
                       <img class="oj" style="   border-radius: 100%;margin: 2px 1px;" src="images/V1.png" width="185" height="190" /> 
                    </div>
                    <div class="product" id="product_1" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="  border-radius: 100%;margin: 2px 1px;" src="images/V2.png" width="185" height="190" />               
                    </div>
                    <div class="product" id="product_2" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V3.png" width="185" height="190" />
                        
                    </div>
                    <div class="product" id="product_3" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V4.png" width="185" height="190" />
                        
                    </div>
                    <div class="product" id="product_4" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V5.png" width="185" height="190" />
                       
                    </div>
                    <div class="product" id="product_5" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V6.png" width="185" height="190" />
                        
                       </div>

                       <div class="product" id="product_6" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V1.png" width="185" height="190" />
                        
                    </div>
                   <div class="product" id="product_7"  style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V2.png" width="185" height="190" />
                        
                    </div>
                    <div class="product" id="product_8" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V3.png" width="185" height="190" />
                        
                    </div>
                    <div class="product" id="product_9" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V4.png" width="185" height="190" />
                        
                    </div>
                    <div class="product" id="product_10" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V5.png" width="185" height="190" />
                        
                    </div>
                    <div class="product" id="product_11" style=" border:#FFFFFF 3px solid; border-radius: 100%; width: 195px; height:200px;">
                        <img style="border-radius: 100%;margin: 2px 1px;" src="images/V6.png" width="185" height="190" />
                        
                       </div>
                </div>
            </div>
        </div>
    </div>
    </div></center>     
  </div>  
  </div>  
  </section>
  <?php
}}
  ?>
</main>

<!-- Footer -->
<footer class="page-footer" style="background-color:#D81515;">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left ">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3 info">
          
        <!-- Content -->
        <br>
        <h2 class="text-uppercase" style="font-size: 300%; color: white;">UNIVERSIDAD NACIONAL DEL SANTA</h2>
        <p style="color: white; margin: 1px 0px;">Av. Pacifico 508 - Nuevo Chimbote</p>
        <p style="color: white; margin: 1px 0px;">Central Telefónica: (51)-43-310445 Chimbote - Ancash - Perú.</p>
        <p style="color: white;margin: 1px 0px;">2016 Direción de Imagen Institucional</p>
        <p style="color:white; margin: 1px 0px; border-bottom: 2px dotted  #FFFFFF;">Transparencia Universitaria: transparencia@uns.edu.pe</p>

           </div>   

      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3" >

        <!-- Links -->
        
        <br>
        <ul class="list-unstyled" style="margin-top: 10px;">
          <div class="fin-directorio" style="border-bottom: 2px dotted #FFFFFF;"><li>
            
            <h3><a href="#!" style="text-decoration: none; color:white;">UNIVERSIDAD</a></h3>
          </li></div>
          <div class="fin-directorio"style="border-bottom: 2px dotted #FFFFFF;"><li>
            <h3><a href="#!" style="text-decoration: none; color:white;">DIRECTORIO</a></h3>
          </li></div>
          <div class="fin-directorio"style="border-bottom: 2px dotted #FFFFFF;"><li>
            <h3><a href="#!" style="text-decoration: none;  color:white;">INTRANET</a></h3>
          </li></div>
          <div class="fin-directorio"style="border-bottom: 2px dotted #FFFFFF;"><li>
            <h3><a href="#!" style="text-decoration: none;color:white;">GALERIA</a></h3>
          </li></div>
        </ul>

      </div>
      <!-- Grid column -->
<hr class="clearfix w-100 d-md-none pb-3">
      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <br>

        <ul class="list-unstyled " style="margin-top: 10px;">
          <div class="fin-directorio"style="border-bottom: 2px dotted #FFFFFF;"><li>
            <h3><a href="#!" style="text-decoration: none;  color:white;">CONVOCATORIAS</a></h3>
          </li></div>
          <div class="fin-directorio"style="border-bottom: 2px dotted #FFFFFF;"><li>
            <h3><a href="#!" style="text-decoration: none;  color:white;">BOLSA LABORA</a></h3>
          </li></div>
          <div class="fin-directorio"style="border-bottom: 2px dotted #FFFFFF;"><li>
            <h3><a href="#!" style="text-decoration: none;  color:white;">SALA DOCENTES</a></h3>
          </li></div>
          <div class="fin-directorio"style="border-bottom: 2px dotted #FFFFFF;"><li>
           <h3> <a href="#!" style="text-decoration: none; color:white;">SITEMAP</a></h3>
          </li></div>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
     <hr class="style-three">
            <div class="social-icono " style=" ">
              <a href="https://www.facebook.com/unschimbote" target="_new">
                <img style="width: 45px;height: 45px;" src="images/FB.png">
              </a>
              <a href="https://twitter.com/UNS_Chimbote" target="_new">
                <img style="width: 45px;height: 45px;"src="images/TWI.png">
              </a>
              <a href="https://www.instagram.com/unschimbote/" target="_new">
                <img style="width: 45px;height: 45px;"src="images/INS.png" alt="Instagram">
              </a>
              <a href="https://www.youtube.com/channel/UCcCyx2mzVyJrktsFs9IBdGQ" target="_new">
                <img style="width: 45px;height: 45px;"src="images/YOUT.png">
              </a>
              
            </div>
  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: #fff">© 2020 Copyright: UNIVERSIDAD NACIONAL DEL SANTA
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
        <!-- JS Main -->
    <script src="js/main.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
    <!--my script -->
    <script src="js/scrollPosStyler.min.js"></script>
  </body>
</html>