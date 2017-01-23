<?php declare(strict_types=1);

namespace Jaapio\Toggl\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("Jaapio\Toggl\CommandBus\Handler\Workspace")
 */
final class Workspace
{
    /**
     * @var int
     */
    private $id;

    /**
     * Workspace constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function id() : int
    {
        return $this->id;
    }
}
