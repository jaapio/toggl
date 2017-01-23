<?php declare(strict_types=1);

namespace Jaapio\Toggl\CommandBus\Handler;

use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\Services\Client\FetchAndIterateService;
use Jaapio\Toggl\CommandBus\Command\Workspace as Command;
use Jaapio\Toggl\Resource\WorkspaceInterface;
use React\Promise\PromiseInterface;

final class Workspace
{
    /**
     * @var FetchAndIterateService
     */
    private $fetchAndHydrateService;

    public function __construct(FetchAndHydrateService $fetchAndHydrateService)
    {
        $this->fetchAndHydrateService = $fetchAndHydrateService;
    }

    /**
     * Fetch the given repository and hydrate it
     *
     * @param Command $command
     * @return PromiseInterface
     */
    public function handle(Command $command): PromiseInterface
    {
        return $this->fetchAndHydrateService->handle(
            sprintf('workspaces/%d', $command->id()),
            'data',
            WorkspaceInterface::HYDRATE_CLASS);
    }
}
