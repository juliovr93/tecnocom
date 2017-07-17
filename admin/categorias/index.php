<?php
	include_once('../tecnocom.class.php');
	include('../header.php');
?>
<div class="page-header">
  <h1>Categorías</h1>
</div>
<?php
	if(isset($mensajes) and isset($color) and isset($icon)){
		foreach ($mensajes as $key => $value) {
			echo '<div class="alert alert-'.$color.' alert-dismissible" role="alert"><span class="glyphicon '.$icon.'" aria-hidden="true"></span> '.$value.'</div>';
		}
	}
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<a class="btn btn-success" href="nuevo.php?" role="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nueva Categoría</a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<table class="table table-hover">
		  <tr class="active">
				<th>Categoría</th>
				<th></th>
				<th></th>
			</tr>
			<?php
				$datos=$tecnocom->consultar("select * from categoria order by categoria asc");
				foreach ($datos as $key => $value) {
					echo '<tr>';
						echo '<td>'.$value['categoria'].'</td>';
						echo '<td><a class="btn btn-primary" href="editar.php?id_categoria='.$value['id_categoria'].'" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a></td>';
						echo '<td><a class="btn btn-danger" href="eliminar.php?id_categoria='.$value['id_categoria'].'" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Eliminar</a></td>';
					echo '</tr>';
				}
			?>
		</table>
	</div>
</div>
<?php
	include('../footer.php');
?>