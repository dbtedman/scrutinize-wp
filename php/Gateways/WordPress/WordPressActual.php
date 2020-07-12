<?php
declare(strict_types=1);

namespace ScrutinizeWP\Gateways\WordPress;

class WordPressActual implements WordPress
{
    /**
     * @inheritDoc
     */
    public function render(string $content): void
    {
        echo $content;
    }

    /**
     * @inheritDoc
     */
    public function action(string $name, callable $action, int $priority = 10, $arguments = 1): void
    {
        add_action($name, $action, $priority, $arguments);
    }

    /**
     * @inheritDoc
     */
    public function filter(string $name, callable $action, int $priority = 10, $arguments = 1): void
    {
        add_filter($name, $action, $priority, $arguments);
    }
}
