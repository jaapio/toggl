<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\Resource\Client as BaseClient;

class Client extends BaseClient
{
    public function refresh() : Client
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
