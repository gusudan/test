<!doctype html>
<html>

    <head>
        <title>DASH</title>
        <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css" />

        <script src="<?= base_url() ?>public/js/jquery.js"></script>
        <script src="<?= base_url() ?>public/js/bootstrap.js"></script>
        <script src="<?= base_url() ?>public/js/dash/dashboard/result.js"></script>
        <script src="<?= base_url() ?>public/js/dash/dashboard/event.js"></script>

        <script src="<?= base_url() ?>public/js/dash/dashboard/template.js"></script>

        <script src="<?= base_url() ?>public/js/dash/dashboard.js"></script>

        <script>
            $(function () {
                //init dashboard application
                var dashboard = new Dashboard();
            });
        </script>

    </head>

    <body>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">DASH</a>
                <ul class="nav navbar-nav">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="<?= site_url('dashboard/logout') ?>">Logout</a></li>
                    <li><a href="#">Dashboard</a></li>
                </ul>
            </div>
        </nav>

        <div class="wrapper">
            
            <div id="error" class="alert alert-danger hides"></div>
            <div id="success" class="alert alert-success hides"></div>