function Registrar() {			
	   var usuario = $("#usuario").val();   
	   var contrasena = $("#contrasena").val(); 			 	         
        $.ajax({
            type: "POST",            
            url:"http://localhost/CodeIgniterBoostrap/index.php/prueba/registrar",
            data:{'usuario': usuario, 'contrasena': contrasena},
            success: function() {
                console.log("Exito");
            },
            error: function(){
            	alert();
            }

        });
        return true;
}