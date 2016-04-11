<?php

namespace SugarAPI\SDK\Request\Interfaces;

interface RequestInterface {

    /**
     * Set the Body to Request
     * @param mixed
     * @return \SugarAPI\SDK\Request\Abstracts\AbstractRequest Object
     */
    public function setBody($array);

    /**
     * Get the Body on the request
     * @return array
     */
    public function getBody();

    /**
     * Add a Header to the Request Headers property, doesn't Set the CURL Option until Sending
     * @param string - Header Name
     * @param string - Header Value
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function addHeader($name,$value);

    /**
     * Sets the Headers on the Curl Request object, called during Sending. Appends to Request Headers property
     * @param array $array
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function setHeaders(array $array = array());

    /**
     * Get the Headers configured on the Request Object
     * @return array - Headers Property
     */
    public function getHeaders();

    /**
     * Get the CURL Resource
     * @return Curl Resource
     */
    public function getCurlObject();

    /**
     * Set an Option on the Curl Resource
     * @param mixed $option - Curl Option
     * @param mixed $value - Curl Option Value
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function setOption($option,$value);

    /**
     * Set the URL on the Request Object
     * @param string $url
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function setURL($url);

    /**
     * Get the URL configured on the Request Object
     * @return string
     */
    public function getURL();

    /**
     * Execute the Curl Request. Before sending, Headers are added to the Curl Object
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function send();

    /**
     * Get the Curl Response Object generated by the Curl Request
     * @return Curl Response Resource
     */
    public function getResponse();

    /**
     * Initialize Curl Resource
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function start();

    /**
     * Close the Curl Resource
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function close();

    /**
     * Close and Restart the Curl Resource
     * @return \SugarAPI\SDK\Request\Interfaces\RequestInterface
     */
    public function reset();

    /**
     * Get the Status of the Curl Object
     * @return string - Initialized, Sent or Closed
     */
    public function getCurlStatus();

}