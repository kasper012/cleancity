<?php namespace Gadimlie\Tenders;

use Backend;
use System\Classes\PluginBase;

/**
 * tenders Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'tenders',
            'description' => 'No description provided yet...',
            'author'      => 'gadimlie',
            'icon'        => 'icon-building-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Gadimlie\Tenders\Components\Tender' => 'tenders',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'gadimlie.tenders.some_permission' => [
                'tab' => 'tenders',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'tenders' => [
                'label'       => 'Tenderlər',
                'url'         => Backend::url('gadimlie/tenders/tenders'),
                'icon'        => 'icon-building-o',
                'permissions' => ['gadimlie.tenders.*'],
                'order'       => 500,
                'sideMenu' => [
                    'tenders' => [
                        'label'       => 'Tenderlər',
                        'icon'        => 'icon-files-o',
                        'url'         => Backend::url('gadimlie/tenders/tenders'),
                    ],
                ]
            ],
        ];
    }
}
