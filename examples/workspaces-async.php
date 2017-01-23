<?php
use Jaapio\Toggl\AsyncClient;
use Jaapio\Toggl\Resource\ClientInterface;
use Jaapio\Toggl\Resource\WorkspaceInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use Rx\Observer\CallbackObserver;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
$loop = Factory::create();
$client = AsyncClient::create($loop, $argv[1]);unset($argv[1]);

$client->workspaces()->subscribe(new CallbackObserver(function (WorkspaceInterface $hook) {
    resource_pretty_print($hook);
}));

$loop->run();
