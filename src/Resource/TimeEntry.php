<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeImmutable;
use DateTimeInterface;

/**
 * @EmptyResource("EmptyTimeEntry")
 */
abstract class TimeEntry extends AbstractResource implements TimeEntryInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $wid;

    /**
     * @var int
     */
    protected $pid;

    /**
     * @var int
     */
    protected $tid;

    /**
     * @var bool
     */
    protected $billable;

    /**
     * @var DateTimeInterface
     */
    protected $start;

    /**
     * @var DateTimeImmutable
     */
    protected $start_wrapped;

    /**
     * @var DateTimeInterface
     */
    protected $stop;

    /**
     * @var DateTimeImmutable
     */
    protected $stop_wrapped;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var string
     */
    protected $created_with;

    /**
     * @var array
     */
    protected $tags;

    /**
     * @var bool
     */
    protected $duronly;

    /**
     * @var DateTimeInterface
     */
    protected $at;

    /**
     * @var DateTimeImmutable
     */
    protected $at_wrapped;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function wid() : int
    {
        return $this->wid;
    }

    /**
     * @return int
     */
    public function pid() : int
    {
        return $this->pid;
    }

    /**
     * @return int
     */
    public function tid() : int
    {
        return $this->tid;
    }

    /**
     * @return bool
     */
    public function billable() : bool
    {
        return $this->billable;
    }

    /**
     * @return DateTimeInterface
     */
    public function start() : DateTimeInterface
    {
        if ($this->start_wrapped instanceof DateTimeImmutable) {
            return $this->start_wrapped;
        }
        $this->start_wrapped = new DateTimeImmutable($this->start);
        return $this->start_wrapped;
    }

    /**
     * @return DateTimeInterface
     */
    public function stop() : DateTimeInterface
    {
        if ($this->stop_wrapped instanceof DateTimeImmutable) {
            return $this->stop_wrapped;
        }
        $this->stop_wrapped = new DateTimeImmutable($this->stop);
        return $this->stop_wrapped;
    }

    /**
     * @return int
     */
    public function duration() : int
    {
        return $this->duration;
    }

    /**
     * @return string
     */
    public function createdWith() : string
    {
        return $this->created_with;
    }

    /**
     * @return array
     */
    public function tags() : array
    {
        return $this->tags;
    }

    /**
     * @return bool
     */
    public function duronly() : bool
    {
        return $this->duronly;
    }

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface
    {
        if ($this->at_wrapped instanceof DateTimeImmutable) {
            return $this->at_wrapped;
        }
        $this->at_wrapped = new DateTimeImmutable($this->at);
        return $this->at_wrapped;
    }
}
