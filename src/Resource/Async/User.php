<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\Resource\User as BaseUser;

class User extends BaseUser
{
    public function refresh() : User
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
