<script>
function changeCiud(){
	var depto = $('#dept').val();
	alert(depto);
	$.ajax({
		type: "POST",
		url: 'loadCiud.php',
		dataType: 'json',
		data: "id_dpt="+depto, // appears as $_GET['id'] @ your backend side
		beforeSend: function() {
				//$('#summary111').html('checking');
		},
		complete: function() {},
		success: function(html) {
				var cadena="<option value='' selected></option>";
				$.each(html, function(index,valor) {
						//alert("element at " + index + ": " + valor); // will alert each value
						cadena  = cadena +"<option value='"+index +"'>"+valor +"</option>";
				});
				alert(cadena);
				$('#ciud').find('option').remove().end();
				$('#ciud').append(cadena);
		}
   });
}
$(document).ready(function() {
	
} );
</script>
<?php require_once('../src/connect.php'); ?>
<form class="form-horizontal">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-highlight">
		<thead>
			<tr>
				<th colspan="2" align="center">Encuesta</th>
			</tr>
		</thead>
      <tbody>
        <tr>
			<th colspan="2">TITULAR:</th>
		</tr>
		<tr>
			<td>CEDULA / NIT:</td>
			<td><input type="number" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>NOMBRES / NOMBRE EMPRESA:</td>
			<td><input type="text" class	="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>APELLIDOS:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<th colspan="2">TITULAR Y/O SUSCRIPTOR:</th>
		</tr>
		<tr>
			<td>CEDULA / NIT:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>NOMBRES / NOMBRE EMPRESA:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>APELLIDOS:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>FECHA NACIMIENTO / FECHA CREACION:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>FECHA EXPEDICION:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>DIRECCION:</td>
			<td>
				<select>
					<option value='CALLE '>CALLE </option>
					<option value='CARRERA '>CARRERA </option>
					<option value='AVENIDA '>AVENIDA </option>
					<option value='AUTOPISTA NORTE O SUR'>AUTOPISTA NORTE O SUR</option>
					<option value='AUTOPISTA  SUR'>AUTOPISTA  SUR</option>
					<option value='TRANSVERSAL'>TRANSVERSAL</option>
					<option value='DIAGONAL'>DIAGONAL</option>
				</select>
				<input type="text" class="form-control" placeholder="" />
				<select class="form-control">
					<option value='CALLE '>CALLE </option>
					<option value='CARRERA '>CARRERA </option>
					<option value='AVENIDA '>AVENIDA </option>
					<option value='AUTOPISTA NORTE O SUR'>AUTOPISTA NORTE O SUR</option>
					<option value='AUTOPISTA  SUR'>AUTOPISTA  SUR</option>
					<option value='TRANSVERSAL'>TRANSVERSAL</option>
					<option value='DIAGONAL'>DIAGONAL</option>
				</select>
				<input type="text" class="form-control" placeholder="" />
				<select class="form-control">
					<option value='URBANIZACION'>URBANIZACION</option>
					<option value='APTARTAMENTO '>APTARTAMENTO </option>
					<option value='INTERIOR'>INTERIOR</option>
					<option value='MANZANA '>MANZANA </option>
					<option value='TORRE'>TORRE</option>
					<option value='EDIFICIO'>EDIFICIO</option>
				</select>
				<input type="text" class="form-control" placeholder="" />
				<select class="form-control">
					<option value='URBANIZACION'>URBANIZACION</option>
					<option value='APTARTAMENTO '>APTARTAMENTO </option>
					<option value='INTERIOR'>INTERIOR</option>
					<option value='MANZANA '>MANZANA </option>
					<option value='TORRE'>TORRE</option>
					<option value='EDIFICIO'>EDIFICIO</option>
				</select>
				<input type="text" class="form-control" placeholder="" />
			</td>
		</tr>
		<tr>
			<td>Barrio:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>DEPARTAMENTO:</td>
			<td>
				<select onchange="changeCiud();" id="dept">
				<?php
					$sql = "SELECT * FROM crmpa_deptos";
				
					foreach($pdo->query($sql) as $row){
						echo "<option>".$row['nombre']."</option>";
					}
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>CIUDAD:</td>
			<td>
			<select id="ciud">
			
			</select>
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
		<tr>
			<td>:</td>
			<td><input type="text" class="form-control" placeholder="" /></td>
		</tr>
      </tbody>
    </table>
  </div>
</form>