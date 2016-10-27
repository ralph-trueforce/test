<?php

include CONFIG_PATH . "config.php";

if (!function_exists('classAutoLoader')) {
    function classAutoLoader($class) {
        $directories = array(
            APP_DIR . '/classes/models/',
            APP_DIR . '/classes/',
            APP_DIR . '/include/api/',
            APP_DIR . '/include/',
            APP_DIR . '/template/',
            APP_DIR . '/view/'
        );
        foreach ($directories as $directory) {
            $class = strtolower($class);
            $classFile = $directory . $class . '.php';

            if (is_file($classFile) && !class_exists($class)) {
                require_once $classFile;
            }
       }
    }
}
spl_autoload_register('classAutoLoader');


$request  = new Controler();
$view     = new View();
$template = new Template();

$data = $request->parse();
$app = new App($temlate, $view);
$app->run($data);


