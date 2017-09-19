<?php

/**
 * PHPUnit bootstrap file.
 *
 * Set include path and initialize autoloader.
 *
 * PHP Version 5.4
 *
 * @category   Loaders
 * @package    Tests
 * @subpackage Tests
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @copyright  2011-2017, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

$base = __DIR__ . '/..';

set_include_path(
    $base . '/src:' .
    $base . '/config:' .
    $base . '/system:' .
    $base . '/tests:' .
    $base . '/tests/statics:' .
    get_include_path()
);

if (file_exists(__DIR__ . '/../vendor/autoload.php') == TRUE)
{
    // Load composer autoloader.
    require_once __DIR__ . '/../vendor/autoload.php';
}
else
{
    // Load and setup class file autloader
    require_once 'Lunr/Core/Autoloader.php';

    $autoloader = new Lunr\Core\Autoloader();
    $autoloader->register();

    // Include libraries
    include_once 'Psr-Log-1.0.2.php';
}

define('REFLECTION_BUG_72194', (PHP_MAJOR_VERSION > 5));

if (defined('TEST_STATICS') === FALSE)
{
    define('TEST_STATICS', __DIR__ . '/statics');
}

?>
