<?php

namespace Webtize\NetsuitePhpSdk\DataModels;

class DeleteRecord
{
    private $deleteRecordId = null;
    private $type = null;
    private $deleteReasonCodeId = null;
    private $deletionReasonMemo = null;

    public function getArray()
    {
        $arr = [];
        if ($this->deleteRecordId != null) {
            $arr['deleteRecordId'] = $this->deleteRecordId;
        }
        if ($this->type != null) {
            $arr['type'] = $this->type;
        }
        if ($this->deleteReasonCodeId != null) {
            $arr['deleteReasonCodeId'] = $this->deleteReasonCodeId;
        }
        if ($this->deletionReasonMemo != null) {
            $arr['deletionReasonMemo'] = $this->deletionReasonMemo;
        }
        return $arr;
    }

    public function setDeleteRecordId($deleteRecordId): void
    {
        $this->deleteRecordId = $deleteRecordId;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function setDeleteReasonCodeId($deleteReasonCodeId): void
    {
        $this->deleteReasonCodeId = $deleteReasonCodeId;
    }

    public function setDeletionReasonMemo($deletionReasonMemo): void
    {
        $this->deletionReasonMemo = $deletionReasonMemo;
    }
}
