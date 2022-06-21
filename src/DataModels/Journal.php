<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class Journal
{
    private $currencyId = null;
    private $subsidiaryId = null;
    private $memo = null;
    private $tranDate = null;
    private $id = null;
    private $rows = null;

    public function getArray()
    {
        $arr = [];
        if ($this->currencyId != null) {
            $arr['currencyId'] = $this->currencyId;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->memo != null) {
            $arr['memo'] = $this->memo;
        }
        if ($this->tranDate != null) {
            $arr['tranDate'] = $this->tranDate;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->rows != null) {
            $arr['rows'] = $this->rows;
        }
        return $arr;
    }

    public function setCurrencyId($currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setMemo($memo): void
    {
        $this->memo = $memo;
    }

    public function setTranDate($tranDate): void
    {
        $this->tranDate = $tranDate;
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
