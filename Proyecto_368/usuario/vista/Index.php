<?php
    require_once("../modelo/usuario.php");
    require_once("../../Templete/plantillaperfil.php");
    $modeloUsuario = new Usuario();
?>
<h2>Listado de Usuarios</h2>
                                           
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Email</th>
      <th scope="col">Accion</th>

    </tr>
  </thead>
  <tbody>
      <?php
      $verUsuarios= $modeloUsuario->getUsuarios();
      //es un para en la programacion/tiene un arreglo"[]=>"
        foreach ($verUsuarios as $listarUsuario) {
      ?>
            <tr>
            <th scope="row"><?= $listarUsuario['id'];?></th>
            <td><?php echo $listarUsuario['nombre']; ?></td>
            <td>Otto</td>
            <td>@mdo</td>
            
            <td>
              <a href="update.php?=id<?= $listarUsuario['id'];?>"class="btn btn-warning">Editar                
              </a>
              <a href="delete.php=id<?= $listarUsuario['id'];?>"class="btn btn-danger">Eliminar</a>
            </td>
            <!-- isertar y listar -->
          </tr>
        <?php
        }

        ?>

  </tbody>
</table>
<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombres</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
    </tr>
  </thead>
  <tbody> -->
    