<?php declare(strict_types=1);

namespace Jaapio\Toggl\Resource;

use ApiClients\Foundation\Hydrator\Annotations\Collection;
use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeImmutable;
use DateTimeInterface;
use DateTimeZone;

/**
 * @Collection(
 *     workspaces="Workspace"
 * )
 * @Nested(
 *     new_blog_post="BlogPost"
 * )
 * @EmptyResource("EmptyUser")
 */
abstract class User extends AbstractResource implements UserInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $api_token;

    /**
     * @var int
     */
    protected $default_wid;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $fullname;

    /**
     * @var string
     */
    protected $jquery_timeofday_format;

    /**
     * @var string
     */
    protected $jquery_date_format;

    /**
     * @var string
     */
    protected $timeofday_format;

    /**
     * @var string
     */
    protected $date_format;

    /**
     * @var bool
     */
    protected $store_start_and_stop_time;

    /**
     * @var int
     */
    protected $beginning_of_week;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $image_url;

    /**
     * @var string
     */
    protected $sidebar_piechart;

    /**
     * @var DateTimeInterface
     */
    protected $at;

    /**
     * @var DateTimeImmutable
     */
    protected $at_wrapped;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeImmutable
     */
    protected $created_at_wrapped;

    /**
     * @var int
     */
    protected $retention;

    /**
     * @var bool
     */
    protected $record_timeline;

    /**
     * @var bool
     */
    protected $render_timeline;

    /**
     * @var bool
     */
    protected $timeline_enabled;

    /**
     * @var bool
     */
    protected $timeline_experiment;

    /**
     * @var BlogPost
     */
    protected $new_blog_post;

    /**
     * @var bool
     */
    protected $should_upgrade;

    /**
     * @var bool
     */
    protected $achievements_enabled;

    /**
     * @var DateTimeZone
     */
    protected $timezone;

    /**
     * @var bool
     */
    protected $openid_enabled;

    /**
     * @var bool
     */
    protected $send_product_emails;

    /**
     * @var bool
     */
    protected $send_weekly_report;

    /**
     * @var bool
     */
    protected $send_timer_notifications;

    /**
     * @var string
     */
    protected $last_blog_entry;

    /**
     * @var array
     */
    protected $invitation;

    /**
     * @var array
     */
    protected $workspaces;

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function apiToken() : string
    {
        return $this->api_token;
    }

    /**
     * @return int
     */
    public function defaultWid() : int
    {
        return $this->default_wid;
    }

    /**
     * @return string
     */
    public function email() : string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function fullname() : string
    {
        return $this->fullname;
    }

    /**
     * @return string
     */
    public function jqueryTimeofdayFormat() : string
    {
        return $this->jquery_timeofday_format;
    }

    /**
     * @return string
     */
    public function jqueryDateFormat() : string
    {
        return $this->jquery_date_format;
    }

    /**
     * @return string
     */
    public function timeofdayFormat() : string
    {
        return $this->timeofday_format;
    }

    /**
     * @return string
     */
    public function dateFormat() : string
    {
        return $this->date_format;
    }

    /**
     * @return bool
     */
    public function storeStartAndStopTime() : bool
    {
        return $this->store_start_and_stop_time;
    }

    /**
     * @return int
     */
    public function beginningOfWeek() : int
    {
        return $this->beginning_of_week;
    }

    /**
     * @return string
     */
    public function language() : string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function imageUrl() : string
    {
        return $this->image_url;
    }

    /**
     * @return string
     */
    public function sidebarPiechart() : string
    {
        return $this->sidebar_piechart;
    }

    /**
     * @return DateTimeInterface
     */
    public function at() : DateTimeInterface
    {
        if ($this->at_wrapped instanceof DateTimeImmutable) {
            return $this->at_wrapped;
        }
        $this->at_wrapped = new DateTimeImmutable($this->at);
        return $this->at_wrapped;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface
    {
        if ($this->created_at_wrapped instanceof DateTimeImmutable) {
            return $this->created_at_wrapped;
        }
        $this->created_at_wrapped = new DateTimeImmutable($this->created_at);
        return $this->created_at_wrapped;
    }

    /**
     * @return int
     */
    public function retention() : int
    {
        return $this->retention;
    }

    /**
     * @return bool
     */
    public function recordTimeline() : bool
    {
        return $this->record_timeline;
    }

    /**
     * @return bool
     */
    public function renderTimeline() : bool
    {
        return $this->render_timeline;
    }

    /**
     * @return bool
     */
    public function timelineEnabled() : bool
    {
        return $this->timeline_enabled;
    }

    /**
     * @return bool
     */
    public function timelineExperiment() : bool
    {
        return $this->timeline_experiment;
    }

    /**
     * @return BlogPost
     */
    public function newBlogPost() : BlogPost
    {
        return $this->new_blog_post;
    }

    /**
     * @return bool
     */
    public function shouldUpgrade() : bool
    {
        return $this->should_upgrade;
    }

    /**
     * @return bool
     */
    public function achievementsEnabled() : bool
    {
        return $this->achievements_enabled;
    }

    /**
     * @return DateTimeZone
     */
    public function timezone() : DateTimeZone
    {
        return $this->timezone;
    }

    /**
     * @return bool
     */
    public function openidEnabled() : bool
    {
        return $this->openid_enabled;
    }

    /**
     * @return bool
     */
    public function sendProductEmails() : bool
    {
        return $this->send_product_emails;
    }

    /**
     * @return bool
     */
    public function sendWeeklyReport() : bool
    {
        return $this->send_weekly_report;
    }

    /**
     * @return bool
     */
    public function sendTimerNotifications() : bool
    {
        return $this->send_timer_notifications;
    }

    /**
     * @return string
     */
    public function lastBlogEntry() : string
    {
        return $this->last_blog_entry;
    }

    /**
     * @return array
     */
    public function invitation() : array
    {
        return $this->invitation;
    }

    /**
     * @return array
     */
    public function workspaces() : array
    {
        return $this->workspaces;
    }
}
