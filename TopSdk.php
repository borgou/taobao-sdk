<?php

if (!defined("TOP_SDK_WORK_DIR")) {
    $directory = dirname(__DIR__ . "/../../var/tmp");
    define("TOP_SDK_WORK_DIR", $directory);
}

if (!defined("TOP_SDK_DEV_MODE")) {
    define("TOP_SDK_DEV_MODE", true);
}

if (!defined("TOP_AUTOLOADER_PATH")) {
    define("TOP_AUTOLOADER_PATH", dirname(__FILE__));
}

require_once 'Autoloader.php';
