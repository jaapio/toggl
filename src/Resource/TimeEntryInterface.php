<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface TimeEntryInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'TimeEntry';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return int
     */
    public function wid() : int;

    /**
     * @return int
     */
    public function pid() : int;

    /**
     * @return int
     */
    public function tid() : int;

    /**
     * @return bool
     */
    public function billable() : bool;

    /**
     * @return DateTimeInterface
     */
    public function start() : DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function stop() : DateTimeInterface;

    /**
     * @return int
     */
    public function duration() : int;

    /**
     * @return string
     */
    public function createdWith() : string;

    /**
     * @return array
     */
    public function tags() : array;

    /**
     * @return bool
     */
    public function duronly() : bool;

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface;
}
