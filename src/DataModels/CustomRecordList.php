<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class CustomRecordList
{
    private $name = null;
    private $recTypeId = null;
    private $id = null;
    private $customFields = null;

    public function getArray()
    {
        $arr = [];
        if ($this->name != null) {
            $arr['name'] = $this->name;
        }
        if ($this->recTypeId != null) {
            $arr['recTypeId'] = $this->recTypeId;
        }
        if ($this->id != null) {
            $arr['id'] = $this->id;
        }
        if ($this->customFields != null) {
            $arr['customFields'] = $this->customFields;
        }
        return $arr;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setRecTypeId($recTypeId): void
    {
        $this->recTypeId = $recTypeId;
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
