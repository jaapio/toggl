<?php
use Jaapio\Toggl\AsyncClient;
use Jaapio\Toggl\Resource\TimeEntryInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use Rx\Observer\CallbackObserver;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
$loop = Factory::create();
$client = AsyncClient::create($loop, $argv[1]);unset($argv[1]);

$client->timeEntries()->subscribe(new CallbackObserver(function (TimeEntryInterface $hook) {
    resource_pretty_print($hook);
}));

$loop->run();
