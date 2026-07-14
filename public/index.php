
<?php

session_start();

define('ROOT', dirname(__DIR__));

require_once ROOT .'/core/app.php';
require_once ROOT .'/core/controller.php';
require_once ROOT .'/core/models.php';
require_once ROOT .'/core/request.php';
require_once ROOT .'/core/response.php';
require_once ROOT .'/core/router.php';
require_once ROOT .'/core/view.php';
require_once ROOT .'/core/sessions.php';

require_once ROOT .'/config/routes.php';

$app = new App();
$app -> run();
?>