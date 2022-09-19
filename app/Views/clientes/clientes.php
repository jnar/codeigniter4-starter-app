<?= $this->extend('layout') ?>
<?= $this->section('titulo') ?><?= $titulo; ?> <?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <?= $titulo ?>
    <small>todo empieza aquí</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
    <li class="active"><?= $titulo; ?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- /.content -->
  <!-- Default box -->
  <div class="box">
    <div class="box-header">
      <h3 class="box-title"><?= $titulo; ?></h3>
      <div class="box-tools">
        <a href="<?= base_url('clientes/nuevo'); ?>" class="btn btn-primary">Agregar</a>
      </div>

      <div class=" box-body">
        <table class="table table-bordered">

          <head>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Opciones</th>
          </head>
          <tbody>
            <?php
            foreach ($clientes as $cliente) {
            ?>
              <tr>
                <td><?= $cliente['id']; ?></td>
                <td><?= $cliente['nombre']; ?></td>
                <td><?= $cliente['email']; ?></td>
                <td><?= $cliente['telefono']; ?> </td>
                <td class="table-action">
                  <a href="<?php echo base_url('clientes/editar/' . $cliente['id']); ?>" class="action-icon" title="Modificar registro"> <i class="fa fa-pencil"></i></a>
                  <a href="<?= base_url('clientes/eliminar/' . $cliente['id']); ?> ?>" title="Eliminar Registro" onclick="return confirmar();" class="action-icon "><i class="fa fa-trash" style=" color: red;"></i></a>
                </td>

              </tr>

            <?php }
            ?>
          </tbody>
        </table>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

</section>

<script>
  function confirmar() {
    var respuesta = confirm("Está seguro que desea elminar el registro?");
    if (respuesta == true) {
      return true;
    } else {
      return false;
    }
  }
</script>
<?= $this->endSection() ?>