        <div class="widget">
          <div class="widget-heading">
              <h3 class="widget-title">Listado de Clientes</h3>
            </div>
<div class="widget-body">
                  <table id="example-1" cellspacing="0" width="100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                      <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha inicio</th>
                    <th>Teléfono</th>
                    <th>Edad</th>
                    <th>Plan</th>
                    <th>OPCIONES</th>
                  </tr>
                    </thead>
                    
                    <tbody>
                     <?php foreach ($datos as $value): ?>
                  <tr>
                    <td><?=$value["CedulaCliente"]?></td>
                    <td><?=$value["Nombre"]?></td>
                    <td><?=$value["Apellido"]?></td>
                    <td><?=$value["FechaIngreso"]?></td>
                    <td><?=$value["Celular"]?></td>
                    <td><?=$value["Edad"]?></td>
                    <td><?=$value["NombrePlan"]?></td>
                    <td>
                      <a href="<?php echo URL; ?>Clientes/edit/<?=$value["CedulaCliente"] ?>" type="button" class="btn btn-info" value="Editar">Editar</a>
                    </td>
                  </tr>

                <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                </div>