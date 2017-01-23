<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Sync;

use ApiClients\Foundation\Hydrator\CommandBus\Command\BuildAsyncFromSyncCommand;
use Jaapio\Toggl\Resource\BlogPost as BaseBlogPost;
use Jaapio\Toggl\Resource\BlogPostInterface;

class BlogPost extends BaseBlogPost
{
    public function refresh() : BlogPost
    {
        return $this->wait($this->handleCommand(new BuildAsyncFromSyncCommand(self::HYDRATE_CLASS, $this))->then(function (BlogPostInterface $blogPost) {
            return $blogPost->refresh();
        }));
    }
}
