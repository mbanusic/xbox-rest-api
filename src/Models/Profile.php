<?php

namespace Neznam\XboxRestApi\Models;

class Profile extends AbstractModel {

    protected int $id;

    protected int $hostId;

    protected string $GameDisplayName;

    protected string $GameDisplayPicRaw;

    protected string $Gamerscore;

    protected string $Gamertag;

    protected string $AppDisplayName;

    protected string $AppDisplayPicRaw;

    protected string $AccountTier;

    protected string $TenureLevel;

    protected bool $isSponsoredUser;

    public function map(array $attributes)
    {
        dd($attributes);
        $this->id = $attributes['id'];
        $this->hostId = $attributes['hostId'];
        $this->isSponsoredUser = $attributes['isSponsoredUser'];
        foreach ($attributes['settings'] as $attribute) {
            $this->{$attribute['id']} = $attribute['value'];
        }
    }
}
