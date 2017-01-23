<?php declare(strict_types=1);

namespace Jaapio\Toggl\CommandBus\Handler;

use ApiClients\Tools\Services\Client\FetchAndIterateService;
use Jaapio\Toggl\CommandBus\Command\Workspaces as Command;
use Jaapio\Toggl\Resource\WorkspaceInterface;
use React\Promise\PromiseInterface;

final class Workspaces
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
     * Fetch the given repository and hydrate it
     *
     * @param Command $command
     * @return PromiseInterface
     */
    public function handle(Command $command): PromiseInterface
    {
        return $this->fetchAndIterateService->handle('workspaces', '',
            WorkspaceInterface::HYDRATE_CLASS);
    }
}
