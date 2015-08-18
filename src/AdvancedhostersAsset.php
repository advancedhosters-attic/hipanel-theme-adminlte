<?php

/*
 * AdvancedHosters AdminLte Theme for HiPanel
 *
 * @link      https://github.com/advancedhosters/hipanel-theme-adminlte
 * @package   hipanel-theme-adminlte
 * @license   No license
 * @copyright Copyright (c) 2015, AdvancedHosters (https://advancedhosters.com/)
 */

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
