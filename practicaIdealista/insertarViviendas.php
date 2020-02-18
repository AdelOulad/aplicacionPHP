<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "IdealistaDB";

	$direccion = $_POST['direccion'];
	$precio = $_POST['precio'];
	$tamanio = $_POST['tamanio'];
	$tipos = $_POST['tipo'];
	$zonas = $_POST['zona'];
	$dormitorios = $_POST['dormitorios'];
	//$extras = $_POST['extras'];
	$texto = $_POST['texto'];

	/*for($i=0; $i<count($extras);$i++){
		echo "Extras: " . $i . ": " . $extras[$i] . "<br>";
	}

	for($a=0; $a<count($tipos); $a++){
		echo "Tipos: " . $tipos[$a] . "<br>";

	}

	for($b=0; $b<count($zonas); $b++){
		echo "Zonas: " . $zonas[$b] . "<br>";
	}*/

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$extras="";
	if(isset($_POST["extras"])){
		$extras = $_POST["extras"];
	}

	$extrasFinal = "";
	foreach ($extras as $key) {
		$extrasFinal = $extrasFinal.", ".$key;
	}
	//tipo, zona, direccion, dormitorios, precio, tamanio, extras, foto
	$sql = "INSERT INTO Viviendas (tipo, zona, direccion, dormitorios, precio, tamanio, extras)
	VALUES ('$tipos', '$zonas', '$direccion' , '$dormitorios' , '$precio', '$tamanio','$extrasFinal');";

	if ($conn->multi_query($sql) === TRUE) {
	    echo "<h1 align=center>¡HAS INSERTADO UNA NUEVA VIVIENDA!</h1>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

	?>
	<div align="center">
		<a href='index.php'>Pincha aqui para consultar las viviendas</a>
	</div>	

</body>
</html>