<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface GroupInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Group';

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

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface;
}
