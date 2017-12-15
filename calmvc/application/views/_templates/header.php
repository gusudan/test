<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">


        <title>J</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo URL; ?>css/bootstrap.min.css" rel="stylesheet">



        <!-- Custom styles for this template -->
        <link href="<?php echo URL; ?>css/custom.css" rel="stylesheet">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>        
        <script src="<?php echo URL; ?>js/bootstrap.min.js"></script>


    </head>

    <body>

        <!-- Fixed navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Calmvc</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php if ($_SESSION['isloggedin'] == TRUE) : ?>
                        <li class="active"><a href="<?php echo URL; ?>">Home</a></li> 
                        <li class="active"><a href="<?php echo URL; ?>calendar">Calendar</a></li> 
                        <li class=""><a href="<?php echo URL; ?>adauga_eveniment">Adauga Eveniment</a></li>
                        <?php endif; ?>
                        <!--                        <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li class="dropdown-header">Nav header</li>
                                                        <li><a href="#">Separated link</a></li>
                                                        <li><a href="#">One more separated link</a></li>
                                                    </ul>
                                                </li>-->

                    </ul>
                    <ul class="nav navbar-nav navbar-right">




                        <?php if (isset($_SESSION['email'])) : ?>


                            <li>
                                <div class="logout">Welcome <strong><?php echo $_SESSION['email'] ?></strong> <a class="btn btn-default" href="<?php echo URL; ?>users/logout">LOGOUT</a>
                                </div>
                            </li>


                        <?php else : ?>
                            <li class=""><a href="<?php echo URL; ?>users">Register</a></li>
                            <li>
                                <form id="signin" class="navbar-form navbar-right loginnav" role="form" action="<?php echo URL; ?>users/login" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Email Address">                                        
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="Password">                                        
                                    </div>

                                    <button type="submit" class="btn btn-default" name="login">Login</button>
                                </form>
                            </li>
                        <?php endif; ?>


                    </ul>
                </div><!--/.nav-collapse -->

            </div>
        </nav>



        <div class="container">

            <?php if (isset($_SESSION['msg'])): ?>
                <div class="alert alert-info">
                    <?php
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                    ?>
                </div>
            <?php endif; ?>
                        