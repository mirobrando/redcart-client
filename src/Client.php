<?php

namespace mirolabs\redcart;


class Client
{
    const HTTPS_URL = 'https://api2.redcart.pl';
    const HTTP_URL = 'http://api2.redcart.pl';


    /**
     * @var string
     */
    private $key;

    /**
     * @var bool
     */
    private $https;

    /**
     * @var \GuzzleHttp\Client | null
     */
    private $client;

    /**
     * @param string $key
     * @param bool $https
     */
    public function __construct($key, $https = true)
    {
        $this->key = $key;
        $this->https = $https;
    }


    /**
     * @param $module
     * @param $method
     * @param $parameters
     * @param $options
     * @return mixed
     */
    public function call($module, $method, $parameters, $options)
    {
        return $this->getClient()->post(
            $this->getUrl(),
            $this->getOptions($module, $method, $parameters, $options)
        )->json();
    }

    /**
     * @param $module
     * @param $method
     * @param $parameters
     * @param $options
     * @return array
     */
    private function getOptions($module, $method, $parameters, $options)
    {
        return [
            'body' => [
                'key' => $this->key,
                'viewType' => 'json',
                'module' => $module,
                'method' => $method,
                'parameters' => $parameters,
                'options' => $options
            ]
        ];
    }

    /**
     * @return string
     */
    private function getUrl()
    {
        if ($this->https) {
            return self::HTTPS_URL;
        }

        return self::HTTP_URL;
    }


    /**
     * @return \GuzzleHttp\Client
     */
    private function getClient() {
        if (is_null($this->client)) {
            $this->client = new \GuzzleHttp\Client();
        }

        return $this->client;
    }

}