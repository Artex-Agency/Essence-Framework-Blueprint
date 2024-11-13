<?php

/** @var string CORE_PATH The framework core directory path. */
    define('CORE_PATH', (rtrim((__DIR__), '/') . '/'));




// STORAGE PATHS





// CONFIG PATHS
// ==========================================================================

/** @var string ROUTES_PATH The routes configuration path. */
defined('ROUTES_PATH') || define('ROUTES_PATH', CONFIG_PATH . 'routes' . '/');





class_alias('\Artex\Essence\Core', 'Core');