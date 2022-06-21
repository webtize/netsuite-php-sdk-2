<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class InventoryTransferOrderItemReceipt
{
    private $internalId = null;
    private $tranDate = null;
    private $id = null;

    public function getArray()
    {
        $arr = [];
        if ($this->internalId != null) {
            $arr['internalId'] = $this->internalId;
        }
        if ($this->tranDate != null) {
            $arr['tranDate'] = $this->tranDate;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        return $arr;
    }

    public function setInternalId($internalId): void
    {
        $this->internalId = $internalId;
    }

    public function setTranDate($tranDate): void
    {
        $this->tranDate = $tranDate;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}
