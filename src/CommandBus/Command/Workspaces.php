<?php


namespace Jaapio\Toggl\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("Jaapio\Toggl\CommandBus\Handler\Workspaces")
 */
final class Workspaces
{

    /**
     * Workspaces constructor.
     */
    public function __construct()
    {
    }
}
