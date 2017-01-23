<?php
use Jaapio\Toggl\AsyncClient;
use Jaapio\Toggl\Resource\TimeEntryInterface;
use Jaapio\Toggl\Resource\UserInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
$loop = Factory::create();
$client = AsyncClient::create($loop, $argv[1]);unset($argv[1]);

$client->user()->then(function (UserInterface $timeEntry) {
    resource_pretty_print($timeEntry);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
