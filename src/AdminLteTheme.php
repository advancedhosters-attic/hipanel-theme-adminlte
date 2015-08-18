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

/**
 * Class for this theme.
 */
class AdminLteTheme extends \hipanel\themes\adminlte\AdminLteTheme
{
    public $label = 'AdvancedHosters AdminLte';

    public $assets = [
        'advancedhosters\themes\adminlte\AdvancedhostersAsset',
        'hipanel\frontend\assets\AppAsset',
        'hiqdev\assets\adminlte\AdminLteAsset',
    ];
}
