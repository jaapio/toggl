<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface BlogPostInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'BlogPost';

    /**
     * @return int
     */
    public function id() : int;
}
