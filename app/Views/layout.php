<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>CI4 Starter Project</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="<?= base_url('assets/css/nucleo-icons.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/nucleo-svg.css'); ?>" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="<?= base_url('font-awesome.min.css'); ?>" crossorigin="anonymous"></script>

    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url('assets/css/argon-dashboard.css'); ?>" rel="stylesheet" />

    <!-- CSS only -->
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body class="g-sidenav-show bg-gray-100">

    <?= $this->renderSection('content'); ?>
    <h1>Hello, world!</h1>




    <!-- JavaScript Bundle with Popper -->
    <!-- Core -->
    <script src="<?= base_url('/assets/js/core/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/core/bootstrap.min.js'); ?>"></script>

    <!-- Theme JS -->
    <script src="<?= base_url('assets/js/argon-dashboard.min.js'); ?>"></script>




</body>

</html>