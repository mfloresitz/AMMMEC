<div class="panel-body">
 					<div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
 					<div class="btn-group">
						<a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#añadirpersona" onClick="myFunction()"> Añadir persona </a>
  					</div>
  					<br><br>
					</div>
					
 					  <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4" align="center">
            <div class="btn-group">
            <h6> 10 personas </h6>
            </div>
          </div>
          
          <div class="col-xs-4 col-sm-4 col-md-2 col-lg-4" align="right">
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
					<div class="col-xs-12 col-lg-12">
						<div class="btn-group btn-group-sm" role="group" aria-label="...">
  						<button type="button" class="btn btn-default">Todas</button>
  						<button type="button" class="btn btn-default">A</button>
  						<button type="button" class="btn btn-default">B</button>
  						<button type="button" class="btn btn-default">C</button>
  						<button type="button" class="btn btn-default">D</button>
  						<button type="button" class="btn btn-default">E</button>
  						<button type="button" class="btn btn-default">F</button>
  						<button type="button" class="btn btn-default">G</button>
  						<button type="button" class="btn btn-default">H</button>
  						<button type="button" class="btn btn-default">I</button>
  						<button type="button" class="btn btn-default">J</button>
  						<button type="button" class="btn btn-default">K</button>
  						<button type="button" class="btn btn-default">L</button>
  						<button type="button" class="btn btn-default">M</button>
  						<button type="button" class="btn btn-default">N</button>
  						<button type="button" class="btn btn-default">Ñ</button>
  						<button type="button" class="btn btn-default">O</button>
  						<button type="button" class="btn btn-default">P</button>
  						<button type="button" class="btn btn-default">Q</button>
  						<button type="button" class="btn btn-default">R</button>
  						<button type="button" class="btn btn-default">S</button>
  						<button type="button" class="btn btn-default">T</button>
  						<button type="button" class="btn btn-default">U</button>
  						<button type="button" class="btn btn-default">V</button>
  						<button type="button" class="btn btn-default">W</button>
  						<button type="button" class="btn btn-default">X</button>
  						<button type="button" class="btn btn-default">Y</button>
  						<button type="button" class="btn btn-default">Z</button>
  						</div>
  						</div>
  					</div>
  				</div>
	 		</div>

<!--Fin de Encabezado-->

<!--Inicio modal de añadir negocio -->
<div class="modal fade" id="añadirpersona" role="dialog">   
    <div class="modal-dialog">
      <form  method="post" action="actualizarMateria.php" enctype="multipart/form-data" onsubmit="return actual();">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-success">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><strong>Añadir persona nueva</strong></h4>
        </div>
        <div class="modal-body">	
          <!-- Cuerpo --> 
          <form action="" method="post">
         	  <div class="form-group">
       		
              <div class="form-group">
                <h5>Nombre completo</h5>
                <input type="text" class="form-control">
              </div>
       		
              <h5>Teléfono</h5>
              <div class="row">
                <div class="form-group">
                  <div class="col-xs-4 col-sm-4" style="width: 60%">
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-xs-8 col-sm-8" style="width: 40%">
                    <select class="form-control">
                        <option>Trabajo</option>
                        <option>Casa</option>
                        <option>Celular</option>
                        <option>Otro</option>
                    </select>
                  </div>
                </div>
              </div>

              <h5>Correo electrónico</h5>
              <div class="row">
                <div class="form-group">
                  <div class="col-xs-4 col-sm-4" style="width: 60%">
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-xs-8 col-sm-8" style="width: 40%">
                    <select class="form-control">
                        <option>Trabajo</option>
                        <option>Casa</option>
                        <option>Celular</option>
                        <option>Otro</option>
                    </select>
                  </div>
                </div>
              </div>
                      	
              <div class="form-group">
                <h5>Organización</h5>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-briefcase"></span></span>
                  <input type="text" class="form-control" aria-describedby="basic-addon2">
                </div>
              </div>
              
              <div class="form-group">
                <h5>Propietario</h5>
                <select class="form-control">
                  <option>Felipe(tú)</option>
                </select>
              </div>

              <div class="form-group">
                <h5>Honorífico</h5>
                <select class="form-control">
                  <option>(Ninguno)</option>
                  <option>Ing.</option>
                  <option>Lic.</option>
                  <option>Sr.</option>
                  <option>Srta.</option>
                </select>
              </div>

              <div class="form-group">
                <h5>Puesto</h5>
                <input type="text" class="form-control">
       	      </div>
            </div>
          </form>     
          <!-- fin cuerpo --> 
        </div>
       <div class="modal-footer">
            <div class="col-lg-8">
              <select class="form-control">
                <option>Empresa Completa</option>
                <option><label></label>Propietario y Seguidores</option>
              </select>
            </div>
          <div class="col-lg-4">
            <input type="submit" class="btn btn-success" value="Guardar" >
          </div>
          <!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
        </div>
      </form>
    </div>
  </div>     
<!--fin modal de añadir negocio -->