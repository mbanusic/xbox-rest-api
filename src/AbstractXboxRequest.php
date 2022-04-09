<?php

namespace Neznam\XboxRestApi;

use GuzzleHttp\Client;

abstract class AbstractXboxRequest
{
    protected $uhs;

    protected $token;

    protected $contract_version;

    protected $guzzle;

    protected $httpClient;

    public function __construct($contract_version = 2, $guzzle = []) {
        $provider = app(config('xbox-rest-api.provider'));

        $this->uhs = $provider->getUhs();
        $this->token = $provider->getToken();
        $this->contract_version = $contract_version;
        $this->guzzle = $guzzle;
    }

    protected function getHttpClient() {
        if (is_null($this->httpClient)) {
            $params = [
                'header' => [
                    'Authorization' => $this->getAuthorization(),
                    'x-xbl-contract-version' => $this->contract_version
                ]
            ];
            $params = array_merge($this->guzzle, $params);
            $this->httpClient = new Client($params);
        }

        return $this->httpClient;
    }

    public function getAuthorization() {
        return 'XBL3.0 x=' . $this->uhs.';'.$this->token;
    }
}
