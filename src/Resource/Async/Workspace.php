<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\CommandBus\Command\Workspace\Clients;
use Jaapio\Toggl\CommandBus\Command\Workspace\Groups;
use Jaapio\Toggl\CommandBus\Command\Workspace\Tags;
use Jaapio\Toggl\CommandBus\Command\Workspace\Users;
use Jaapio\Toggl\Resource\Workspace as BaseWorkspace;
use Rx\ObservableInterface;
use function \ApiClients\Tools\Rx\unwrapObservableFromPromise;

class Workspace extends BaseWorkspace
{
    public function refresh() : Workspace
    {
        throw new \Exception('TODO: create refresh method!');
    }

    public function users() : ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(new Users($this->id())));
    }

    public function clients() : ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(new Clients($this->id())));
    }

    public function groups() : ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(new Groups($this->id())));
    }

    public function tags() : ObservableInterface
    {
        return unwrapObservableFromPromise($this->handleCommand(new Tags($this->id())));
    }
}
