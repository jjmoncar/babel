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
					if($('#pass').val()==""){
						alert("Introduce la contrasena");
						return false;
					}
					else{
						var pass = $('#pass').val();
					}

					if($('#apellido').val()==""){
						alert("Introduce un Apellido");
						return false;
					}else{
						var apellido = $('#apellido').val();
					}
					
					jQuery.post("procesar.php", {
						name:nombre,
						apellido:apellido,
						pwd:pass
					}, function(data, textStatus){
						if(data == 1){
							$('#res').html("Datos insertados.");
							$('#res').css('color','green');
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
		<form>
			<tr>
				<td><label>Nombre: </label><input type="text" id="nombre"/></td>
				<td><label>Apellido: </label><input type="text" id="apellido"/></td>
				<td><label>Correo: </label><input type="text" id="pass"/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="button" id="boton" value="Insertar"/></td>
			</tr>
		</form>
	</table>
	<span id="res"></span>
 
</body>
</html>