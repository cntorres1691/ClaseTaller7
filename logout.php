<?php
 	session_start();
?>
<?php
 if (isset($_SESSION['nombre'])){
	session_destroy();
	echo "se ha destrudi sesion exitosamente <br/>";
	echo "<a href='index.php'>Volver</a>";
}else{
	echo "Error....<br/>";
	echo "<a href='index.php'>Volver</a>";
}

?>

