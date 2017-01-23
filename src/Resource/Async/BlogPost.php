<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\Resource\BlogPost as BaseBlogPost;

class BlogPost extends BaseBlogPost
{
    public function refresh() : BlogPost
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
