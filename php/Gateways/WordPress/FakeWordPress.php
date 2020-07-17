<?php
declare(strict_types=1);

namespace ScrutinizeWP\Gateways\WordPress;

class FakeWordPress implements WordPress
{
    /**
     * @inheritDoc
     */
    public function render(string $content): void
    {
        // TODO: Implement render() method.
    }

    /**
     * @inheritDoc
     */
    public function action(string $name, callable $action, int $priority = 10, $arguments = 1): void
    {
        // TODO: Implement action() method.
    }

    /**
     * @inheritDoc
     */
    public function filter(string $name, callable $action, int $priority = 10, $arguments = 1): void
    {
        // TODO: Implement filter() method.
    }
}
