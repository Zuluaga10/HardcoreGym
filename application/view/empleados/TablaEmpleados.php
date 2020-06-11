        <div class="widget">
          <div class="widget-heading">
              <h3 class="widget-title">Listado de Empleados</h3>
            </div>
<div class="widget-body">
                  <table id="example-1" cellspacing="0" width="100%" class="table table-hover dt-responsive nowrap">
                    <thead>
                      <tr>
                    <th>Cedula</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Teléfono</th>
                    <th>OPCIONES</th>
                  </tr>
                    </thead>
                    
                    <tbody> <!-- recorre un bloque de código para cada elemento en una matriz -->
                     <?php foreach ($datos as $value): ?> 
                  <tr>
                    <td><?=$value["CedulaEmpleado"]?></td>
                    <td><?=$value["Nombre"]?></td>
                    <td><?=$value["Apellido"]?></td>
                    <td><?=$value["Edad"]?></td>
                    <td><?=$value["Celular"]?></td>
                    <td> <!-- ruta -->
                      <a href="<?php echo URL; ?>Empleados/edit/<?=$value["CedulaEmpleado"] ?>" type="button" class="btn btn-info" value="Editar">Editar</a>
                    </td>
                  </tr>

                <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
                </div>