<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Ejercico matriculas</title>
		<script type="js/jquery-2.1.4.min.js"></script>

	</head>

	<body>

		<h1><strong>Bienvenido!!</strong></h1>
		<h3>Por favor ingrese los siguientes datos: </h3>

		Nombre <input type="text" name="nombre"><br/><br/>
		Apellido <input type="text" name ="apellido"><br/><br/>
		Precio Base <input type="text" name="valorbase"><br/><br/>
		<br/><br/>
		<input type="submit" value="enviar">

		<h3>Seleccione el curso: </h3>

		<form action="#">
		<select id="seleccioneGrado" name="seleccioneGrado">
			<option value="Seleccione">Seleccione:</option>
			<option value="Primero">Primero</option>
			<option value="Segundo">Segundo</option>
		</select>	
		<div id="resultado"></div>
		</form>
		<br></br>

		<form action="#">
		<select id="seleccionPrimeroA" name ="seleccioneMateria"></select>
			<option value="Seleccione">Seleccione:</option>
			<option value="Danzas">Danzas</option>
			<option value="Teatro">Teatro</option>
			<option value="Dibujo">Dibujo</option>
		</select>
		<div id="resultado"></div>
		</form>

		<form action="#">
		<select id="seleccionPrimeroB" name ="seleccioneMateria"></select>
			<option value="Seleccione">Seleccione:</option>
			<option value="Danzas">Danzas</option>
			<option value="Musica">Musica</option>
		</select>
		<div id="resultado"></div>
		</form>

		<form action="#">
		<select id="seleccionPrimeroC" name ="seleccioneMateria"></select>
			<option value="Seleccione">Seleccione:</option>
			<option value="Teatro">Teatro</option>
			<option value="Dibujo">Dibujo</option>
			<option value="Musica">Musica</option>
		</select>
		<div id="resultado"></div>
		</form>





		<form action="#">
		<select id="seleccionSegundoA" name ="seleccioneMateria"></select>
			<option value="Seleccione">Seleccione:</option>
			<option value="Teatro">Teatro</option>
			<option value="Dibujo">Dibujo</option>
		</select>
		<div id="resultado"></div>
		</form>
		
		<form action="#">
		<select id="seleccionSegundoC" name ="seleccioneMateria"></select>
			<option value="seleccione">Seleccione:</option>
			<option value="Teatro">Teatro</option>
			<option value="Musica">Musica</option>
			</select>
		<div id="resultado"></div>
		</form>


		<script>

			$("#seleccioneGrado").change(function()){
				var gradoValor = $("#seleccioneGrado").val();
				$.ajax({
					method: "POST",
					url: "matricula.php",
					data:{ grado:gradoValor}
				})

				.done(function(msg){
					$("#resultado").html(msg);
				})
			});

		</script>

		<script>

			$("#seleccioneMateria").change(function()){
				var primeroValor = $("#seleccioneMateria").val();
				$.ajax({
					method: "POST",
					url: "matricula.php",
					data:{ primero:primeroValor}
				})

				.done(function(msg){
					$("#resultado").html(msg);
				})
			});

		</script>

		<script>

			$("#seleccioneMateria").change(function()){
				var segundoValor = $("#seleccioneMateria").val();
				$.ajax({
					method: "POST",
					url: "matricula.php",
					data:{ segundo:segundoValor}
				})

				.done(function(msg){
					$("#resultado").html(msg);
				})
			});

		</script>

	</body>

</html>