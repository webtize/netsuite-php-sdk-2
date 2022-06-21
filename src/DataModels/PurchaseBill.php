<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class PurchaseBill
{
    private $customFields = null;
    private $locationId = null;
    private $supplierId = null;
    private $approvalStatusId = null;
    private $currencyId = null;
    private $transDate = null;
    private $id = null;
    private $subsidiaryId = null;
    private $baseDocId = null;
    private $tranId = null;
    private $rows = null;

    public function getArray()
    {
        $arr = [];
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        if ($this->locationId != null) {
            $arr['locationId'] = $this->locationId;
        }
        if ($this->supplierId != null) {
            $arr['supplierId'] = $this->supplierId;
        }
        if ($this->approvalStatusId != null) {
            $arr['approvalStatusId'] = $this->approvalStatusId;
        }
        if ($this->currencyId != null) {
            $arr['currencyId'] = $this->currencyId;
        }
        if ($this->transDate != null) {
            $arr['transDate'] = $this->transDate;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->baseDocId != null) {
            $arr['baseDocId'] = $this->baseDocId;
        }
        if ($this->tranId != null) {
            $arr['tranId'] = $this->tranId;
        }
        if ($this->rows != null) {
            $arr['rows'] = $this->rows;
        }
        return $arr;
    }

    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }

    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    public function setSupplierId($supplierId): void
    {
        $this->supplierId = $supplierId;
    }

    public function setApprovalStatusId($approvalStatusId): void
    {
        $this->approvalStatusId = $approvalStatusId;
    }

    public function setCurrencyId($currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function setTransDate($transDate): void
    {
        $this->transDate = $transDate;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setBaseDocId($baseDocId): void
    {
        $this->baseDocId = $baseDocId;
    }

    public function setTranId($tranId): void
    {
        $this->tranId = $tranId;
    }

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }
}
