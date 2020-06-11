        <div class="widget">
          <div class="widget-heading">
              <h3 class="widget-title">Listado de Egresos</h3>
            </div>
<div class="widget-body">
                  <table id="example-1" cellspacing="0" width="100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                      <tr>
                    <th>Valor</th>
                    <th>Fecha</th>
                    <th>Tipo de Gasto</th>
                  </tr>
                    </thead>
                    
                    <tbody>
                     <?php foreach ($datos as $value): ?>
                  <tr>
                    <td><?=$value["Precio"]?></td>
                    <td><?=$value["Fecha"]?></td>
                    <td><?=$value["Nombre"]?></td>
                <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                </div>