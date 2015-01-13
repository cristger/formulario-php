<?php include("includes/header.php");?>		
		<div class='container'>
        <form method='post' action='procesarsaludos.php'>
		<label for='nombre'>Nombre</label>
		<input name='nombre' type='text' placeholder='Escribe tu nombre' required>
		<label for='email'>Email</label>
		<input name='email' type='email' placeholder='Escribe tu email' required>
		<label for='poblacion'>Poblacion</label>
		<input name='poblacion' type='text' placeholder='Escribe tu poblacion' required>
		<button class='btn btn-warning' type='submit'>Enviar</button/>
		</form>
		</div>
<?php include("includes/footer.php");?>		