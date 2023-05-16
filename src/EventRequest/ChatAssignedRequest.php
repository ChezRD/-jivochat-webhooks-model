<?php

namespace ChezRD\Jivochat\Webhooks\Model\EventRequest;

use ChezRD\Jivochat\Webhooks\Model\Request;
use ChezRD\Jivochat\Webhooks\Request\Agent;
use InvalidArgumentException;

/**
 * @author Oleg Fedorov <olegf39@gmail.com>
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class ChatAssignedRequest extends Request
{
    /** @var Agent Object with information about the operator. See {@link Agent} for details. */
    public $assigned_agent;

    /** @var string CRM link from the event Chat_accepted (e.g. "..."). */
    public $assign_to;

    /**
     * Setter for {@link agent} property.
     *
     * @param Agent|array $data
     * @throws InvalidArgumentException
     */
    public function setAssignedAgent($data) {
        return $this->populateFieldData('assigned_agent', Agent::class, $data, false, true);
    }
}