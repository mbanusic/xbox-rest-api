<?php

namespace Neznam\XboxRestApi;

class XboxConfigProvider extends AbstractXboxConfigProvider
{
    public function load() {
        $this->uhs = config('xbox-rest-api.uhs');

        $this->token = config('xbox-rest-api.token');
    }
}
