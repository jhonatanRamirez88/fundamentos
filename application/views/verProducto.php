
<section id="main" class="wrapper">
    <div class="container">        
        <!-- Form -->
            <section>
                <h3 align="center">Consulta de producto</h3>
                
                        <p>Nombre     : <?php echo $producto[0]['nombre'];  ?></p>
                        <p>Precio     : <?php echo $producto[0]['precio'];  ?></p>
                        <p>Existencia : <?php echo $producto[0]['existencia'];  ?></p>
                        <p>Descripción: <?php echo $producto[0]['descripcion'];  ?></p>                                                
                        <br>                        
                               
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
