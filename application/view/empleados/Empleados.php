        <div class="widget">
            <div class="widget-heading">
              <h3 class="widget-title">Empleados</h3>
            </div>
            <div class="widget-body">
              <!-- form por metodo post el cual redirige al controlador/metodo -->
              <!-- echo url en las vistas redirige a controllers -->
              <form method="post" action="<?php echo URL;?>Empleados/RegistrarEmpleados">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <!-- name= envia dato a php>controlador & id = javascript -->
                      <label for="txtCustomerName">Cédula</label>
                      <input type="number" required class="form-control" id="codigoServicio" name="cedula">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Nombres</label>
                      <input type="text" required class="form-control" id="nombreServicio" name="nombre">
                    </div>
                  </div>
                      <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Apellidos</label>
                      <input type="text" required class="form-control" id="nombreServicio" name="apellidos">
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Edad</label>
                      <input type="number" required class="form-control" id="nombreServicio" name="edad">
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Teléfono</label>
                      <input type="number" required class="form-control" id="nombreServicio" name="celular">
                    </div>
                  </div>

                </div>
                </div>
                <!-- boton submit que acciona evento onclick en js (en js esta la funcion) -->
                <input class="mb-15 btn btn-raised btn-primary" type="submit" onclick="alertaRegistroServicio()" name="submit_guardar" value="REGISTRAR" />
              </form>
       
                
            </div>
          </div>