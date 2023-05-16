<?php

namespace ChezRD\Jivochat\Webhooks\Model\EventRequest;

use ChezRD\Jivochat\Webhooks\Model\Request;
use ChezRD\Jivochat\Webhooks\Model\Request\Agent;
use ChezRD\Jivochat\Webhooks\Model\Request\Chat;
use InvalidArgumentException;

/**
 * @author Oleg Fedorov <olegf39@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class ChatFinishedRequest extends Request
{
    /** @var Chat Data on completed chatting. See {@link Chat} for details. */
    public $chat;

    /** @var Agent[] Agents list. See {@link Agent} for details. */
    public $agents;

    /** @var string|null Preformatted html chat listing */
    public $html_messages;

    /** @var string|null Preformatted plain chat listing */
    public $plain_messages;

    /**
     * Setter for {@link agents} property.
     *
     * @param array $agents
     * @throws InvalidArgumentException
     */
    public function setAgents(array $data) {
        return $this->populateFieldData('agents', Agent::class, $data, true, false);
    }

    /**
     * Setter for {@link chat} property.
     *
     * @param Agent|array $data
     * @throws InvalidArgumentException
     */
    public function setChat($data) {
        return $this->populateFieldData('chat', Chat::class, $data, false, true);
    }
}