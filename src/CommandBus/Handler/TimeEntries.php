<?php

namespace Jaapio\Toggl\CommandBus\Handler;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use Jaapio\Toggl\CommandBus\Command\TimeEntries as Command;
use Jaapio\Toggl\Resource\TimeEntryInterface;
use React\Promise\PromiseInterface;

final class TimeEntries
{
    /**
     * @var FetchAndIterateService
     */
    private $fetchAndIterateService;

    public function __construct(FetchAndIterateService $fetchAndIterateService)
    {
        $this->fetchAndIterateService = $fetchAndIterateService;
    }

    /**
     * Fetch TimeEntries and hydrate it
     *
     * @param Command $command
     * @return PromiseInterface
     */
    public function handle(Command $command): PromiseInterface
    {
        return $this->fetchAndIterateService->handle('time_entries', '',
            TimeEntryInterface::HYDRATE_CLASS);
    }
}
