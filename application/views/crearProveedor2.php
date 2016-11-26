<script type="text/javascript">
   function Registrar() {           
       var nombre = $("#nombre").val();   
       var paterno = $("#paterno").val();  
       var telefono = $("#telefono").val();  
       var empresa = $("#empresa").val();       
       var idPro = $("#idPro").val();
       console.log(nombre);                          
       console.log(paterno);                          
       console.log(telefono);                          
       console.log(empresa);                          
        $.ajax({
            type: "POST",            
            url:"http://localhost/fundamentos/index.php/introduccion/modificaProveedor",
            data:{'idPro':idPro,'nombre': nombre, 'paterno': paterno, 'telefono': telefono, 'empresa': empresa},
            success: function(response) {
                console.log("Exito");
                console.log(response);
                return true;
            },
            error: function(response){
                console.log(response);
                console.log("Error");
                return true;
            }

        });
        
        }
  </script>
<section id="main" class="wrapper">
        <div class="container">

            <h1> Modificación Proveedor</h1>
            <br><br>
             <form action ="" onsubmit="return Registrar()" method="post" name="altaProveedor" id="altaProveedor">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                            <input type="hidden" class="form-control" id="idPro" <?php echo 'value="'.$proveedor[0]['idPro'].'"';?>>
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="nombre" required data-validation-required-message="Por favor introduzca el nombre del Proveedor." <?php echo 'value="'.$proveedor[0]['nombre'].'"';?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Paterno</label>
                                <input type="text" class="form-control" placeholder="Paterno" id="paterno" required data-validation-required-message="Por favor introduzca el apellido Paterno del Proveedor." required <?php echo 'value="'.$proveedor[0]['paterno'].'"';?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefono</label>
                                <input type="text" class="form-control" placeholder="Telefono" id="telefono" required data-validation-required-message="Por favor ingrese el telefono." <?php echo 'value="'.$proveedor[0]['telefono'].'"';?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Empresa</label>
                                <input type="text" class="form-control" placeholder="Empresa" id="empresa" required data-validation-required-message="Por favor ingrese la empresa." <?php echo 'value="'.$proveedor[0]['empresa'].'"';?>>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Crear</button>
                            </div>
                        </div>
                    </form>
              
            </p>
        </div>
        </div>
        </section>
    