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
        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li><a href="#">Ejemplo</a></li>
        <li class="active">Proyecto Base</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- /.content -->
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Título</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <p>starter app puedes arrancar cualquier desarrollo en CodeIgniter.</p>

            <p>Si quieres editar esta página la encontrarás en la ruta:</p>

            <pre><code>app/Views/layout.php</code></pre>

            <p>El controlador que carga esta página lo puedes encontrar en:</p>

            <pre><code>app/Controllers/Home.php</code></pre>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>


<?= $this->endSection() ?>