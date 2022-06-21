<?php

namespace Webtize\NetsuitePhpSdk\DataModels;


class Customer
{
    private $firstName = null;
    private $lastName = null;
    private $companyName = null;
    private $fax = null;
    private $email = null;
    private $altEmail = null;
    private $phone = null;
    private $altPhone = null;
    private $mobilePhone = null;
    private $categoryId = null;
    private $title = null;
    private $jobTitle = null;
    private $isPerson = null;
    private $vatRegNumber = null;
    private $entityStatusID = null;
    private $subsidiaryId = null;
    private $currencyId = null;
    private $customFields = null;
    private $addressbookList = null;
    private $id = null;


    public function getArray()
    {
        $arr = [];
        if ($this->firstName != null) {
            $arr['firstName'] = $this->firstName;
        }
        if ($this->lastName != null) {
            $arr['lastName'] = $this->lastName;
        }
        if ($this->companyName != null) {
            $arr['companyName'] = $this->companyName;
        }
        if ($this->fax != null) {
            $arr['fax'] = $this->fax;
        }
        if ($this->email != null) {
            $arr['email'] = $this->email;
        }
        if ($this->altEmail != null) {
            $arr['altEmail'] = $this->altEmail;
        }
        if ($this->phone != null) {
            $arr['phone'] = $this->phone;
        }
        if ($this->altPhone != null) {
            $arr['altPhone'] = $this->altPhone;
        }
        if ($this->mobilePhone != null) {
            $arr['mobilePhone'] = $this->mobilePhone;
        }
        if ($this->categoryId != null) {
            $arr['categoryId'] = $this->categoryId;
        }
        if ($this->title != null) {
            $arr['title'] = $this->title;
        }
        if ($this->jobTitle != null) {
            $arr['jobTitle'] = $this->jobTitle;
        }
        if ($this->isPerson != null) {
            $arr['isPerson'] = $this->isPerson;
        }
        if ($this->vatRegNumber != null) {
            $arr['vatRegNumber'] = $this->vatRegNumber;
        }
        if ($this->entityStatusID != null) {
            $arr['entityStatusID'] = $this->entityStatusID;
        }
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->currencyId != null) {
            $arr['currencyId'] = $this->currencyId;
        }
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        if ($this->addressbookList != null) {
            $arr['addressbookList'] = $this->addressbookList;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        return $arr;
    }

    /**
     * @return null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param null $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param null $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return null
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param null $companyName
     */
    public function setCompanyName($companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * @return null
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param null $fax
     */
    public function setFax($fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param null $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return null
     */
    public function getAltEmail()
    {
        return $this->altEmail;
    }

    /**
     * @param null $altEmail
     */
    public function setAltEmail($altEmail): void
    {
        $this->altEmail = $altEmail;
    }

    /**
     * @return null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param null $phone
     */
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @return null
     */
    public function getAltPhone()
    {
        return $this->altPhone;
    }

    /**
     * @param null $altPhone
     */
    public function setAltPhone($altPhone): void
    {
        $this->altPhone = $altPhone;
    }

    /**
     * @return null
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param null $mobilePhone
     */
    public function setMobilePhone($mobilePhone): void
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * @return null
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param null $categoryId
     */
    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return null
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return null
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @param null $jobTitle
     */
    public function setJobTitle($jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }

    /**
     * @return null
     */
    public function getIsPerson()
    {
        return $this->isPerson;
    }

    /**
     * @param null $isPerson
     */
    public function setIsPerson($isPerson): void
    {
        $this->isPerson = $isPerson;
    }

    /**
     * @return null
     */
    public function getVatRegNumber()
    {
        return $this->vatRegNumber;
    }

    /**
     * @param null $vatRegNumber
     */
    public function setVatRegNumber($vatRegNumber): void
    {
        $this->vatRegNumber = $vatRegNumber;
    }

    /**
     * @return null
     */
    public function getEntityStatusID()
    {
        return $this->entityStatusID;
    }

    /**
     * @param null $entityStatusID
     */
    public function setEntityStatusID($entityStatusID): void
    {
        $this->entityStatusID = $entityStatusID;
    }

    /**
     * @return null
     */
    public function getSubsidiaryId()
    {
        return $this->subsidiaryId;
    }

    /**
     * @param null $subsidiaryId
     */
    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    /**
     * @return null
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * @param null $currencyId
     */
    public function setCurrencyId($currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    /**
     * @return null
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param null $customFields
     */
    public function setCustomFields($customFields): void
    {
        $this->customFields = $customFields;
    }

    /**
     * @return null
     */
    public function getAddressbookList()
    {
        return $this->addressbookList;
    }

    /**
     * @param null $addressbookList
     */
    public function setAddressbookList($addressbookList): void
    {
        $this->addressbookList = $addressbookList;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


}
