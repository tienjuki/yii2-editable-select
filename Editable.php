<?php
/**
 * Created by PhpStorm.
 * User: tienphan
 * Date: 7/17/18
 * Time: 2:06 PM
 */
namespace cominit\editable;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class Editable extends InputWidget
{
    public $data;

    public function run()
    {
        parent::run();
        $view = $this->getView();
        EditableAsset::register($view);
        echo Html::activeTextInput($this->model, $this->attribute,['class' => 'form-control']);
        $id = Html::getInputId($this->model,$this->attribute);
        $data = $this->getClientOption();
        $view->registerJs("$('#$id').editable({filter: false,data:$data})");
    }

    protected function getClientOption(){
        return Json::encode($this->data);
    }

}