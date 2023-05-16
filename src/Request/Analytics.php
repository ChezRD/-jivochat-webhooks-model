<?php

namespace ChezRD\Jivochat\Webhooks\Model\Request;

use ChezRD\Jivochat\Webhooks\Model\Traits\PopulateObjectViaArray;

/**
 * Client identificators in Google Analytics or Yandex.Metrika.
 *
 * @author Evgeny Rumiantsev <chezrd@gmail.com>
 * @package ChezRD\Jivochat\Webhooks\Request
 */
class Analytics
{
    use PopulateObjectViaArray;

    /** @var string|null Google Analytics client identificator. */
    public $ga;
    
    /** @var string|null Yandex.Metrika client identificator. */
    public $ym;
}