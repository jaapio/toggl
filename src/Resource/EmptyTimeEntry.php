<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyTimeEntry implements TimeEntryInterface, EmptyResourceInterface
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
    public function description() : string
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
    public function pid() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function tid() : int
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
     * @return DateTimeInterface
     */
    public function start() : DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function stop() : DateTimeInterface
    {
        return null;
    }

    /**
     * @return int
     */
    public function duration() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function createdWith() : string
    {
        return null;
    }

    /**
     * @return array
     */
    public function tags() : array
    {
        return null;
    }

    /**
     * @return bool
     */
    public function duronly() : bool
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
