<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <?= lang('Auth.login') ?>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <?php if (session('error') !== null) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?= session('error') ?>
                </div>

            <?php elseif (session('errors') !== null) : ?>
                <div class="alert alert-danger alert-dismissible" role="alert">
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

            <?php if (session('message') !== null) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?= session('message') ?>
                </div>

            <?php endif ?>

            <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" inputmode="email" autocomplete="email" placeholder="Correo electrónico" value="<?= old('email') ?>" required />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" inputmode="text" autocomplete="current-password" placeholder="<?= lang('Auth.password') ?>" required />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <?php if (setting('Auth.sessionConfig')['allowRemembering']) : ?>
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>
                                    <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked<?php endif ?>>
                                    Recordar mis datos
                                </label>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.login') ?></button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->

            <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                <p class="text-center">Olvidaste tu password? <a href="<?= url_to('magic-link') ?>">Enviarme un enlace de login</a></p>
            <?php endif ?>

            <?php if (setting('Auth.allowRegistration')) : ?>
                <p class="text-center">No estas registrado? <a href="<?= url_to('register') ?>"> Registrar</a></p>
            <?php endif ?>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    <!-- iCheck -->
    <script src="<?= base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>>
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