<?php declare(strict_types=1);

namespace Jaapio\Tests\Toggl\Resource\Sync;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use Jaapio\Toggl\ApiSettings;
use Jaapio\Toggl\Resource\Project;

class ProjectTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Sync';
    }
    public function getClass() : string
    {
        return Project::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
