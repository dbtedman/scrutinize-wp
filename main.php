<?php
declare(strict_types=1);

/**-----------------------------------------------------------------------------
 *
 * Author URI:      https://danieltedman.com
 * Author:          Daniel Tedman
 * Description:     Scrutinize your WordPress deployment to ensure it remains secure, accessible, and performant.
 * Plugin Name:     Scrutinize WP
 * Plugin URI:      https://github.com/dbtedman/scrutinize-wp
 * Text Domain:     scrutinize-wp
 * Version:         0.1.0
 *
 *----------------------------------------------------------------------------*/

use ScrutinizeWP\Gateways\Logger\LoggerImplementation;
use ScrutinizeWP\Gateways\WordPress\WordPressImplementation;
use ScrutinizeWP\ScrutinizeWP;

// Load Composer dependencies along with out plugin source
if (is_readable(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}

$wp = new WordPressImplementation();
$logger = new LoggerImplementation();
$plugin = new ScrutinizeWP($wp, $logger);
$plugin->init();
