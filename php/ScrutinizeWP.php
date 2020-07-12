<?php
declare(strict_types=1);

namespace ScrutinizeWP;

use ScrutinizeWP\Gateways\WordPress\WordPress;
use ScrutinizeWP\Gateways\WordPress\WordPressActual;

class ScrutinizeWP
{
    /**
     * @var WordPress
     */
    private WordPress $wp;

    public function __construct()
    {
        $this->wp = new WordPressActual();
    }
}
