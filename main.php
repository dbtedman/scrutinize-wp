<?php
declare(strict_types=1);

/**-----------------------------------------------------------------------------
 *
 * Author URI:      https://danieltedman.com
 * Author:          Daniel Tedman
 * Description:     Scrutinize your WordPress deployment to ensure it remains secure, accessible, and performant.
 * Plugin Name:     WordPress Actions Audit
 * Plugin URI:      https://github.com/dbtedman/scrutinize-wp
 * Text Domain:     scrutinize-wp
 * Version:         0.1.0
 *
 *----------------------------------------------------------------------------*/

if (is_readable(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
}
