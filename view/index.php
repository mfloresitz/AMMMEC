<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>CRM AMMMEC</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/negocios.css">
  <link rel="stylesheet" type="text/css" href="assets/css/timeline.css">
  <link rel="stylesheet" type="text/css" href="assets/css/informe1.css">
  <link rel="stylesheet" type="text/css" href="assets/css/administracion.css">
</head>

<body>
 <nav class="navbar navbar-default" id="head">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--<a class="navbar-brand" href="#">AMMMEC</a>-->
    <a title="AMMMEC" href="?c=negocios"><img src="assets/imagenes/logoammmec.png" width="100" alt="AMMMEC" class="admin6"></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="admin1"><a href="?c=negocios"><span class="glyphicon glyphicon-usd"></span> Negocios<span class="sr-only">(current)</span></a></li>
        <li class="admin2"><a href="?c=actividades"><span class="glyphicon glyphicon-calendar"></span> Actividades</a></li>

        <li class="dropdown" id="admin3">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Contactos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="?c=personas"><span class="glyphicon glyphicon-user"></span> Personas</a></li>
            <li><a href="?c=organizaciones"><span class="glyphicon glyphicon-briefcase"></span> Organizaciones</a></li>
          </ul>
        </li>
         
         <li class="dropdown" id="admin3">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-stats"></span> Estadisticas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=""><span class="glyphicon glyphicon-tasks"></span> Panel</a></li>
            <li><a href="?c=informe"><span class="glyphicon glyphicon-list"></span> Informe</a></li>
          </ul>
         </li>


         <li class="admin4"><a href="?c=productos"><span class="glyphicon glyphicon-inbox"></span> Productos</a></li>
         <li class="admin4"><a href="?c=deal"><span class="glyphicon glyphicon-cog"></span> Producción</a></li>
      </ul>
      <form class="navbar-form navbar-left" id="admin5">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right" id="admin7">
        <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
        <li>
        <div class="user_admin dropdown" id="admin8"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="assets/imagenes/user.png" /><span class="user_adminname"> John Doe</span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="profile.html"><i class="fa fa-user"></i><span class="glyphicon glyphicon-user"></span> Perfil de Usuario</a> </li>
            <li> <a href="help.html"><i class="fa fa-question-circle"></i><span class="glyphicon glyphicon-cog"></span> Ajustes</a> </li>
            <li role="separator" class="divider"></li>
            <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li>
            <li role="separator" class="divider"></li>
            <li> <a href="login.html"><i class="fa fa-power-off"></i><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a> </li>
          </ul>
        </div>
        </li>
      </ul>      
  </div><!-- /.navbar-collapse -->
 </div><!-- /.container-fluid -->
  
  <div class="panel-default" id="pan">
   <?php include($page); ?>
  </div>
</nav>

<!--Fin de Encabezado--> 

<div class="col-lg-12" id="pan2">
  <!-- Contenido visual de datos 0_0 -->
  <?php include($contenedor); ?>
</div>

<!--Pie de pagina-->
<!--<nav class="navbar navbar-default navbar-fixed-bottom" id="pie">
  <div class="container">
    <h6 align="center">
      C. Industria Artesanal #3 Col. Industrial C.P. 99030
      Tel. (493) 878 85 52 email: ammmec@ammmec.com
  </h6>
  </div>
</nav>-->

<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/funciones.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="assets/js/dropzone.js"></script>
<script type="text/javascript" src="assets/js/autoExpand.js"></script>

</body>
</html>