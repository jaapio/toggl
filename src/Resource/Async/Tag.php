<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\Resource\Tag as BaseTag;

class Tag extends BaseTag
{
    public function refresh() : Tag
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
