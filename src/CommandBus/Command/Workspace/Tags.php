<?php

namespace Jaapio\Toggl\CommandBus\Command\Workspace;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("Jaapio\Toggl\CommandBus\Handler\Workspace\Tags")
 */
final class Tags
{
    /**
     * @var int
     */
    private $workspaceId;

    /**
     * Users constructor.
     *
     * @param int $workspaceId
     */
    public function __construct(int $workspaceId)
    {
        $this->workspaceId = $workspaceId;
    }

    public function workspaceId() : int
    {
        return $this->workspaceId;
    }
}
