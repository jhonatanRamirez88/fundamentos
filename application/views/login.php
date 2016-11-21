  <script type="text/javascript">
    function Registrar() {      
       var usuario = $("#usuario").val();   
       var contrasena = $("#contrasena").val();              
       var form = $("#loginForm");
         if (usuario == "anita" && contrasena == "123" || usuario == "jonas" && contrasena == "123") {          
          if (usuario=="anita") {
            alert("Bienvenida Anita");
            form.attr("action", "inicio");            
            return true;
          }else{
            alert("Bienvenida Jonas");
            form.attr("action", "inicio2");
            return true;
          }
          
         }else{
            alert("Usuario no existente");
            return false;
         }
    
  }
  </script>

 <section id="main" class="wrapper">
        <div class="container">
            <h3 align="center"> Login</h3>
            <br><br>
             <form action ="" onsubmit = "return Registrar()" method="get" name="sentMessage" id="loginForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Usuario</label>
                                <input type="text" class="form-control" placeholder="Usuario" id="usuario" required data-validation-required-message="Por favor introduzca su usuario.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" placeholder="Contraseña" id="contrasena" required data-validation-required-message="Por favor ingrese su Contraseña.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
              
            
        </div>
        
        </section>
    