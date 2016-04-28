<?php
/**
 * ©[2016] SugarCRM Inc.  Licensed by SugarCRM under the Apache 2.0 license.
 */

namespace SugarAPI\SDK\Request;

use SugarAPI\SDK\Request\Abstracts\AbstractRequest;

class GET extends AbstractRequest {

    /**
     * @inheritdoc
     */
    protected static $_TYPE = 'GET';

    /**
     * @inheritdoc
     */
    protected static $_DEFAULT_HEADERS = array(
        "Content-Type: application/json"
    );

    /**
     * @inheritdoc
     *
     * Convert Body to Query String
     */
    public function setBody($body){
        $this->body = http_build_query($body);
        return $this;
    }

    /**
     * @inheritdoc
     *
     * Configure the URL with Body since Payload is sent via Query String
     */
    public function send(){
        $body = '';
        if (!empty($this->body)){
            $body = "?".$this->body;
        }
        $this->setURL($this->url.$body);
        return parent::send();
    }

}