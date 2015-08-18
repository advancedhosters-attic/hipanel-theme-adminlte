<?php

namespace advancedhosters\themes\adminlte;

class AdvancedhostersAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@advancedhosters/themes/adminlte/assets';

    public $css = [
        'css/hipanel.php',
    ];

    public $depends = [
        'advancedhosters\assets\advancedhosters\AdvancedhostersAsset',
    ];
}
