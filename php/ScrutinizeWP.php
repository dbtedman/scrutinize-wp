<?php
declare(strict_types=1);

namespace ScrutinizeWP;

use ScrutinizeWP\Gateways\Logger\Logger;
use ScrutinizeWP\Gateways\Logger\LogMessages;
use ScrutinizeWP\Gateways\WordPress\WordPress;

class ScrutinizeWP
{
    /**
     * @var WordPress
     */
    private WordPress $wp;

    /**
     * @var Logger
     */
    private Logger $logger;

    /**
     * @param WordPress $wp
     * @param Logger $logger
     */
    public function __construct(WordPress $wp, Logger $logger)
    {
        $this->wp = $wp;
        $this->logger = $logger;
    }

    public function init(): void
    {
        $this->logger->audit(LogMessages::AUDIT_001);
    }
}
