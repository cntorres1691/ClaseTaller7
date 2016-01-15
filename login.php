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
$_SESSION['nombre'] = $_POST['Nombre'];

echo "Variable: " .$_SESSION['nombre'];

//print_r($_REQUEST);
?>
</section>
</body>
</html>



