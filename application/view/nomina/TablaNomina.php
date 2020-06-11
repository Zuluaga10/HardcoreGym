       <label for="">Nota: El retefuente solo aplica para pagos superiores a $4.000.000</label>
        <div class="widget">
          <div class="widget-heading">
              <h3 class="widget-title">Listado de Nómina</h3>
            </div>
<div class="widget-body">
                  <table id="example-1" cellspacing="0" width="100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                      <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Valor horas Laboradas</th>
                    <th>Horas Extras</th>
                    <th>Fecha</th>
                    <th>Pago + Horas extra</th>
                    <th>Retefuente</th>
                    <th>Total pago horas extra</th>
                    <th>Pago aplicando retefuente</th>
                  </tr>
                    </thead>
                    
                    <tbody> <!-- Recorre datos en la BD -->
                    
                     <?php foreach ($datos as $value): ?>
                  <tr>
                    <td><?=$value["CedulaEmpleado"]?></td>
                    <td><?=$value["Nombre"]?></td>
                    <td><?=$value["Apellido"]?></td>
                    <td><?=$value["DiasLaborados"]?></td>
                    <td><?=$value["HorasExtra"]?></td>
                    <td><?=$value["FechaPago"]?></td>
                    <td><?=$value["Pago"]?></td>
                    <td><?=$value["Retefuente"]?></td>
                    <td><?=$value["TotalExtra"]?></td>
<!--                     Si el pago es mayor a 4.000.000 entonces imprime retefuente, sino manda mensaje que no aplica -->
                    <?php if ($value["Pago"] >= 4000000){ ?>
                     <td><?=$value["RetefuenteDescont"]?></td>
                     <?php }else{ ?>
                     <td>No aplica</td>
                     <?php } ?>
                  </tr>

                <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                </div>