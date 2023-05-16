<?php

namespace ChezRD\Jivochat\Webhooks\Model\EventRequest;

use ChezRD\Jivochat\Webhooks\Model\Request;

/**
 * @author Oleg Fedorov <olegf39@gmail.com>
 * @author Evgeny Rumaintsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Model\Request
 */
class OfflineMessageRequest extends Request
{
    /** @var int Offline message ID (e.g. 1665399500726). */
    public $offline_message_id;

    /** @var string Message (e.g. "Message text"). */
    public $message;
}