<!doctype html>
<html class="no-js" lang="es_ES">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link type="text/css" rel="stylesheet" href="<?php echo $url ?>css/bootstrap.css" />
  <link type="text/css" rel="stylesheet" href="<?php echo $url ?>css/style.css" />
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <title>Mi portafolio</title>
</head>

<body>

<div class="container-fluid title">
	<div class="row">
		<div class="col-sm-3 column">
			<a href="index.php"><button type="button" class="btn btn-lg"><h1>Portafolky</h1></button></a>
			<h2>Aprende a programar un <strong>portafolio</strong> justo al perfil de tu <strong>creatividad :</strong></h2>
		</div>
	</div>
</div>

<div class="container-fluid plan">
	<div class="row">
    <div class="col-sm-7">
      <h3>Plan de estudio</h3>

    	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <strong>Sesión 1 -</strong> Herramientas y bases de programación
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
           <div class="panel-body">
              En esta sesión instalaremos las herramientas necesarias para desarrollar <strong>un sitio en PHP</strong>, se descargará <strong>la base estructural</strong> del sitio web y se montará en un servidor gratuito que después podrá ser apuntado a una dirección personalizada (www.tusitio.com). También aprenderán <strong>los fundamentos de HTML y CSS</strong>, que son y como funcionan.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
         <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
               <strong>Sesión 2 -</strong> Bases de HTML
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              Explicaremos el sintaxis del código y los conceptos que lo conforman (responsivo, clases, vinculos, metadatos, etc.). Veremos como manejar la estructura de base del sitio web, como quitar y agregar elementos, como cambiar material, como vincular contenido.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong>Sesión 3 -</strong> Bases de CSS
              </a>
            </h4>
         </div>
          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
           	  Introduciremos el CSS, veremos como afecta los elementos de HTML y como personalizar el sitio modificando tamaños y colores de la estructura.
            </div>
         </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <strong>Sesión 4 -</strong> Portafolio : estructura personal
              </a>
            </h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
              Montaremos la estructura completa del sitio con todos los elementos del portafolio personal. Modificaremos el código HTML para agregar contenido y acomodar los elementos en una disposición personalizada. ¡ Después, la estructura estará lista para que la llenes con información real !
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingFive">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <strong>Sesión 5 -</strong> Portafolio : último toque de personalización con CSS
              </a>
            </h4>
          </div>
          <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="panel-body">
              Modificaremos los tamaños y colores, y acomodaremos la información para hacer un sitio totalmente personalizado. Para acabar, veremos como poner el sitio en linea y comprar un dominio personal.
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="col-sm-5 details">
      <button type="button" class="btn">
        <p><ul>
          <li>5 sesiones de 4 horas</li>
          <li>150$ por hora</li>
          <li>3000$ el taller completo</li>
        </ul></p>
      </button>
      <button type="button" class="btn inscription">
        <a href="mailto:ldelriof@gmail.com">
          <i class="fa fa-exclamation fa-spin"></i>
          <h5>Inscripción</h5>
          <i class="fa fa-exclamation fa-spin"></i>
        </a>
    </div>
	</div>
</div>

</body>


<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="<?php echo $url ?>js/bootstrap.min.js"></script>
<script src="<?php echo $url ?>js/code.js"></script>

</html>