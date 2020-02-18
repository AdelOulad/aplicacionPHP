
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div align="center">
		<form action="insertarViviendas.php" method="POST" style="border: 3px dotted blue; margin-left: 35%; margin-right: 35%; padding: 10px">
			<table cellpadding="5px" cellspacing="5px">
				<tr>
					<td> Tipo de vivienda: <select name="tipo" id="">
									<option value="" disabled selected></option>
									<option value="Casa">Casa</option>
									<option value="Chalet">Chalet</option>
									<option value="Piso">Piso</option>
									<option value="Adosado">Adosado</option>
						</select>
					</td>	
				</tr>
				<tr>
					<td> Zona: <select name="zona" id="">
									<option value="" disabled selected></option>
									<option value="Centro">Centro</option>
									<option value="Macarena">Macarena</option>
									<option value="Nervion">Nervion</option>
									<option value="Aljarafe">Aljarafe</option>
						</select>
					</td>
				</tr>
				<tr>
					<td> Direccion: <input type="text" name="direccion"></td>
				</tr>
				<tr>
					<td> Numero de dormitorios: <input type="radio" name="dormitorios" value="1">1
												<input type="radio" name="dormitorios" value="2">2
												<input type="radio" name="dormitorios" value="3">3
												<input type="radio" name="dormitorios" value="4">4
												<input type="radio" name="dormitorios" value="5">5
					</td>	
				</tr>
				<tr>
					<td> Precio:	<input type="text" name="precio"> €
				</tr>
				<tr>
					<td> Tamaño:	<input type="text" name="tamanio"> metros cuadrados
				</tr>
				<tr>
					<td> Extras(marque los que procedan):
						<input type="checkbox" name="extras[]" value="Piscina">Piscina
						<input type="checkbox" name="extras[]" value="Jardin">Jardin
						<input type="checkbox" name="extras[]" value="Garage">Garage
					</td>	
				</tr>
				<tr>
					<td> Foto: <!-- Insertar Foto --><input type="text" name="foto"><a></a></td>
				</tr>
				<tr>
					<td> Observaciones: <textarea name="texto" rows="4" cols="40" placeholder="Comentario:"></textarea>
				</tr>	
				<tr>
					<td><input type="submit" value="Insertar Vivienda">
				</tr>	
			</table>	
		</form>
	</div>		
</body>
</html>