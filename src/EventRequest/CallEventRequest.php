<?php

namespace ChezRD\Jivochat\Webhooks\Model\EventRequest;

use ChezRD\Jivochat\Webhooks\Model\Request;
use ChezRD\Jivochat\Webhooks\Model\Request\Agent;
use ChezRD\Jivochat\Webhooks\Model\Request\Call;

/**
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class CallEventRequest extends Request
{
    /** @var Agent Object with information about the operator. See {@link Agent} for details. */
    public $agent;

    /** @var Call Call information. See {@link Call} for details. */
    public $call;

    /**
     * Setter for {@link agent} property.
     *
     * @param Agent|array $data
     * @throws InvalidArgumentException
     */
    public function setAgent($data) {
        return $this->populateFieldData('agent', Agent::class, $data, false, true);
    }
    
    /**
     * Setter for {@link call} property.
     *
     * @param Call|array $data
     * @throws InvalidArgumentException
     */
    public function setCall($data) {
        return $this->populateFieldData('call', Call::class, $data, false, true);
    }
}