<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeImmutable;
use DateTimeInterface;

/**
 * @EmptyResource("EmptyGroup")
 */
abstract class Group extends AbstractResource implements GroupInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $wid;

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
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function wid() : int
    {
        return $this->wid;
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
