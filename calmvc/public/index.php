<?php

define('APP', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'application' . DIRECTORY_SEPARATOR);

require APP . 'config/config.php';

require APP . 'core/app.php';
require APP . 'core/controller.php';
require APP . 'core/helper.php';

$app = new App();