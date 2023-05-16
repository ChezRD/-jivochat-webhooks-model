<?php

namespace ChezRD\Jivochat\Webhooks\Model\EventRequest;

use ChezRD\Jivochat\Webhooks\Model\Request;

/**
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class ClientUpdatedRequest extends Request
{
    /** @var string Client ID (e.g. "1217"). */
    public $client_id;
    
    /** @var string Message (e.g. "Message text"). */
    public $message;
}