<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?>Registro <?= $this->endSection() ?>

<?= $this->section('main') ?>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            Registro
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Registrar una cuenta nueva.</p>
            <?php if (session('error') !== null) : ?>
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?= session('error') ?>
                </div>
            <?php elseif (session('errors') !== null) : ?>
                <div class="alert alert-danger alert-dismissable" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php if (is_array(session('errors'))) : ?>
                        <?php foreach (session('errors') as $error) : ?>
                            <?= $error ?>
                            <br>
                        <?php endforeach ?>
                    <?php else : ?>
                        <?= session('errors') ?>
                    <?php endif ?>
                </div>
            <?php endif ?>
            <form action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" inputmode="text" autocomplete="username" placeholder="Nombre de usuario" value="<?= old('username') ?>" required />
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.password') ?>" required />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password_confirm" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">

                    <!-- /.col -->

                    <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>

                    <!-- /.col -->
                </div>
            </form>

            <p class="text-center">Ya tienes una cuenta <a href="<?= url_to('login') ?>"><?= lang('Auth.login') ?></a>
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>


<?= $this->endSection() ?>