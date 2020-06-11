        <div class="widget">
            <div class="widget-heading">
              <h3 class="widget-title">Nómina</h3>
            </div>
            <div class="widget-body">
              <form method="post" action="<?php echo URL;?>Nomina/RegistrarNomina">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Valor de hora laborada</label>
                      <input type="number" required class="form-control" min="1" max="999999999" id="codigoServicio" name="dias">
                    </div>
                  </div>
                                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Horas Laboradas</label>
                      <input type="number" required class="form-control" min="1" max="999999999" id="codigoServicio" name="horaslab">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Horas extra</label>
                      <input type="number" required class="form-control" min="0" max="999999999" id="codigoServicio" name="horas">
                    </div>
                  </div>
                  <br>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Valor hora extra</label>
                      <input type="number" required class="form-control" min="0" max="999999999" id="codigoServicio" name="totalextra">
                    </div>
                    </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Porcentaje retefuente</label>
                      <input type="txt" required class="form-control" id="codigoServicio" name="porcentaje">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="ddlStatus">Empleado</label>
                      <select name="empleado" class="form-control">
                        <option value=""></option>
                      <?php foreach ($Empleado as $value):?>
                        
                      <option value="<?= $value['CedulaEmpleado'] ?>"><?= $value['Nombre'] ?></option>
                       
                    <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                                      <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Fecha Pago</label>
                      <input type="date" value="<?php echo date("d-m-Y");?>" required class="form-control" id="nombreServicio" name="fecha">
                    </div>
                  </div>
                </div>
                <input class="mb-15 btn btn-raised btn-primary" type="submit" onclick="alertaRegistroServicio()" name="submit_guardar" value="REGISTRAR" />
              </form>
       
                
            </div>
          </div>