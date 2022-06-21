<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class ApplyGiftcard
{
    private $internalId = null;
    private $id = null;
    private $giftCards = null;

    public function getArray()
    {
        $arr = [];
        if ($this->internalId != null) {
            $arr['internalId'] = $this->internalId;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->giftCards != null) {
            $arr['giftCards'] = $this->giftCards;
        }
        return $arr;
    }

    public function setInternalId($internalId): void
    {
        $this->internalId = $internalId;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setGiftCards($giftCards): void
    {
        $this->giftCards = $giftCards;
    }
}
