
<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "IdealistaDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM Viviendas";
	$result = $conn->query($sql);

	echo "<div style='text-align:center; align: center;'>";
		echo "<h3 style='color: #0909F6; margin-bottom: 0;'>Consulta de Viviendas </h3>";
			/*echo "Mostrar viviendas de tipo: <select name='tipoVivienda'>
									<option value='' disabled selected></option>
									<option value='Casa'>Casa</option>
									<option value='Chalet'>Chalet</option>
									<option value='Piso'>Piso</option>
									<option value='Adosado'>Adosado</option>
						</select>";*/
				echo "<table border=1 style='font-size: 22px; margin: 0 auto; width: 70%; height: 70%;'>";
	if ($result->num_rows > 0) {
			echo "
					<tr style='background-color: #5A7CF3; color: #fff; text-align: center; cellspacing: 1px;'>
	        			<td> ID </td>
	        			<td> TIPO </td>
	        			<td> ZONA </td>
	        			<td> DIRECCION </td>
	        			<td> DORMITORIOS </td>
	        			<td> PRECIO </td>
	        			<td> TAMAÑO </td>
	        			<td> EXTRAS </td>
	        			<td> FOTO </td>
	        		</tr>
				";
	    while($row = $result->fetch_assoc()) {
	        echo "	
					<tr style='background-color: #D6DAE9; text-align: center;'>
						<td>".$row["id"]."</td>
						<td>".$row["tipo"]."</td>
						<td>".$row["zona"]."</td>
						<td>".$row["direccion"]."</td>
						<td>".$row["dormitorios"]."</td>
						<td>".$row["precio"]."</td>
						<td>".$row["tamanio"]."</td>
						<td>".$row["extras"]."</td>
						<td>".$row["foto"]."</td>
					</tr>
					<br>
				";
	    }
	    		
	} else {
	    echo "0 results";
	}
				echo "</table>";
	    echo "</div>";
		
	$conn->close();
	
	?>
	
		<div align="center">
			<br>
				<a href='index.php'> Pagina principal </a>	
		</div>	