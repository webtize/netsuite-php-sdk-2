<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class Employee
{
    private $email = null;
    private $id = null;
    private $firstName = null;
    private $lastName = null;
    private $subsidiaryId = null;
    private $phone = null;

    public function getArray()
    {
        $arr = [];
        if ($this->email != null) {
            $arr['email'] = $this->email;
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
        if ($this->subsidiaryId != null) {
            $arr['subsidiaryId'] = $this->subsidiaryId;
        }
        if ($this->phone != null) {
            $arr['phone'] = $this->phone;
        }
        return $arr;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
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

    public function setSubsidiaryId($subsidiaryId): void
    {
        $this->subsidiaryId = $subsidiaryId;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }
}
