<?php

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
