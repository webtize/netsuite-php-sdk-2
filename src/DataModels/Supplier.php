<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class Supplier
{
    private $email = null;
    private $entityid = null;
    private $altEmail = null;
    private $id = null;
    private $firstName = null;
    private $lastName = null;
    private $companyName = null;
    private $addressbookList = null;
    private $fax = null;
    private $isPerson = null;
    private $phone = null;
    private $subsidiaryId = null;
    private $altPhone = null;
    private $mobilePhone = null;
    private $vatRegNumber = null;
    private $url = null;
    private $comments = null;
    private $currencyId = null;

    public function getArray()
    {
        $arr = [];
        if ($this->email != null) {
            $arr['email'] = $this->email;
        }
        if ($this->entityid != null) {
            $arr['entityid'] = $this->entityid;
        }
        if ($this->altEmail != null) {
            $arr['altEmail'] = $this->altEmail;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->firstName != null) {
            $arr['firstName'] = $this->firstName;
        }
        if ($this->lastName != null) {
            $arr['lastName'] = $this->lastName;
        }
        if ($this->companyName != null) {
            $arr['companyName'] = $this->companyName;
        }
        if ($this->addressbookList != null) {
            $arr['addressbookList'] = $this->addressbookList;
        }
        if ($this->fax != null) {
            $arr['fax'] = $this->fax;
        }
        if ($this->isPerson != null) {
            $arr['isPerson'] = $this->isPerson;
        }
        if ($this->phone != null) {
            $arr['phone'] = $this->phone;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->altPhone != null) {
            $arr['altPhone'] = $this->altPhone;
        }
        if ($this->mobilePhone != null) {
            $arr['mobilePhone'] = $this->mobilePhone;
        }
        if ($this->vatRegNumber != null) {
            $arr['vatRegNumber'] = $this->vatRegNumber;
        }
        if ($this->url != null) {
            $arr['url'] = $this->url;
        }
        if ($this->comments != null) {
            $arr['comments'] = $this->comments;
        }
        if ($this->currencyId != null) {
            $arr['currencyId'] = $this->currencyId;
        }
        return $arr;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setEntityid($entityid): void
    {
        $this->entityid = $entityid;
    }

    public function setAltEmail($altEmail): void
    {
        $this->altEmail = $altEmail;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setCompanyName($companyName): void
    {
        $this->companyName = $companyName;
    }

    public function setAddressbookList($addressbookList): void
    {
        $this->addressbookList = $addressbookList;
    }

    public function setFax($fax): void
    {
        $this->fax = $fax;
    }

    public function setIsPerson($isPerson): void
    {
        $this->isPerson = $isPerson;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setAltPhone($altPhone): void
    {
        $this->altPhone = $altPhone;
    }

    public function setMobilePhone($mobilePhone): void
    {
        $this->mobilePhone = $mobilePhone;
    }

    public function setVatRegNumber($vatRegNumber): void
    {
        $this->vatRegNumber = $vatRegNumber;
    }

    public function setUrl($url): void
    {
        $this->url = $url;
    }

    public function setComments($comments): void
    {
        $this->comments = $comments;
    }

    public function setCurrencyId($currencyId): void
    {
        $this->currencyId = $currencyId;
    }
}
