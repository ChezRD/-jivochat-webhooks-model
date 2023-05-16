<?php


namespace ChezRD\Jivochat\Webhooks\Model\Request;

use ChezRD\Jivochat\Webhooks\Model\Traits\PopulateObjectViaArray;

/**
 * Status of the client
 *
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Request
 */
class Status
{
    use PopulateObjectViaArray;

    /** @var string Client status ID (e.g. "4") */
    public $id;

    /** @var string Client status name (e.g. "contact_later") */
    public $title;
}