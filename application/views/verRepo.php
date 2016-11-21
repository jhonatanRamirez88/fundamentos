
<section id="main" class="wrapper">
    <div class="container">        
        <!-- Form -->
            <section>
                <h2 align="center">Reporte</h2>                  
                        <table style="width:100%">
                            <tr>
                                <th><h3>Nombre</h3></th>
                                <th><h3>Precio</h3></th>
                                <th><h3>Existencia</h3></th>
                                <th><h3>Descripción</h3></th>
                                <th><h3>Fecha</h3></th>
                            </tr>
                            <?php
            foreach ($reporte as $repo) {
                echo '<tr>';
                echo '<td>'.$repo['nombre'].'</td>';
                echo '<td>'.$repo['precio'].'</td>';
                echo '<td>'.$repo['existencia'].'</td>';
                echo '<td>'.$repo['descripcion'].'</td>';
                echo '<td>'.$repo['fecha'].'</td>';
                echo '</tr>';
            }
            ?>

                        </table>               
                               
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
