 <header>
        <div class="container">
            <p> Agregar producto
            <br><br>
             <form action ="Agregar" method="post" name="agregarProducto" id="agregarProducto" novalidate>
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
              
            </p>
        </div>
        </div>
    </header>