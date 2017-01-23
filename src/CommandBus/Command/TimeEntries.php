<?php declare(strict_types=1);

namespace Jaapio\Toggl\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("Jaapio\Toggl\CommandBus\Handler\TimeEntries")
 */
class TimeEntries
{
    /**
     * TimeEntries constructor.
     */
    public function __construct()
    {
    }
}
