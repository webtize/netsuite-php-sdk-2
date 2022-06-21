<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class CustomerPayment
{
    private $sum = null;
    private $applyDate = null;
    private $locationId = null;
    private $tranDate = null;
    private $custmerId = null;
    private $invoiceId = null;
    private $departmentId = null;
    private $paymentMethodId = null;
    private $id = null;
    private $customFields = null;

    public function getArray()
    {
        $arr = [];
        if ($this->sum != null) {
            $arr['sum'] = $this->sum;
        }
        if ($this->applyDate != null) {
            $arr['applyDate'] = $this->applyDate;
        }
        if ($this->locationId != null) {
            $arr['locationId'] = $this->locationId;
        }
        if ($this->tranDate != null) {
            $arr['tranDate'] = $this->tranDate;
        }
        if ($this->custmerId != null) {
            $arr['custmerId'] = $this->custmerId;
        }
        if ($this->invoiceId != null) {
            $arr['invoiceId'] = $this->invoiceId;
        }
        if ($this->departmentId != null) {
            $arr['departmentId'] = $this->departmentId;
        }
        if ($this->paymentMethodId != null) {
            $arr['paymentMethodId'] = $this->paymentMethodId;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        return $arr;
    }

    public function setSum($sum): void
    {
        $this->sum = $sum;
    }

    public function setApplyDate($applyDate): void
    {
        $this->applyDate = $applyDate;
    }

    public function setLocationId($locationId): void
    {
        $this->locationId = $locationId;
    }

    public function setTranDate($tranDate): void
    {
        $this->tranDate = $tranDate;
    }

    public function setCustmerId($custmerId): void
    {
        $this->custmerId = $custmerId;
    }

    public function setInvoiceId($invoiceId): void
    {
        $this->invoiceId = $invoiceId;
    }

    public function setDepartmentId($departmentId): void
    {
        $this->departmentId = $departmentId;
    }

    public function setPaymentMethodId($paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }
}
