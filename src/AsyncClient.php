<?php

namespace Jaapio\Toggl;

use ApiClients\Foundation\ClientInterface;
use ApiClients\Foundation\Factory;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use Jaapio\Toggl\CommandBus\Command\Clients;
use Jaapio\Toggl\CommandBus\Command\TimeEntries;
use Jaapio\Toggl\CommandBus\Command\User;
use Jaapio\Toggl\CommandBus\Command\Workspace;
use Jaapio\Toggl\CommandBus\Command\Workspaces;
use React\EventLoop\LoopInterface;
use React\Promise\CancellablePromiseInterface;
use React\Promise\PromiseInterface;
use Rx\ObservableInterface;

class AsyncClient
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * Create a new AsyncClient based on the loop and other options pass
     *
     * @param LoopInterface $loop
     * @param string $token Instructions to fetch the token: https://toggl.com/app/profile
     * @param array $options
     * @return AsyncClient
     */
    public static function create(
        LoopInterface $loop,
        string $token = '',
        array $options = []
    ): self
    {
        $options = ApiSettings::getOptions($token, 'Async', $options);
        $client = Factory::create($loop, $options);
        return new self($client);
    }

    /**
     * Create an AsyncClient from a ApiClients\Foundation\ClientInterface.
     * Be sure to pass in a client with the options from ApiSettings and the Async namespace suffix.
     *
     * @param ClientInterface $client
     * @return AsyncClient
     */
    public static function createFromClient(ClientInterface $client): self
    {
        return new self($client);
    }

    /**
     * @param ClientInterface $client
     */
    private function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function timeEntries() : ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(new TimeEntries()));
    }

    public function clients() : ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(new Clients()));
    }

    public function workspaces() : ObservableInterface
    {
        return unwrapObservableFromPromise($this->client->handle(new Workspaces()));
    }

    public function workspace(int $id) : PromiseInterface
    {
        return $this->client->handle(new Workspace($id));
    }

    public function user() : PromiseInterface
    {
        return $this->client->handle(new User());
    }
}
