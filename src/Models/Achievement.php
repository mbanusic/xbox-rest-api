<?php

namespace Neznam\XboxRestApi\Models;

class Achievement extends AbstractModel
{
    public $id;

    public $serviceConfigId;

    public $name;

    public $progressState;

    public $progression;

    public array $titleAssociations = [];

    public array $mediaAssets = [];

    public $platform;

    public $isSecret;

    public $description;

    public $lockedDescription;

    public $productId;

    public $achievementType;

    public $participationType;

    public TimeWindow $timeWindow;

    public array $rewards = [];

    public $estimatedTime;

    public $deeplink;

    public $isRevoked;

    public function map($attributes)
    {
        $fields = [
            'id', 'serviceConfigId', 'name', 'profressState', 'platform', 'isSecret', 'description',
            'lockedDescription', 'productId', 'achievementType', 'participationType', 'estimatedTime',
            'deeplink', 'isRevoked',
        ];
        foreach ($fields as $field) {
            $this->{$field} = $attributes[$field];
        }
        $this->timeWindow = (new TimeWindow())->map($attributes['timeWindow']);
        foreach ($attributes['rewards'] as $reward) {
            $this->rewards[] = (new Reward())->map($reward);
        }
        foreach ($attributes['mediaAssets'] as $asset) {
            $this->mediaAssets[] = (new MediaAsset())->map($asset);
        }

        foreach ($attributes['titleAssociations'] as $association) {
            $this->titleAssociations[] = (new TitleAssociation())->map($association);
        }
    }
}
