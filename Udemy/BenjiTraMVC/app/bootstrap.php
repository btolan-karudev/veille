<?php 

require_once 'config/config.php';

// charge les librairies
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

//autoload librairies
spl_autoload_register(function($className) {
    require_once 'libraries/'. $className .'.php';
});