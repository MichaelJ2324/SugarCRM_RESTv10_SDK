<?php
/**
 * ©[2016] SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */

namespace SugarAPI\SDK\EntryPoint\Abstracts\POST;

use SugarAPI\SDK\EntryPoint\Abstracts\AbstractEntryPoint;
use SugarAPI\SDK\Request\POST;
use SugarAPI\SDK\Response\JSON;

abstract class AbstractPostEntryPoint extends AbstractEntryPoint {

    public function __construct($url, array $options = array()) {
        $this->setRequest(new POST());
        $this->setResponse(new JSON($this->Request->getCurlObject()));
        parent::__construct($url, $options);
    }

}