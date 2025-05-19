<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Editoriales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <?php include 'Views/cabecera.php'; ?>
</head>
<body>
    <?php include 'Views/menu.php'; ?>
    <div class="container mt-4">
        <div class="row">
            <h3>Lista de Editoriales</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="<?=PATH.'/Editoriales/create'?>">Nuevo Editorial</a>
                <br><br>
                <table class="table table-striped table-bordered" id="tabla">
                    <thead class="table-dark">
                        <tr>
                            <th>Código del Editorial</th>
                            <th>Nombre del Editorial</th>
                            <th>Contacto</th>
                            <th>Teléfono</th>
                            <th>Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($editoriales as $editorial): 
                        ?>

                            <tr>
                                <td><?= $editorial['codigo_editorial'] ?></td>
                                <td><?= $editorial['nombre_editorial'] ?></td>
                                <td><?= $editorial['contacto'] ?></td>
                                <td><?= $editorial['telefono'] ?></td>
                                
                                <td>
                                    <a href="<?= 'http://localhost:81/PHP_base/Editoriales/delete/'.$editorial['codigo_editorial']?>" class="btn btn-danger">Eliminar</a>
                                    <button type="button" class="btn btn-Dark" data-bs-toggle="modal" data-bs-target="#editar_<?= $editorial['codigo_editorial'] ?>">
                                        Editar
                                    </button>
                                </td>
                                
                            </tr>

                            <!-- Modal -->
<div class="modal fade" id="editar_<?= $editorial['codigo_editorial'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= $editorial['codigo_editorial'] ?>
        <form method="POST" action="<?= PATH.'/Editoriales/update/'.$editorial['codigo_editorial'] ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre del Editorial</label>
    <input type="text" class="form-control" name="nombre_editorial" id="NombreEditorial" value="<?= $editorial['nombre_editorial'] ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contacto</label>
    <input type="text" class="form-control" name="contacto" id="Contacto" value="<?= $editorial['contacto'] ?>">
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Teléfono</label>
    <input type="text" class="form-control" name="telefono" id="Telefono" value="<?= $editorial['telefono'] ?>">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-dark">Guardar Cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>