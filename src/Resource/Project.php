<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeImmutable;
use DateTimeInterface;

/**
 * @EmptyResource("EmptyProject")
 */
abstract class Project extends AbstractResource implements ProjectInterface
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
     * @var int
     */
    protected $cid;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var bool
     */
    protected $is_private;

    /**
     * @var bool
     */
    protected $template;

    /**
     * @var int
     */
    protected $template_id;

    /**
     * @var bool
     */
    protected $billable;

    /**
     * @var bool
     */
    protected $auto_estimates;

    /**
     * @var int
     */
    protected $estimated_hours;

    /**
     * @var DateTimeInterface
     */
    protected $at;

    /**
     * @var DateTimeImmutable
     */
    protected $at_wrapped;

    /**
     * @var int
     */
    protected $color;

    /**
     * @var float
     */
    protected $rate;

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
     * @return int
     */
    public function cid() : int
    {
        return $this->cid;
    }

    /**
     * @return bool
     */
    public function active() : bool
    {
        return $this->active;
    }

    /**
     * @return bool
     */
    public function isPrivate() : bool
    {
        return $this->is_private;
    }

    /**
     * @return bool
     */
    public function template() : bool
    {
        return $this->template;
    }

    /**
     * @return int
     */
    public function templateId() : int
    {
        return $this->template_id;
    }

    /**
     * @return bool
     */
    public function billable() : bool
    {
        return $this->billable;
    }

    /**
     * @return bool
     */
    public function autoEstimates() : bool
    {
        return $this->auto_estimates;
    }

    /**
     * @return int
     */
    public function estimatedHours() : int
    {
        return $this->estimated_hours;
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

    /**
     * @return int
     */
    public function color() : int
    {
        return $this->color;
    }

    /**
     * @return float
     */
    public function rate() : float
    {
        return $this->rate;
    }
}
