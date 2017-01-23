<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\TimeEntry as BaseTimeEntry;
use Jaapio\Toggl\Resource\TimeEntryInterface;

class TimeEntry extends BaseTimeEntry
{
    public function refresh() : TimeEntry
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (TimeEntryInterface $timeEntry) {
            return $timeEntry->refresh();
        }));
    }
}
