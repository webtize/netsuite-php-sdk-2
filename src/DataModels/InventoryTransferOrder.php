<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class InventoryTransferOrder
{
    private $transDate = null;
    private $incotermId = null;
    private $id = null;
    private $subsidiaryId = null;
    private $fromLocationId = null;
    private $toLocationId = null;
    private $rows = null;

    public function getArray()
    {
        $arr = [];
        if ($this->transDate != null) {
            $arr['transDate'] = $this->transDate;
        }
        if ($this->incotermId != null) {
            $arr['incotermId'] = $this->incotermId;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->fromLocationId != null) {
            $arr['fromLocationId'] = $this->fromLocationId;
        }
        if ($this->toLocationId != null) {
            $arr['toLocationId'] = $this->toLocationId;
        }
        if ($this->rows != null) {
            $arr['rows'] = $this->rows;
        }
        return $arr;
    }

    public function setTransDate($transDate): void
    {
        $this->transDate = $transDate;
    }

    public function setIncotermId($incotermId): void
    {
        $this->incotermId = $incotermId;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setFromLocationId($fromLocationId): void
    {
        $this->fromLocationId = $fromLocationId;
    }

    public function setToLocationId($toLocationId): void
    {
        $this->toLocationId = $toLocationId;
    }

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }
}
