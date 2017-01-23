<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;
use DateTimeZone;

abstract class EmptyUser implements UserInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function apiToken() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function defaultWid() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function email() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function fullname() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function jqueryTimeofdayFormat() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function jqueryDateFormat() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function timeofdayFormat() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function dateFormat() : string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function storeStartAndStopTime() : bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function beginningOfWeek() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function language() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function imageUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function sidebarPiechart() : string
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface
    {
        return null;
    }

    /**
     * @return int
     */
    public function retention() : int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function recordTimeline() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function renderTimeline() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function timelineEnabled() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function timelineExperiment() : bool
    {
        return null;
    }

    /**
     * @return BlogPost
     */
    public function newBlogPost() : BlogPost
    {
        return null;
    }

    /**
     * @return bool
     */
    public function shouldUpgrade() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function achievementsEnabled() : bool
    {
        return null;
    }

    /**
     * @return DateTimeZone
     */
    public function timezone() : DateTimeZone
    {
        return null;
    }

    /**
     * @return bool
     */
    public function openidEnabled() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function sendProductEmails() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function sendWeeklyReport() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function sendTimerNotifications() : bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function lastBlogEntry() : string
    {
        return null;
    }

    /**
     * @return array
     */
    public function invitation() : array
    {
        return null;
    }

    /**
     * @return array
     */
    public function workspaces() : array
    {
        return null;
    }
}
