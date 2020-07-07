<?php


namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $taskCode;
    public $jiraProject;
    public $description;
    public $type;
    public $priority;

    public $file;

    public function rules()
    {
        return [
            [['jiraProject', 'description', 'type', 'priority'], 'required'],
        ];
    }


    public function actionFile()
    {
        $fp = fopen('save.txt', 'a+');
        fwrite($fp, $this->taskCode . "|");
        fwrite($fp, $this->jiraProject . "|");
        fwrite($fp, $this->description . "|");
        fwrite($fp, $this->type . "|");
        fwrite($fp, $this->priority . "\n");
        fclose($fp);
        return $fp;

    }

    public function fileRead(){
        $fd = fopen("save.txt", 'r') or die("не удалось открыть файл");
        while(!feof($fd))
        {
            $str = htmlentities(fread($fd, 600));
            echo $str;
        }
        fclose($fd);
    }
}