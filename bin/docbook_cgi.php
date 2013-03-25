<?php
/**
 * PHP/Apache/Markdown DocBook
 * @package     DocBook
 * @license     GPL-v3
 * @link        https://github.com/atelierspierrot/docbook
 */

// Show errors at least initially
@ini_set('display_errors','1'); @error_reporting(E_ALL ^ E_NOTICE);

// -----------------------------------
// Get Composer autoloader
// -----------------------------------

$composerAutoLoader = __DIR__.'/../src/vendor/autoload.php';
if (@file_exists($composerAutoLoader)) {
    require_once $composerAutoLoader;
} else {
    die(PHP_EOL."You need to run Composer on the project to build dependencies and auto-loading"
        ." (see: http://getcomposer.org/doc/00-intro.md#using-composer)!".PHP_EOL.PHP_EOL);
}

// -----------------------------------
// PROCESS
// -----------------------------------

// the application 
\DocBook\FrontController::getInstance()->distribute();

// Endfile
