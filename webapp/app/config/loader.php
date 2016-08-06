<?php
$loader = new \Phalcon\Loader();
/**
 * We're a registering a set of directories taken from the configuration file
 */
$listdirector[] = $config->application->coreDir . "controllers/";
$listdirector[] = $config->application->coreDir . "models/";
$listdirector[] = $config->application->coreDir . "libs/";
foreach ($config->modules as $module) {
    $listdirector[] = $config->application->modulesDir . $module . "/";
    $listInitModuleFile[] = $config->application->modulesDir . $module . "/" . $module . ".php";
}
$loader->registerDirs($listdirector)->register();

// Active Sidebar
$activeSidebar = array();
foreach ($listInitModuleFile as $file) {
    if(file_exists($file)){
        $moduleInfo = require $file;
        if(!empty($moduleInfo['active_sidebar'])) $activeSidebar = array_merge($activeSidebar,$moduleInfo['active_sidebar']);
    }
}
