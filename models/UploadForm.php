<?php


namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
        public $taskCode;
        public $taskName;
        public $status;
        public $priority;
        public $type;


    public function rules()
    {
        return [
            [['taskCode', 'taskName', 'status', 'priority','type'], 'required'],
        ];
    }

    public function upload()
    {
    }
}