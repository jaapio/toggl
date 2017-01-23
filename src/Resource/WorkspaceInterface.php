<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface WorkspaceInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Workspace';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return bool
     */
    public function premium() : bool;

    /**
     * @return bool
     */
    public function admin() : bool;

    /**
     * @return float
     */
    public function defaultHourlyRate() : float;

    /**
     * @return string
     */
    public function defaultCurrency() : string;

    /**
     * @return bool
     */
    public function onlyAdminsMayCreateProjects() : bool;

    /**
     * @return bool
     */
    public function onlyAdminsSeeBillableRates() : bool;

    /**
     * @return int
     */
    public function rounding() : int;

    /**
     * @return int
     */
    public function roundingMinutes() : int;

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface;

    /**
     * @return string
     */
    public function logoUrl() : string;
}
