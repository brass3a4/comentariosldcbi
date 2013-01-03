<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>Comentarios LDCBI</title>

<meta charset ="utf-8" />
<meta name="viewport" content="width=device-width" />
//incluimos la librerias correspondientes 
<link rel="stylesheet" href="<?=base_url(); ?>statics/css/core/foundation.min.css">
<script src="<?=base_url(); ?>statics/js/fundation/foundation.min.js"></script>
<script src="<?=base_url(); ?>statics/js/fundation/modernizr.foundation.js" ></script>
<script src="<?=base_url(); ?>statics/js/fundation/app.js" ></script>
<link rel="stylesheet" href="<?=base_url(); ?>statics/css/comentario.css">

	</head>

	<body>
		
		<form method="post" action='<?=base_url(); ?>index.php/principal_c/enviaMail/' accept-charset="utf-8">
		//aqui es donde esta el link que se la pasa al controlador en el arreglo
		<div  class="twelve columns espacioSuperior">
			//dividimos de nuevo la pagina en doce columnas
			<div class="two columns "></div>
			//dos columnas vacias
			<div class="eight columns titulo espacioSuperior espacioInferior">
				Comentarios y sugerencias hacia los Laboratorios de Docencia CBI		
				//ocho columnas el titulo centrado	
			</div>
			<div class="two columns"></div>
			//dos columnas vacias
		</div>
		
		<div class="twelve columns espacioSuperior">
			<div class="two columns"></div>
			// de nuevo dividimos y tomamos dos vacios
			<div class="eight columns borde espacioSuperior" >
				//en ocho columnas 			  
				  <div class="four columns ">
				  	<label >Asunto:</label>
				  	//cuatro las usamos para el titulo
				  	<div class=" selectAsunto ">
		  				<select name="tipoAsunto">
		  					<option value="1">Servicio</option>
		  					<option value="2">Software</option>
		  					<option value="3">Acceso a red</option>
		  					<option value="4">Otros</option>
		  				</select>
		  				//aqui ponemos una caja con valores definidos que es el tipo de servicio que pide el usuai
		  			</div>
				  </div>	
				  	
			  		<form>
				  			<div class="four columns">
					  			<label>Escriba aquí su correo</label>
					  			<input name="correo" type="text" required/>
					  			//caja de input tex con el correo que se solicita
							</div>
				  			<div class="four columns selectCorreo">
				  				<select name="tipoCorreo">
				  					<option value="1">@xanum.uam.mx</option>
				  					<option value="2">@correo.uam.mx</option>
				  				</select>
				  				//caja de opciones de que tipo de mail es de donde nos envia el correo
				  			</div>
				  			<div class="four columns"></div>
								//cuatro columnas vacias
					  		<div class="twelve columns">	
					  			<label>Escriba aquí su comentario</label>
					  			<textarea name="comentario" required/></textarea>
					  			//input tex del boton enviar
					  		</div>
			  		</form>
				 
			</div>
			
			<div class="two columns"></div>
			//las dos columnas restantes vacias
		</div>
	
	</body>
</html>
