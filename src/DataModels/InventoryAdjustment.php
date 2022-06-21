<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class InventoryAdjustment
{
    private $locationId = null;
    private $subsidiaryId = null;
    private $accountId = null;
    private $id = null;
    private $rows = null;

    public function getArray()
    {
        $arr = [];
        if ($this->locationId != null) {
            $arr['locationId'] = $this->locationId;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->accountId != null) {
            $arr['accountId'] = $this->accountId;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->rows != null) {
            $arr['rows'] = $this->rows;
        }
        return $arr;
    }

    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setAccountId($accountId): void
    {
        $this->accountId = $accountId;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }
}
