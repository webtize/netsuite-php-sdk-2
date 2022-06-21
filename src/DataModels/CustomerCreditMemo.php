<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class CustomerCreditMemo
{
    private $id = null;
    private $tranDate = null;
    private $customerId = null;
    private $subsidiaryId = null;
    private $locationId = null;
    private $customFields = null;
    private $giftCards = null;
    private $roundingInternalID = null;
    private $departmentInternalId = null;
    private $creditAmount = null;
    private $invoiceID = null;
    private $rounding = null;
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
        if ($this->customerId != null) {
            $arr['customerId'] = $this->customerId;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->locationId != null) {
            $arr['locationId'] = $this->locationId;
        }
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        if ($this->giftCards != null) {
            $arr['giftCards'] = $this->giftCards;
        }
        if ($this->roundingInternalID != null) {
            $arr['roundingInternalID'] = $this->roundingInternalID;
        }
        if ($this->departmentInternalId != null) {
            $arr['departmentInternalId'] = $this->departmentInternalId;
        }
        if ($this->creditAmount != null) {
            $arr['creditAmount'] = $this->creditAmount;
        }
        if ($this->invoiceID != null) {
            $arr['invoiceID'] = $this->invoiceID;
        }
        if ($this->rounding != null) {
            $arr['rounding'] = $this->rounding;
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

    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }

    public function setGiftCards($giftCards): void
    {
        $this->giftCards = $giftCards;
    }

    public function setRoundingInternalID($roundingInternalID): void
    {
        $this->roundingInternalID = $roundingInternalID;
    }

    public function setDepartmentInternalId($departmentInternalId): void
    {
        $this->departmentInternalId = $departmentInternalId;
    }

    public function setCreditAmount($creditAmount): void
    {
        $this->creditAmount = $creditAmount;
    }

    public function setInvoiceID($invoiceID): void
    {
        $this->invoiceID = $invoiceID;
    }

    public function setRounding($rounding): void
    {
        $this->rounding = $rounding;
    }

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }
}
