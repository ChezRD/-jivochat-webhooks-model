<?php

namespace ChezRD\Jivochat\Webhooks\Model\Request;

use ChezRD\Jivochat\Webhooks\Model\Traits\PopulateObjectViaArray;

/**
 * Object with the information about an organization, client was assigned
 *
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Request
 */
class Organization
{
    use PopulateObjectViaArray;

    /** @var string Organization ID. */
    public $id;

    /** @var string Organization name. */
    public $name;
}