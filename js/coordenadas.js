		function cargarDatos() {			
			//Direccion ip del arduino
			$.getJSON("http://148.215.31.198").done( function(datos){ 				
				$("#tempVal").text(datos.temperatura);
				$("#uptimeVal").text(datos.uptime);								
				$("#temp").val(datos.temperatura);				
				update();
			});
		}//fin de cargarDatos

		function update(){        
        var z = $("#temp").val();   
        console.log(z);             
        $.ajax({
            type: "POST",            
            url:"http://localhost/CIconBoostrap/index.php/alarma/update",
            data:{'z': z},
            success: function() {
                console.log("Exito");
            }
        });
    }//fin de update