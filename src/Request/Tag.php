<?php


namespace ChezRD\Jivochat\Webhooks\Model\Request;

use ChezRD\Jivochat\Webhooks\Model\Traits\PopulateObjectViaArray;

/**
 * Tag selected for the client
 *
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Request
 */
class Tag
{
    use PopulateObjectViaArray;

    /** @var string Tag ID (e.g. "7") */
    public $id;

    /** @var string Tag name (e.g. "Discount") */
    public $title;
}