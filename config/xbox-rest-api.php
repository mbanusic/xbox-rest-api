<?php
// config for Neznam/XboxRestApi
return [
    /*
     *
     */
    'provider' => \Neznam\XboxRestApi\XboxConfigProvider::class,
    'client_id' => env('XBOX_UHS'),
    'client_secret' => env('XBOX_TOKEN')
];
