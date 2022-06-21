<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class PurchaseOrder
{
    private $id = null;
    private $tranDate = null;
    private $customFields = null;
    private $subsidiaryId = null;
    private $locationId = null;
    private $currencyId = null;
    private $approvalStatusId = null;
    private $supplierId = null;
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
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->locationId != null) {
            $arr['locationId'] = $this->locationId;
        }
        if ($this->currencyId != null) {
            $arr['currencyId'] = $this->currencyId;
        }
        if ($this->approvalStatusId != null) {
            $arr['approvalStatusId'] = $this->approvalStatusId;
        }
        if ($this->supplierId != null) {
            $arr['supplierId'] = $this->supplierId;
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

    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    public function setCurrencyId($currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function setApprovalStatusId($approvalStatusId): void
    {
        $this->approvalStatusId = $approvalStatusId;
    }

    public function setSupplierId($supplierId): void
    {
        $this->supplierId = $supplierId;
    }

    public function setRows($rows): void
    {
        $this->rows = $rows;
    }
}
