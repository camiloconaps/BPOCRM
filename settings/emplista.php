

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<div class="row">
<div class="span16">
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fecha Creación</th>
                <th>Campañas</th>
                <th>Estado</th>
                <th>Desc</th>
            </tr>
        </thead>
        <tbody>
			<?php require_once('../src/connect.php'); 
			$sql = "SELECT * FROM crmpa_empresa";
			foreach($pdo->query($sql) as $row){
				echo '<tr>
					<td>Avantel 1</td>
					<td>2018/04/12</td>
					<td>4</td>
					<td>
						<a href="javascript:;" class="btn btn-small btn-danger">
							<i class="btn-icon-only icon-remove"></i>
						</a>
					</td>
					<td>Desc 1</td>
				</tr>';
			}?>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Fecha Creación</th>
                <th>Campañas</th>
                <th>Estado</th>
                <th>Desc</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>