<?php

namespace Neznam\XboxRestApi;

abstract class AbstractXboxConfigProvider
{

    protected string $uhs;

    protected string $token;

    public function __construct() {
        $this->load();
    }

    abstract public function load();

    public function getUhs() : string {
        return $this->uhs;
    }

    public function getToken() : string {
        return $this->token;
    }
}
