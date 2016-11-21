<script type="text/javascript">
   function Registrar() {           
       var nombre = $("#nombre").val();   
       var precio = $("#precio").val();  
       var existencia = $("#existencia").val();  
       var descripcion = $("#descripcion").val();
       var idprov = $("#nombreprov").val();
       var f = new Date();

       var fecha =  f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate();
       console.log(fecha);
       console.log(idprov);


       console.log(nombre);                          
       console.log(precio);                          
       console.log(existencia);                          
       console.log(descripcion);                          
        $.ajax({
            type: "POST",            
            url:"http://localhost/fundamentos/index.php/introduccion/crearProducto",
            data:{'nombre': nombre, 'precio': precio, 'existencia': existencia, 'descripcion': descripcion, 'idprov': idprov, 'fecha': fecha},
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
            <p> <h1>Alta producto</h1>
            <br><br>
             <form action ="" onsubmit="return Registrar()" method="post" name="altaProd" id="altaProd">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h3>Nombre de proveedor</h3>
                                    <select name="nombreprov" id="nombreprov"  style="width: 100px">
                                            <?php
                                foreach ($proveedores as $proveedor) {
                                    echo '<option value="'.$proveedor['idPro'].'"';
                                    echo '>'.$proveedor['nombre'].'</option>';
                                }
                                ?>
                                    </select>
                            </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="nombre" required data-validation-required-message="Por favor introduzca un nombre de producto.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Precio</label>
                                <input type="text" class="form-control" placeholder="Precio" id="precio" required data-validation-required-message="Por favor introduzca un precio." required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Existencia</label>
                                <input type="text" class="form-control" placeholder="Existencia" id="existencia" required data-validation-required-message="Por favor ingrese la existencia.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Descripcion</label>
                                <input type="text" class="form-control" placeholder="Descripcion" id="descripcion" required data-validation-required-message="Por favor ingrese la descripcion.">
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
    