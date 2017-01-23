<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\Resource\TimeEntry as BaseTimeEntry;

class TimeEntry extends BaseTimeEntry
{
    public function refresh() : TimeEntry
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
