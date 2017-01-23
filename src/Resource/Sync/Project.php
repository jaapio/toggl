<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\Project as BaseProject;
use Jaapio\Toggl\Resource\ProjectInterface;

class Project extends BaseProject
{
    public function refresh() : Project
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (ProjectInterface $project) {
            return $project->refresh();
        }));
    }
}
