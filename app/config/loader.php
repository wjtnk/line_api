<?php

$loader = new \Phalcon\Loader();
/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->pluginsDir,
        $config->application->modelsDir,
        $config->application->formsDir,
        $config->application->cacheDir
    ]
)->register();
