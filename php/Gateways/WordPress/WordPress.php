<?php
declare(strict_types=1);

namespace ScrutinizeWP\Gateways\WordPress;

interface WordPress
{
    /**
     * Method used to avoid calling echo directly which will better allow for
     * evaluating the data outputted during testing.
     *
     * @param string $content
     */
    public function render(string $content): void;

    /**
     * Establish an action hook with WordPress to do something at a time
     * controlled by WordPress.
     *
     * @param string $name
     * @param callable $action
     * @param int $priority
     * @param int $arguments
     */
    public function action(string $name, callable $action, int $priority = 10, $arguments = 1): void;

    /**
     * Establish a filter hook with WordPress, used to modify an existing data
     * flow.
     *
     * @param string $name
     * @param callable $action
     * @param int $priority
     * @param int $arguments
     */
    public function filter(string $name, callable $action, int $priority = 10, $arguments = 1): void;
}
