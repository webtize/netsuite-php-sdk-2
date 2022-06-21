<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class SalesOrder
{
    private $id = null;
    private $tranDate = null;
    private $tranId = null;
    private $customerId = null;
    private $subsidiaryId = null;
    private $locationId = null;
    private $giftCards = null;
    private $rounding = null;
    private $roundingInternalID = null;
    private $departmentInternalId = null;
    private $customFields = null;
    private $rows = null;

    public function getArray()
    {
        $arr = [];
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->tranDate != null) {
            $arr['tranDate'] = $this->tranDate;
        }
        if ($this->tranId != null) {
            $arr['tranId'] = $this->tranId;
        }
        if ($this->customerId != null) {
            $arr['customerId'] = $this->customerId;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->locationId != null) {
            $arr['locationId'] = $this->locationId;
        }
        if ($this->giftCards != null) {
            $arr['giftCards'] = $this->giftCards;
        }
        if ($this->rounding != null) {
            $arr['rounding'] = $this->rounding;
        }
        if ($this->roundingInternalID != null) {
            $arr['roundingInternalID'] = $this->roundingInternalID;
        }
        if ($this->departmentInternalId != null) {
            $arr['departmentInternalId'] = $this->departmentInternalId;
        }
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        if ($this->rows != null) {
            $arr['rows'] = $this->rows;
        }
        return $arr;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setTranDate($tranDate): void
    {
        $this->tranDate = $tranDate;
    }

    public function setTranId($tranId): void
    {
        $this->tranId = $tranId;
    }

    public function setCustomerId($customerId): void
    {
        $this->customerId = $customerId;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    public function setGiftCards($giftCards): void
    {
        $this->giftCards = $giftCards;
    }

    public function setRounding($rounding): void
    {
        $this->rounding = $rounding;
    }

    public function setRoundingInternalID($roundingInternalID): void
    {
        $this->roundingInternalID = $roundingInternalID;
    }

    public function setDepartmentInternalId($departmentInternalId): void
    {
        $this->departmentInternalId = $departmentInternalId;
    }

    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }
}
