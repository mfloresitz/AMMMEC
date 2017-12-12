<div class="table-responsive" id="tbl">
	<table class="table table-hover">
		<tr>
			<th><input type="checkbox"></th>
			<th>Nombre completo</th>
			<th>Dirección</th>
			<th>Personas</th>
			<th>Negocios cerrados</th>
			<th>Negocios abiertos</th>
			<th>Fecha próxima</th>
			<th>Propietario</th>
		</tr>
	
  <?php foreach($this->model->Listar() as $r): ?>
 
        <tr>
        	 
        	<td><input type="checkbox" onclick="myFunction2()" ></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Direccion; ?></td>
            <td><?php echo "5"; ?></td>
            <td><?php echo "3"; ?></td>
            <td><?php echo "2"; ?></td>
            <td><?php echo "21 de noviembre"; ?></td>
            <td><?php echo $r->Propietario; ?></td>

        </tr>
   
    <?php endforeach; ?>

	</table>

	<script>
			function myFunction2() {
						alert("Hola mundo");
					}
	</script>	


</div>