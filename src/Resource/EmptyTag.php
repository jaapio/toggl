<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyTag implements TagInterface, EmptyResourceInterface
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
}
