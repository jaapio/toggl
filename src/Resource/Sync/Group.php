<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\Group as BaseGroup;
use Jaapio\Toggl\Resource\GroupInterface;

class Group extends BaseGroup
{
    public function refresh() : Group
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (GroupInterface $group) {
            return $group->refresh();
        }));
    }
}
