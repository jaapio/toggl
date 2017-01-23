<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyProject implements ProjectInterface, EmptyResourceInterface
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
     * @return int
     */
    public function cid() : int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function active() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function isPrivate() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function template() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function templateId() : int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function billable() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function autoEstimates() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function estimatedHours() : int
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

    /**
     * @return int
     */
    public function color() : int
    {
        return null;
    }

    /**
     * @return float
     */
    public function rate() : float
    {
        return null;
    }
}
