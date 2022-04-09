<?php

namespace Neznam\XboxRestApi;

use Neznam\XboxRestApi\Models\Profile;

class Profiles extends AbstractXboxRequest
{
    private $url = 'https://profile.xboxlive.com';

    private $settings = [
        'GameDisplayName',
        'GameDisplayPicRaw',
        'Gamerscore',
        'Gamertag',
        'AppDisplayName',
        'AppDisplayPicRaw',
        'AccountTier',
        'TenureLevel',
    ];

    public function getProfiles(array $ids) {
        $r = $this->getHttpClient()->post($this->url . '/users/batch/profile/settings', [
           'headers' => [
               'Authorization' => $this->getAuthorization(),
               'x-xbl-contract-version' => 2
           ],
            'json' => [
                'userIds' => $ids,
                'settings' => $this->settings
            ]
        ]);
        $response = json_decode($r->getBody()->getContents(), true);

        foreach ($response['profileUsers'] as $user) {
            $p = (new Profile())->map($user);
        }

        dd($p);
    }

    public function getFriends(int $id) {
        $r = $this->getHttpClient()->get($this->url . '/users/xuid('.$id.')/profile/settings/people/people',[
            'headers' => [
                'Authorization' => $this->getAuthorization(),
                'x-xbl-contract-version' => 2
            ],
            'query' => [
                'settings' => implode(',', $this->settings)
            ]
        ]);

        $response = json_decode($r->getBody()->getContents(), true);
        foreach ($response['profileUsers'] as $user) {
            $p = (new Profile())->map($user);
        }
        dd($p);
    }
}
