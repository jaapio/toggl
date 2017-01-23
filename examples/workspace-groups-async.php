<?php
use Jaapio\Toggl\AsyncClient;
use Jaapio\Toggl\Resource\Async\Workspace;
use Jaapio\Toggl\Resource\GroupInterface;
use Jaapio\Toggl\Resource\UserInterface;
use React\EventLoop\Factory;
use function ApiClients\Foundation\resource_pretty_print;
use Rx\Observer\CallbackObserver;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';
$loop = Factory::create();
$client = AsyncClient::create($loop, $argv[1]);unset($argv[1]);

if (count($argv) > 1) {
    unset($argv[0]);
    foreach ($argv as $workspace) {
        $workspaces[] = $workspace;
    }
}

foreach ($workspaces as $workspace) {
    $client->workspace((int)$workspace)->then(function (Workspace $workspace) {
        resource_pretty_print($workspace);
        $workspace->groups()->subscribe(new CallbackObserver(function (GroupInterface $user) {
            resource_pretty_print($user);
        }));
    });
}

$loop->run();
