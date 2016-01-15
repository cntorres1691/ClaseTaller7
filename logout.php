<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> PSW + Cookie pagina + nombre  </title>
	<link type="txt/css" rel="stylesheet" href="css/main.css"/>
</head>
<body>
<header>
</header>
<section id="sidebar">
</section>
<section id="main">

<?php 
if(isset($_SESSION['nombre'])){
	session_destroy();
	echo "se ha destruido sesion exitosamente <br/>";
	echo "<a href='index.php'>Volver</a>";
}else{
	echo "Error.... <br/>";
	echo "<a href='index.php'>Volver</a>";


?>
</section>
</body>
</html>
