<?php
declare(strict_types=1);

namespace ScrutinizeWP\Gateways\Logger;

interface Logger
{
    /**
     * @param string $message
     */
    public function audit(string $message): void;
}
