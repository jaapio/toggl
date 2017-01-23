<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\Resource\Group as BaseGroup;

class Group extends BaseGroup
{
    public function refresh() : Group
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
