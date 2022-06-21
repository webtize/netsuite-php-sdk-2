<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class PurchaseCredit
{
    private $createdFrom = null;
    private $customFields = null;
    private $accountId = null;
    private $appliedAmount = null;
    private $transactionNumber = null;
    private $tranId = null;
    private $entityId = null;
    private $currencyId = null;
    private $tranDate = null;
    private $locationId = null;
    private $subsidiaryId = null;
    private $rows = null;
    private $id = null;

    public function getArray()
    {
        $arr = [];
        if ($this->createdFrom != null) {
            $arr['createdFrom'] = $this->createdFrom;
        }
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        if ($this->accountId != null) {
            $arr['accountId'] = $this->accountId;
        }
        if ($this->appliedAmount != null) {
            $arr['appliedAmount'] = $this->appliedAmount;
        }
        if ($this->transactionNumber != null) {
            $arr['transactionNumber'] = $this->transactionNumber;
        }
        if ($this->tranId != null) {
            $arr['tranId'] = $this->tranId;
        }
        if ($this->entityId != null) {
            $arr['entityId'] = $this->entityId;
        }
        if ($this->currencyId != null) {
            $arr['currencyId'] = $this->currencyId;
        }
        if ($this->tranDate != null) {
            $arr['tranDate'] = $this->tranDate;
        }
        if ($this->locationId != null) {
            $arr['locationId'] = $this->locationId;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->rows != null) {
            $arr['rows'] = $this->rows;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        return $arr;
    }

    public function setCreatedFrom($createdFrom): void
    {
        $this->createdFrom = $createdFrom;
    }

    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }

    public function setAccountId($accountId): void
    {
        $this->accountId = $accountId;
    }

    public function setAppliedAmount($appliedAmount): void
    {
        $this->appliedAmount = $appliedAmount;
    }

    public function setTransactionNumber($transactionNumber): void
    {
        $this->transactionNumber = $transactionNumber;
    }

    public function setTranId($tranId): void
    {
        $this->tranId = $tranId;
    }

    public function setEntityId($entityId): void
    {
        $this->entityId = $entityId;
    }

    public function setCurrencyId($currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function setTranDate($tranDate): void
    {
        $this->tranDate = $tranDate;
    }

    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}
