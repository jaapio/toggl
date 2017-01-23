<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\Tag as BaseTag;
use Jaapio\Toggl\Resource\TagInterface;

class Tag extends BaseTag
{
    public function refresh() : Tag
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (TagInterface $tag) {
            return $tag->refresh();
        }));
    }
}
