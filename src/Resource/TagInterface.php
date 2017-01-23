<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface TagInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Tag';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return int
     */
    public function wid() : int;
}
