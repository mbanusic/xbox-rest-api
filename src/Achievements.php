<?php

namespace Neznam\XboxRestApi;

use Neznam\XboxRestApi\Models\Achievement;

class Achievements extends AbstractXboxRequest
{
    private $url = 'https://achievements.xboxlive.com';

    public function getAll($xuid, $params = [])
    {
        $defaultParams = [
            //'skipItems' => 0,
            //'continuationToken' => '',
            //'maxItems' => 10,
            //'titleId' => '1484511986',
            //'possibleOnly' => false,
            //'types' => 'Persistent', //Persistent|Challenge,
            //'orderBy' => 'Title' // Unordered|Title|UnlockTime|EndingSoon
        ];
        $query = array_merge($params, $defaultParams);
        $response = $this->getHttpClient()->get($this->url . '/users/xuid(' . $xuid . ')/achievements', [
            'query' => $query,
            'headers' => [
                'Authorization' => $this->getAuthorization(),
                'x-xbl-contract-version' => 3,
            ],
        ]);
        $body = json_decode($response->getBody()->getContents(), true);
        dd($body);
        foreach ($body['achievements'] as $achievement) {
            $a = (new Achievement())->map($achievement);
        }
    }

    public function getInGame($xuid, $scid)
    {
    }

    public function getHistory($xuid)
    {
        $response = $this->getHttpClient()->get($this->url . '/users/xuid(' . $xuid . ')/history/titles', [
            'headers' => [
                'Authorization' => $this->getAuthorization(),
                'x-xbl-contract-version' => 3,
            ],
        ]);

        $body = json_decode($response->getBody()->getContents(), true);
        dd($body);
    }
}
