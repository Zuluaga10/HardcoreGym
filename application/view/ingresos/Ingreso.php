        <div class="widget">
            <div class="widget-heading">
              <h3 class="widget-title">Ingresos</h3>
            </div>
            <div class="widget-body">
              <form method="post" action="<?php echo URL;?>Ingresos/RegistrarIngreso">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Valor</label>
                      <input type="number" required class="form-control" min="1" max="999999999" id="codigoServicio" name="cantidad">
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="txtCustomerName">Fecha</label>
                      <input type="date" value="2019-07-22" required class="form-control" id="nombreServicio" name="fecha">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="ddlStatus">Tipo de ingreso</label>
                      <select name="tipoingreso" class="form-control">
                        <option value=""></option>
                      <?php foreach ($TipoIngreso as $value):?>
                        
                      <option value="<?= $value['IdTipoIngreso'] ?>"><?= $value['Nombre'] ?></option>
                       
                    <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                </div>
                <input class="mb-15 btn btn-raised btn-primary" type="submit" onclick="alertaRegistroServicio()" name="submit_guardar" value="REGISTRAR" />
              </form>
       
                
            </div>
          </div>