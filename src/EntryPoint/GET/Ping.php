<?php

namespace SugarAPI\SDK\EntryPoint\GET;

use SugarAPI\SDK\EntryPoint\Abstracts\GET\AbstractGetEntryPoint;

class Ping extends AbstractGetEntryPoint {

    /**
     * @inheritdoc
     */
    protected $_URL = 'ping';

}