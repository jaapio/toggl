<?php declare(strict_types=1);

namespace Jaapio\Toggl\CommandBus\Handler;

use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use Jaapio\Toggl\CommandBus\Command\User as Command;
use Jaapio\Toggl\Resource\UserInterface;
use React\Promise\PromiseInterface;

final class User
{
    /**
     * @var FetchAndHydrateService
     */
    private $service;
    /**
     * @param FetchAndHydrateService $service
     */
    public function __construct(FetchAndHydrateService $service)
    {
        $this->service = $service;
    }
    /**
     * Fetch the given repository and hydrate it
     *
     * @param UserCommand $command
     * @return PromiseInterface
     */
    public function handle(Command $command): PromiseInterface
    {
        return $this->service->handle('me', 'data', UserInterface::HYDRATE_CLASS);
    }
}
