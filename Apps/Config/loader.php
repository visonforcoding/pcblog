<?php

$loader = new \Phalcon\Loader();


//Register some namespaces
$loader->registerNamespaces(
        array(
            "plugins" => APP_PATH . 'Apps/plugins',
            "Models" => APP_PATH . 'Apps/models',
            "Utils"=> APP_PATH.'Apps/utils',
            "library"=>APP_PATH.'Apps/library'
            // 'Snowair\Debugbar' => APP_PATH.'vendor/snowair/phalcon-debugbar/src',  
        )
);
$loader->register();
/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
        array(
            APP_PATH . $config->application->pluginsDir,
            APP_PATH . $config->application->libraryDir,
            APP_PATH . $config->application->formsDir,
        )
)->register();

