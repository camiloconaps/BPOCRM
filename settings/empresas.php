<script>
$( "#EmpLista" ).click(function() {
  $( "#EmpContenidos" ).load('emplista.php');
});
$( "#EmpAdd" ).click(function() {
  $( "#EmpContenidos" ).load('empadd.php');
});
</script>
<div class="row">
	<div class="span8">
		
	</div>
	<div class="span8">
		<div class="box">
			<div class="box-header">
				<i class="icon-bookmark"></i>
				<h5></h5>
			</div>
			<div class="box-content">
				<div class="btn-group-box" align="center">
					<button class="btn" id="EmpLista"><i class="icon-th icon-large"></i><br/>Lista</button>
					<button class="btn" id="EmpAdd"><i class="icon-list icon-large"></i><br/>Adicionar</button>
					<button class="btn"><i class="icon-user icon-large" onclick="atras();"></i><br/>Atras</button>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="EmpContenidos">

</div>