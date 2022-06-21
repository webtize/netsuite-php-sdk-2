<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class Contact
{
    private $entityId = null;
    private $companyId = null;
    private $firstName = null;
    private $lastName = null;
    private $phone = null;
    private $email = null;
    private $id = null;
    private $fax = null;
    private $comments = null;
    private $subsidiaryId = null;
    private $addressbookList = null;

    public function getArray()
    {
        $arr = [];
        if ($this->entityId != null) {
            $arr['entityId'] = $this->entityId;
        }
        if ($this->companyId != null) {
            $arr['companyId'] = $this->companyId;
        }
        if ($this->firstName != null) {
            $arr['firstName'] = $this->firstName;
        }
        if ($this->lastName != null) {
            $arr['lastName'] = $this->lastName;
        }
        if ($this->phone != null) {
            $arr['phone'] = $this->phone;
        }
        if ($this->email != null) {
            $arr['email'] = $this->email;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->fax != null) {
            $arr['fax'] = $this->fax;
        }
        if ($this->comments != null) {
            $arr['comments'] = $this->comments;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->addressbookList != null) {
            $arr['addressbookList'] = $this->addressbookList;
        }
        return $arr;
    }

    public function setEntityId($entityId): void
    {
        $this->entityId = $entityId;
    }

    public function setCompanyId($companyId): void
    {
        $this->companyId = $companyId;
    }

    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setFax($fax): void
    {
        $this->fax = $fax;
    }

    public function setComments($comments): void
    {
        $this->comments = $comments;
    }

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setAddressbookList($addressbookList): void
    {
        $this->addressbookList = $addressbookList;
    }
}
