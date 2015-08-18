<?php

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
