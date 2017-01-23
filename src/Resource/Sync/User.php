<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\User as BaseUser;
use Jaapio\Toggl\Resource\UserInterface;

class User extends BaseUser
{
    public function refresh() : User
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (UserInterface $user) {
            return $user->refresh();
        }));
    }
}
