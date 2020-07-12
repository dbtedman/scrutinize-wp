<?php
declare(strict_types=1);

namespace ScrutinizeWP\Gateways\Logger;

class TestLogger implements Logger
{
    /**
     * @var array|string[]
     */
    private array $auditTrail;

    public function __construct()
    {
        $this->auditTrail = [];
    }

    /**
     * @inheritDoc
     */
    public function audit(string $message): void
    {
        $this->auditTrail[] = $message;
    }

    /**
     * @return array
     */
    public function auditTrail(): array
    {
        return $this->auditTrail;
    }
}
