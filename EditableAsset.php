<?php
/**
 * Created by Cominit
 * User: pham_vanhuy
 * Date: 5/22/18
 * Time: 08:17
 */

namespace cominit\editable;

use yii\web\AssetBundle;

class EditableAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $js = [
        'js/jquery-editable-select.js',
        'js/editable.js'];
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
        $this->css = ['css/jquery-editable-select.css'];
        parent::init();
    }
}
