<?php

namespace Jaapio\Toggl\CommandBus\Handler;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use Jaapio\Toggl\CommandBus\Command\Clients as Command;
use Jaapio\Toggl\Resource\ClientInterface;
use Jaapio\Toggl\Resource\TimeEntryInterface;
use React\Promise\PromiseInterface;

final class Clients
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
        return $this->fetchAndIterateService->handle('clients', '',
            ClientInterface::HYDRATE_CLASS);
    }
}
