<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>Comentarios LDCBI</title>

<meta charset ="utf-8" />
<meta name="viewport" content="width=device-width" />

<link rel="stylesheet" href="<?=base_url(); ?>statics/css/core/foundation.min.css">
<script src="<?=base_url(); ?>statics/js/fundation/foundation.min.js"></script>
<script src="<?=base_url(); ?>statics/js/fundation/modernizr.foundation.js" ></script>
<script src="<?=base_url(); ?>statics/js/fundation/app.js" ></script>
<link rel="stylesheet" href="<?=base_url(); ?>statics/css/comentario.css">

	</head>

	<body>
		
		<form method="post" action='<?=base_url(); ?>index.php/principal_c/enviaMail/' accept-charset="utf-8">
		
		<div class="twelve columns espacioSuperior">
			<div class="two columns "></div>
			
			<div class="eight columns titulo">
				Comentarios y sugerencias hacia los Laboratorios de Docencia CBI			
			</div>
			<div class="two columns"></div>
			
		</div>
		
		<div class="twelve columns espacioSuperior">
			<div class="two columns"></div>
			
			<div class="eight columns">

				
				
				

			</div>
			
			<div class="two columns"></div>
			
		</div>
		
		<div class="twelve columns espacioSuperior">
			<div class="two columns"></div>
			
			<div class="eight columns">
				
				
				  
				  <div class="four columns ">
				  	<label >Asunto:</label>
				  	<div class=" selectAsunto ">
		  				<select name="tipoAsunto">
		  					<option value="1">Servicio</option>
		  					<option value="2">Software</option>
		  					<option value="3">Acceso a red</option>
		  					<option value="4">Otros</option>
		  				</select>
		  				
		  			</div>
				  </div>	
				  	
			  		<form>
				  			<div class="four columns">
					  			<label>Escriba aquí su correo</label>
					  			<input name="correo" type="text" required/>
							</div>
				  			<div class="four columns selectCorreo">
				  				<select name="tipoCorreo">
				  					<option value="1">@xanum.uam.mx</option>
				  					<option value="2">@correo.uam.mx</option>
				  				</select>
				  				
				  			</div>
				  			<div class="four columns"></div>
				  		
					  		<div class="twelve columns">	
					  			<label>Escriba aquí su comentario</label>
					  			<textarea name="comentario" required/></textarea>
					  		</div>
					  		
					  		<div class="twelve columns">
					  			<input type="submit" class="button" value="Enviar" />
					  		</div>
			  		</form>
				 
			</div>
			
			<div class="two columns"></div>
			
		</div>
	
	</body>
</html>
