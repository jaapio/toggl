<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface ProjectInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Project';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return int
     */
    public function wid() : int;

    /**
     * @return int
     */
    public function cid() : int;

    /**
     * @return bool
     */
    public function active() : bool;

    /**
     * @return bool
     */
    public function isPrivate() : bool;

    /**
     * @return bool
     */
    public function template() : bool;

    /**
     * @return int
     */
    public function templateId() : int;

    /**
     * @return bool
     */
    public function billable() : bool;

    /**
     * @return bool
     */
    public function autoEstimates() : bool;

    /**
     * @return int
     */
    public function estimatedHours() : int;

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface;

    /**
     * @return int
     */
    public function color() : int;

    /**
     * @return float
     */
    public function rate() : float;
}
