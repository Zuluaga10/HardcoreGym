        <div class="widget">
            <div class="widget-heading">
              <h3 class="widget-title">Cliente</h3>
            </div>
            <div class="widget-body">
              <form method="post" action="<?php echo URL;?>Clientes/RegistrarCliente">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
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
                      <label for="txtCustomerName">Dirección</label>
                      <input type="text" required class="form-control" id="nombreServicio" name="direccion">
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Teléfono</label>
                      <input type="number" required class="form-control" id="nombreServicio" name="telefono">
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Fecha Inicio</label>
                      <input type="date" value="<?php echo date("d-m-Y");?>" required class="form-control" id="nombreServicio" name="fechainscripcion">
                    </div>
                  </div>
                                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="ddlStatus">Tipo de plan</label>
                      <select name="plan" class="form-control">
                        <option value=""></option>
                      <?php foreach ($Planes as $value):?>
                        
                      <option value="<?= $value['IdPlan'] ?>"><?= $value['Nombre'] ?></option>
                       
                    <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                      <input type="hidden" required class="form-control" id="nombreServicio" name="estado" value="1">
                    </div>
                  </div>
                </div>
                
                <input class="mb-15 btn btn-raised btn-primary" type="submit" onclick="alertaRegistroServicio()" name="submit_guardar" value="REGISTRAR" />
              </form>
       
                
            </div>
          </div>