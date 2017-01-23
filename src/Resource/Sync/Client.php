<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\Client as BaseClient;
use Jaapio\Toggl\Resource\ClientInterface;

class Client extends BaseClient
{
    public function refresh() : Client
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (ClientInterface $client) {
            return $client->refresh();
        }));
    }
}
