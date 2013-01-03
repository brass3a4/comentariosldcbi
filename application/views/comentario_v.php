<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>Comentarios LDCBI</title>

<meta charset ="utf-8" />
<meta name="viewport" content="width=device-width" />
//incluimos las librerias necesarias
<link rel="stylesheet" href="<?=base_url(); ?>statics/css/core/foundation.min.css">
<link rel="stylesheet" href="<?=base_url(); ?>statics/js/fundation/foundation.min.js">
<link rel="stylesheet" href="<?=base_url(); ?>statics/css/comentario.css">
	</head>

	<body>//comienza el cuerpo de la pagina
		
		<div class="twelve columns espacioSuperior">
			//dividimos la pagina en doce columnas, damos espacio de separacion
			<div class="two columns "></div>
			//dividimos las paginas en columnas, tomamos dos y van vacias
			
			<div class="eight columns cuerpo">
			//ahora tomamos ocho columnas para hacer el formulario
	  			<fieldset>
			  		<legend><h3>Comentario</h3></legend>
			  		//titulo del formulario
			  		<form>
				  			<div class="four columns">
					  			<label>Escriba aquí su correo</label>
					  			//dentro hay doce columnas mas tomamos cuatro para poner este titulo
					  			<input type="text"/>
					  			//dentro de este tambien el input text
							</div>
				  			<div class="four columns selectCorreo">
								//aqui tambien la caja de opciones con los mails
				  				<select>
				  					<option value="1">@xanum.uam.mx</option>
				  					<option value="2">@correo.uam.mx</option>
				  				</select>
				  				
				  			</div>
				  			<div class="four columns"></div>
								//cuatro columnas vacias
					  		<div class="twelve columns">	
					  			<label>Escriba aquí su comentario</label>
					  			<textarea /></textarea>
					  			//ocho columnas con el que recibimos el comentario en el input text
					  		</div>
					  		
					  		<div class="twelve columns">
					  			<input type="submit" class="button" value="Enviar" />
					  			//doce columnas para alojar el boton que envia el correo
					  		</div>
			  		</form>
			  	</fieldset>		
			</div>
			
			<div class="two columns"></div>
			//las ultimas dos columnas vacias
		</div>
	
	</body>
</html>


