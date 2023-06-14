<?php

namespace ChezRD\Jivochat\Webhooks\Model;

use ChezRD\Jivochat\Webhooks\Model\Traits\PopulateObjectViaArray;
use ChezRD\Jivochat\Webhooks\Model\Request\Agent;
use ChezRD\Jivochat\Webhooks\Model\Request\Analytics;
use ChezRD\Jivochat\Webhooks\Model\Request\Department;
use ChezRD\Jivochat\Webhooks\Model\Request\Organization;
use ChezRD\Jivochat\Webhooks\Model\Request\Page;
use ChezRD\Jivochat\Webhooks\Model\Request\Session;
use ChezRD\Jivochat\Webhooks\Model\Request\Status;
use ChezRD\Jivochat\Webhooks\Model\Request\Tag;
use ChezRD\Jivochat\Webhooks\Model\Request\Visitor;
use InvalidArgumentException;

/**
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class Request
{
    use PopulateObjectViaArray;

    /** @var string Name of the event from jivosite (e.g. "offline_message"). */
    public $event_name;

    /** @var string Channel widget ID, it can be found in the chat code (e.g. "3948"). */
    public $widget_id;

    /** @var int ID of current chat (e.g. 7507). */
    public $chat_id;

    /** @var string|null Visitor id (e.g. "3c077929b8_12175"). */
    public $user_token;

    /** @var Visitor Object with information about the visitor. See {@link Visitor} for details. */
    public $visitor;

    /** @var Session Information on user sessions. See {@link Session} for details. */
    public $session;

    /** @var Page|null Information about a page on which the visitor. See {@link Page} for details. */
    public $page;

    /** @var Analytics|null Available client identificators in Google Analytics or Yandex.Metrika. See {@link Analytics} for details. */
    public $analytics;

    /** @var Department|null Object with the information about the department that visitor selected before chat. See {@link Department} for details. */
    public $department;

    /** @var Organization|null Object with the information about an organization, client was assigned. See {@link Organization} for details. */
    public $organization;

    /** @var Agent|null Information about an agent assigned to the client. See {@link Agent} for details. */
    public $assigned_agent;

    /** @var Tag[]|null Tags selected for the client. See {@link Tag} for details. */
    public $tags;

    /** @var Status|null Tags selected for the client. See {@link Status} for details. */
    public $status;

    /**
     * Event constructor.
     *
     * @param array $Request
     */
    final public function __construct(array $Request)
    {
        $this->populate($Request);
    }

    /**
     * Setter for {@link visitor} property.
     *
     * @param Visitor|array $data
     * @throws InvalidArgumentException
     */
    public function setVisitor($data)
    {
        return $this->populateFieldData('visitor', Visitor::class, $data, false, false);
    }

    /**
     * Setter for {@link session} property.
     *
     * @param Session|array $data
     * @throws InvalidArgumentException
     */
    public function setSession($data)
    {
        return $this->populateFieldData('session', Session::class, $data, false, false);
    }

    /**
     * Setter for {@link page} property.
     *
     * @param Visitor|array|null $data
     * @throws InvalidArgumentException
     */
    public function setPage($data)
    {
        return $this->populateFieldData('page', Page::class, $data, false, true);
    }

    /**
     * Setter for {@link analytics} property.
     *
     * @param Analytics|array|null $data
     * @throws InvalidArgumentException
     */
    public function setAnalytics($data)
    {
        return $this->populateFieldData('analytics', Analytics::class, $data, false, true);
    }

    /**
     * Setter for {@link department} property.
     *
     * @param Department|array|null $data
     * @throws InvalidArgumentException
     */
    public function setDepartment($data)
    {
        return $this->populateFieldData('department', Department::class, $data, false, true);
    }

    /**
     * Setter for {@link organization} property.
     *
     * @param Organization|array|null $data
     * @throws InvalidArgumentException
     */
    public function setOrganization($data)
    {
        return $this->populateFieldData('organization', Organization::class, $data, false, true);
    }

    /**
     * Setter for {@link assigned_agent} property.
     *
     * @param Agent|array|null $data
     * @throws InvalidArgumentException
     */
    public function setAssignedAgent($data)
    {
        return $this->populateFieldData('assigned_agent', Agent::class, $data, false, true);
    }

    /**
     * Setter for {@link tags} property.
     *
     * @param Tag[]|array|null $data
     * @throws InvalidArgumentException
     */
    public function setTags($data)
    {
        return $this->populateFieldData('tags', Tag::class, $data, true, true);
    }

    /**
     * Setter for {@link status} property.
     *
     * @param Status|array|null $data
     * @throws InvalidArgumentException
     */
    public function setStatus($data)
    {
        return $this->populateFieldData('status', Status::class, $data, false, true);
    }
}
