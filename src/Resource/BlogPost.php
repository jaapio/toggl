<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyBlogPost")
 */
abstract class BlogPost extends AbstractResource implements BlogPostInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }
}
