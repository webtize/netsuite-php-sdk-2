<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class InventoryTransferOrderItemFullfillment
{
    private $internalId = null;
    private $tranDate = null;
    private $rows = null;
    private $createdFromShipGroup = null;
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
        if ($this->rows != null) {
            $arr['rows'] = $this->rows;
        }
        if ($this->createdFromShipGroup != null) {
            $arr['createdFromShipGroup'] = $this->createdFromShipGroup;
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

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }

    public function setCreatedFromShipGroup($createdFromShipGroup): void
    {
        $this->createdFromShipGroup = $createdFromShipGroup;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}
