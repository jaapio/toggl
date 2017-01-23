<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface ClientInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Client';

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
     * @return string
     */
    public function notes() : string;

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface;
}
