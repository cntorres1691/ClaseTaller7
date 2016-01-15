<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> FORMULARIO  </title>
</head>
<body>
<?php
	if(isset($_SESSION['nombre'])){
	   echo "<p> Hola Usuario:(" .$_SESSION['nombre'].")[<a href='logout.php'>Salir</a>]</p>";
	}else{
	?>
	<form action ="login.php" method ="post">
	  <fielset>
	  	<label> Nombre </label>
		<input type="text" name= "Nombre"/> </br>
		<button type ="submit"> Enviar </button>
	  </fieldset>
	</form>
	<?php } ?>

<footer>
<div>Derechos reservados</div>
</body>
</html>
