<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyClient implements ClientInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function wid() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function notes() : string
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface
    {
        return null;
    }
}
