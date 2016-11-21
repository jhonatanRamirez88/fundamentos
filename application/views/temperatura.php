<body onload="setInterval('location.reload()',20000), cargarDatos();"><!-- dato a dejar para el post 500-->
	<div>
		<input type="text" name="temp" id="temp" placeholder="Tiempo"/>
		<h4>Uptime: <span id="uptimeVal"></span></h4>
		
		<?php 			
			var_dump($todo[0]['id_usuarios']);
			var_dump($todo[0]['usuario']);	
		?><!---->
	</div>
	<script src="js/coordenadas.js"></script>



