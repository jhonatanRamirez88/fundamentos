<!-- Main -->
<script type="text/javascript">
   function Registrar() {           
       var nombre = $("#nombre").val();   
       
       console.log(nombre);                          
       
        $.ajax({
            type: "GET",            
            url:"http://localhost/fundamentos/index.php/introduccion/buscarProveedor",
            data:{'nombre': nombre},
            success: function(response) {
                console.log("Exito");
                
                return true;
            },
            error: function(response){
                
                console.log("Error");
                return true;
            }

        });
        
        }
  </script>

<section id="main" class="wrapper">
    <div class="container">        
        <!-- Form -->
            <section>
                <h3 align="center">Consulta Proveedores</h3>
                <form action ="buscarProveedor2" onsubmit = "return Registrar()" method="get" name="sentMessage" id="consultaForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <h3>Nombre de Proveedor</h3>
                                    <select name="nombre" id="nombre"  style="width: 100px">
                                            <?php
                                foreach ($proveedor as $proveedor) {
                                    echo '<option value="'.$proveedor['idPro'].'"';
                                    echo '>'.$proveedor['nombre'].'</option>';
                                }
                                ?>
                                    </select>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Consultar</button>
                            </div>
                        </div>
                    </form>            
                <br/>
        </section>
    </div>
</section>
<script
  src="https://code.jquery.com/jquery-3.1.1.slim.js"
  integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
  crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript">
    $("#nombre").select2();
</script>