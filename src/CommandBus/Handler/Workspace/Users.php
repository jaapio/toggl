<?php

namespace Jaapio\Toggl\CommandBus\Handler\Workspace;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use Jaapio\Toggl\CommandBus\Command\Workspace\Users as Command;
use Jaapio\Toggl\Resource\UserInterface;
use React\Promise\PromiseInterface;

final class Users
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
        return $this->fetchAndIterateService->handle(
            sprintf('workspaces/%d/users', $command->workspaceId()),
            '',
            UserInterface::HYDRATE_CLASS);
    }
}
