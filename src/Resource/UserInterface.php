<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;
use DateTimeZone;

interface UserInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'User';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function apiToken() : string;

    /**
     * @return int
     */
    public function defaultWid() : int;

    /**
     * @return string
     */
    public function email() : string;

    /**
     * @return string
     */
    public function fullname() : string;

    /**
     * @return string
     */
    public function jqueryTimeofdayFormat() : string;

    /**
     * @return string
     */
    public function jqueryDateFormat() : string;

    /**
     * @return string
     */
    public function timeofdayFormat() : string;

    /**
     * @return string
     */
    public function dateFormat() : string;

    /**
     * @return bool
     */
    public function storeStartAndStopTime() : bool;

    /**
     * @return int
     */
    public function beginningOfWeek() : int;

    /**
     * @return string
     */
    public function language() : string;

    /**
     * @return string
     */
    public function imageUrl() : string;

    /**
     * @return string
     */
    public function sidebarPiechart() : string;

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface;

    /**
     * @return int
     */
    public function retention() : int;

    /**
     * @return bool
     */
    public function recordTimeline() : bool;

    /**
     * @return bool
     */
    public function renderTimeline() : bool;

    /**
     * @return bool
     */
    public function timelineEnabled() : bool;

    /**
     * @return bool
     */
    public function timelineExperiment() : bool;

    /**
     * @return BlogPost
     */
    public function newBlogPost() : BlogPost;

    /**
     * @return bool
     */
    public function shouldUpgrade() : bool;

    /**
     * @return bool
     */
    public function achievementsEnabled() : bool;

    /**
     * @return DateTimeZone
     */
    public function timezone() : DateTimeZone;

    /**
     * @return bool
     */
    public function openidEnabled() : bool;

    /**
     * @return bool
     */
    public function sendProductEmails() : bool;

    /**
     * @return bool
     */
    public function sendWeeklyReport() : bool;

    /**
     * @return bool
     */
    public function sendTimerNotifications() : bool;

    /**
     * @return string
     */
    public function lastBlogEntry() : string;

    /**
     * @return array
     */
    public function invitation() : array;

    /**
     * @return array
     */
    public function workspaces() : array;
}
