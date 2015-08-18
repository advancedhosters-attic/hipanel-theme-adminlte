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

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    /**
     * {@inheritdoc}
     */
    protected $_items = [
        'themes' => [
            'advancedhosters-adminlte' => [
                'class' => 'advancedhosters\themes\adminlte\AdminLteTheme',
            ],
        ],
    ];
}
