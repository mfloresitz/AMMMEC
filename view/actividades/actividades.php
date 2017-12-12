<div class="panel-body">
  <div class="row">
   <div class="col-xs-4 col-sm-3 col-md-4 col-lg-4">
    <div class="btn-group">
      <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#añadiractividad" onClick="myFunction()"> Añadir actividad </a>
    </div>
    <br><br>
  </div>
  
  <div class="col-xs-4 col-sm-3 col-md-3 col-lg-4" align="center">
    <div class="btn-group">
      <h6> 1 actividad </h6>
    </div>
  </div>
  
  <div class="col-xs-4 col-sm-12 col-md-2 col-lg-4" align="right">
    <div class="btn-group btn-sm">
      <div class="dropdown">
       <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-list"></span>
       </button>
       <ul class="dropdown-menu dropdown-menu-right btn-sm" aria-labelledby="dropdownMenu1">
         <li><a href="#"> Exportar resultados del filtro </a></li> 
       </ul>
     </div>
   </div>
 </div>
</div>


<div class="row">
 <div class="col-xs-6 col-lg-6">
  <div class="btn-group btn-group-sm" role="group" aria-label="...">
    <button type="button" class="btn btn-default">Todas</button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" title="Llamada"><span class="glyphicon glyphicon-earphone"></span></button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" title="Reunión"><span class="glyphicon glyphicon-user"></span></button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" title="Tarea"><span class="glyphicon glyphicon-time"></span></button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" title="Plazo"><span class="glyphicon glyphicon-flag"></span></button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" title="Correo electrónico"><span class="glyphicon glyphicon-send"></span></button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" title="Comida"><span class="glyphicon glyphicon-cutlery"></span></button>
    <button type="button" class="btn btn-default" data-toggle="tooltip" title="Whats"><span class="glyphicon glyphicon-phone"></span></button>
  </div>
</div>

<div class="col-xs-6 col-lg-6" align="right">
  <div class="btn-group btn-group-sm" role="group" aria-label="...">
    <button type="button" class="btn btn-default">Planeado</button>
    <button type="button" class="btn btn-default">Vencida</button>
    <button type="button" class="btn btn-default">Hoy</button>
    <button type="button" class="btn btn-default">Mañana</button>
    <button type="button" class="btn btn-default">Esta semana</button>
    <button type="button" class="btn btn-default">Próxima semana</button>
    <button type="button" class="btn btn-default">Seleccionar periodo</button>
  </div>
</div>
</div>
</div>
<!--Fin de Encabezado-->

<!--Inicio modal de añadir negocio -->
<div class="modal fade" id="añadiractividad" role="dialog">   
  <div class="modal-dialog">
   <form  method="post" action="actualizarMateria.php" enctype="multipart/form-data" onsubmit="return actual();" >
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-success">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><strong>Programar una actividad </strong></h4>
      </div>
      <div class="modal-body">	
        <!-- Cuerpo --> 

        <form action="" method="post">
          <div class="form-group">

            <div class="form-group">
              <div class="btn-group btn-group-sm" role="group" aria-label="...">
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Llamada"><span class="glyphicon glyphicon-earphone"></span></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Reunión"><span class="glyphicon glyphicon-user"></span></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Tarea"><span class="glyphicon glyphicon-time"></span></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Plazo"><span class="glyphicon glyphicon-flag"></span></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Correo electrónico"><span class="glyphicon glyphicon-send"></span></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Comida"><span class="glyphicon glyphicon-cutlery"></span></button>
                <button type="button" class="btn btn-default" data-toggle="tooltip" title="Whats"><span class="glyphicon glyphicon-phone"></span></button>
              </div>
            </div>
            
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>

            <div class="form-group">
              <font size="1">FECHA</font>
              <input type="date" class="form-control">
            </div>


            <div class="row">
              <div class="form-group">
                <div class="col-xs-6 col-sm-6 col-lg-6">
                  <font size="1">HORA</font>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-6">
                  <font size="1">DURACIÓN</font>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="form-group">
                <div class="col-xs-6 col-sm-6 col-lg-6">
                 <input type="text" class="form-control" maxlength="12">
               </div>
               <div class="col-xs-6 col-sm-6 col-lg-6">
                 <input type="text" class="form-control" maxlength="12">
               </div>
             </div>
           </div><br>

           <div class="form-group">
            <textarea id="notas" type="text" class="form-control autoExpand" placeholder="Notas"></textarea>
          </div>

          <div class="form-group">
           <font size="1">ASIGNADA A</font>
           <select class="form-control">
            <option>Felipe(tú)</option>
          </select>
        </div>

        <div class="form-group">
          <font size="1">VINCULADO A</font>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-briefcase"></span></span>
            <input type="text" class="form-control" aria-describedby="basic-addon2" placeholder="Negocio">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Contacto">
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tower"></span></span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" placeholder="Organización">
          </div>
        </div>

      </div>
    </form>
    
    <!-- fin cuerpo --> 
  </div>
  <div class="modal-footer">
    <div class="col-xs-8 col-sm-8 col-lg-8">
      <input type="checkbox" name="chec" > Marcar como completada
    </div>
    <div class="col-xs-4 col-sm-4 col-lg-4" align="left">
     <input type="submit" class="btn btn-success" value="Guardar" >
   </div>
   <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
 </div>
</div>
</form>
</div>
</div>     
<!--fin modal de añadir negocio -->