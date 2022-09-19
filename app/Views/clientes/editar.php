<?= $this->extend('layout') ?>
<?= $this->section('title') ?>titulo <?= $this->endSection() ?>

<?= $this->section('contenido') ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Proyecto base
        <small>todo empieza aquí</small>
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('clientes'); ?>"><?= $titulo; ?></a></li>
        <li class="breadcrumb-item active">Agregar</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <!-- /.content -->
            <!-- Default box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $titulo; ?></h3>

                </div>

                <div class="box-body">
                    <form role="form" method="POST" action="<?php echo base_url('clientes/actualizar') ?>" autocomplete="off">
                        <input type="text" name="id" value="<?= $cliente['id']; ?>" class="hidden">
                        <?php csrf_field(); ?>
                        <div class="form-group">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input class="form-control" name="nombre" id="nombre" type="text" value="<?php echo $cliente['nombre']; ?>" tabindex="1" autofocus required />
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control" name="email" id="email" type="text" value="<?php echo $cliente['email']; ?>" tabindex="2" required />
                        </div>
                        <div class="form-group">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input class="form-control" name="telefono" id="telefono" value="<?php echo $cliente['telefono']; ?>" type="text" tabindex="3" required />
                        </div>
                        <a href="<?php echo base_url('clientes'); ?>" class="btn btn-primary">Regresar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>

                    </form>
                </div>


                <!-- /.box-body -->
                <div class="box-footer">

                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
</section>


<?= $this->endSection() ?>