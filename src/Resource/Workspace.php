<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeImmutable;
use DateTimeInterface;

/**
 * @EmptyResource("EmptyWorkspace")
 */
abstract class Workspace extends AbstractResource implements WorkspaceInterface
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
     * @var bool
     */
    protected $premium;

    /**
     * @var bool
     */
    protected $admin;

    /**
     * @var float
     */
    protected $default_hourly_rate;

    /**
     * @var string
     */
    protected $default_currency;

    /**
     * @var bool
     */
    protected $only_admins_may_create_projects;

    /**
     * @var bool
     */
    protected $only_admins_see_billable_rates;

    /**
     * @var int
     */
    protected $rounding;

    /**
     * @var int
     */
    protected $rounding_minutes;

    /**
     * @var DateTimeInterface
     */
    protected $at;

    /**
     * @var DateTimeImmutable
     */
    protected $at_wrapped;

    /**
     * @var string
     */
    protected $logo_url;

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
     * @return bool
     */
    public function premium() : bool
    {
        return $this->premium;
    }

    /**
     * @return bool
     */
    public function admin() : bool
    {
        return $this->admin;
    }

    /**
     * @return float
     */
    public function defaultHourlyRate() : float
    {
        return $this->default_hourly_rate;
    }

    /**
     * @return string
     */
    public function defaultCurrency() : string
    {
        return $this->default_currency;
    }

    /**
     * @return bool
     */
    public function onlyAdminsMayCreateProjects() : bool
    {
        return $this->only_admins_may_create_projects;
    }

    /**
     * @return bool
     */
    public function onlyAdminsSeeBillableRates() : bool
    {
        return $this->only_admins_see_billable_rates;
    }

    /**
     * @return int
     */
    public function rounding() : int
    {
        return $this->rounding;
    }

    /**
     * @return int
     */
    public function roundingMinutes() : int
    {
        return $this->rounding_minutes;
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
     * @return string
     */
    public function logoUrl() : string
    {
        return $this->logo_url;
    }
}
