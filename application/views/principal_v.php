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
		
		<form method="post" action='<?=base_url(); ?>index.php/principal_c/enviaMail/1' accept-charset="utf-8">
		
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

				<h4>Elije un asunto:</h4>
				
				

			</div>
			
			<div class="two columns"></div>
			
		</div>
		
		<div class="twelve columns espacioSuperior">
			<div class="two columns"></div>
			
			<div class="eight columns">
				<dl class="tabs four-up">
				  <dd class="active"><a href="#simple1">Servicio</a></dd>
				  <dd><a href="#simple2">Software</a></dd>
				  <dd><a href="#simple3">Acceso a red</a></dd>
				  <dd class="hide-for-small"><a href="#simple4">Otros</a></dd>
				</dl>
				<ul class="tabs-content">
				  <li class="active" id="simple1Tab">
				  <legend><h5>Comentario</h5></legend>
			  		<form>
				  			<div class="four columns">
					  			<label>Escriba aquí su correo</label>
					  			<input name="correo" type="text"/>
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
					  			<textarea name="comentario" /></textarea>
					  		</div>
					  		
					  		<div class="twelve columns">
					  			<input type="submit" class="button" value="Enviar" />
					  		</div>
			  		</form>
				  </li>
				  <li id="simple2Tab">
				  <legend><h5>Comentario</h5></legend>
			  		<form>
				  			<div class="four columns">
					  			<label>Escriba aquí su correo</label>
					  			<input name="correo2" type="text"/>
							</div>
				  			<div class="four columns selectCorreo">
				  				<select name="AgregoCorreo2">
				  					<option value="1">@xanum.uam.mx</option>
				  					<option value="2">@correo.uam.mx</option>
				  				</select>
				  				
				  			</div>
				  			<div class="four columns"></div>
				  		
					  		<div class="twelve columns">	
					  			<label>Escriba aquí su comentario</label>
					  			<textarea id="texto2" /></textarea>
					  		</div>
					  		
					  		<div class="twelve columns">
					  			<input type="submit" class="button" value="Enviar" />
					  		</div>
			  		</form>
				  </li>
				  <li id="simple3Tab">
				  <legend><h5>Comentario</h5></legend>
			  		<form>
				  			<div class="four columns">
					  			<label>Escriba aquí su correo</label>
					  			<input name="correo3" type="text"/>
							</div>
				  			<div class="four columns selectCorreo">
				  				<select name="AgregoCorreo3">
				  					<option value="1">@xanum.uam.mx</option>
				  					<option value="2">@correo.uam.mx</option>
				  				</select>
				  				
				  			</div>
				  			<div class="four columns"></div>
				  		
					  		<div class="twelve columns">	
					  			<label>Escriba aquí su comentario</label>
					  			<textarea id="texto3" /></textarea>
					  		</div>
					  		
					  		<div class="twelve columns">
					  			<input type="submit" class="button" value="Enviar" />
					  		</div>
			  		</form>
				  </li>
				  <li id="simple4Tab">
				  <legend><h5>Comentario</h5></legend>
			  		<form>
				  			<div class="four columns">
					  			<label>Escriba aquí su correo</label>
					  			<input name="correo4" type="text"/>
							</div>
				  			<div class="four columns selectCorreo">
				  				<select name="AgregoCorreo4">
				  					<option value="1">@xanum.uam.mx</option>
				  					<option value="2">@correo.uam.mx</option>
				  				</select>
				  				
				  			</div>
				  			<div class="four columns"></div>
				  		
					  		<div class="twelve columns">	
					  			<label>Escriba aquí su comentario</label>
					  			<textarea id="texto4" /></textarea>
					  		</div>
					  		
					  		<div class="twelve columns">
					  			<input type="submit" class="button" value="Enviar" />
					  		</div>
			  		</form>		  		
				  </li>
				</ul>
			</div>
			
			<div class="two columns"></div>
			
		</div>
	
	</body>
</html>
