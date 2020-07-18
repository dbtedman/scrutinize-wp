<?php
declare(strict_types=1);

namespace ScrutinizeWP\Gateways\Logger;

class LoggerImplementation implements Logger
{
    /**
     * @inheritDoc
     */
    public function audit(string $message): void
    {
        /** @noinspection ForgottenDebugOutputInspection */
        error_log("[" . LogMessages::PLUGIN . "] " . $message);
    }
}
