<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyWorkspace implements WorkspaceInterface, EmptyResourceInterface
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
     * @return bool
     */
    public function premium() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function admin() : bool
    {
        return null;
    }

    /**
     * @return float
     */
    public function defaultHourlyRate() : float
    {
        return null;
    }

    /**
     * @return string
     */
    public function defaultCurrency() : string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function onlyAdminsMayCreateProjects() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function onlyAdminsSeeBillableRates() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function rounding() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function roundingMinutes() : int
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
     * @return string
     */
    public function logoUrl() : string
    {
        return null;
    }

    public function users()
    {
        return [];
    }
}
