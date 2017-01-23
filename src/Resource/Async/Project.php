<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource\Async;

use Jaapio\Toggl\Resource\Project as BaseProject;

class Project extends BaseProject
{
    public function refresh() : Project
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
