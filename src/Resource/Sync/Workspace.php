<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\Workspace as BaseWorkspace;
use Jaapio\Toggl\Resource\WorkspaceInterface;

class Workspace extends BaseWorkspace
{
    public function refresh() : Workspace
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (WorkspaceInterface $workspace) {
            return $workspace->refresh();
        }));
    }
}
