<?php include("includes/header.php");?>
<div class='container'>
<?php	
	//recojo las variables del formulario	
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$poblacion=$_POST['poblacion'];
	//los pasamos como parámetros en la función
	include("includes/functions.php");
	//imprimir la función
	echo '<p>'.sobremi($nombre,$email,$poblacion).'<p>';
		
		?>
</div>
<?php include("includes/footer.php");?>		        

