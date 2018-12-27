<html>
	<head>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript">
			$('document').ready(function(){
				$('#boton').click(function(){
					
					if($('#nombre').val()==""){
						alert("Introduce el nombre");
						return false;
					}
					else{
						var nombre = $('#nombre').val();
					}
					if($('#email').val()==""){
						alert("Introduce la contrasena");
						return false;
					}
					else{
						var email = $('#email').val();
					}

					if($('#apellido').val()==""){
						alert("Introduce un Apellido");
						return false;
					}else{
						var apellido = $('#apellido').val();
					}
					
					if($('#telefono').val()==""){
						alert("Introduce un telefono");
						return false;
					}else{
						var telefono = $('#telefono').val();
					}

					if($('#pais').val()==""){
						alert("Introduce un Pais");
						return false;
					}else{
						var pais = $('#pais').val();
					}

					var estatus = $('#estatus').val();


					jQuery.post("procesar.php", {
						name:nombre,
						apellido:apellido,
						pwd:email,
						telefono:telefono,
						pais:pais,
						estatus:estatus
					}, function(data, textStatus){
						if(data == 1){
							$('#res').html("Datos Agregados Satisfactoriamente!");
							$('#res').css('color','green');
							$("#ejemplo")[0].reset();
							$("#nombre").focus();
							setTimeout(function() {$("#res").fadeOut(1500); },3000);

						}
						else{
							$('#res').html("Ha ocurrido un error.");
							$('#res').css('color','red');
						}
					});
				});
			});
		</script>
	</head>
<body>
	<table id="form">
		<form id="ejemplo">
			<tr>
				<td><label>Nombre: </label><input type="text" id="nombre"/></td>
				<td><label>Apellido: </label><input type="text" id="apellido"/></td>
				<td><label>Correo: </label><input type="email" id="email"/></td>
				<td><label>Telefono: </label><input type="text" id="telefono"/></td>
				<td><label>Pais: </label><input type="text" id="pais"/></td>
				<td><label>Estatus: </label><input id="estatus" readonly="true" value="f" type="hidden"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="button" id="boton" value="Insertar"/></td>
			</tr>
		</form>
	</table>
	<span id="res"></span>
 
</body>
</html>