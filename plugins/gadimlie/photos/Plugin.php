<?php namespace Gadimlie\Photos;

use Backend;
use System\Classes\PluginBase;

/**
 * photos Plugin Information File
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
            'name'        => 'photos',
            'description' => '',
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
            'Gadimlie\Photos\Components\Photo' => 'photos',
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
            'gadimlie.photos.some_permission' => [
                'tab' => 'photos',
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
            'photos' => [
                'label'       => 'Photolar',
                'url'         => Backend::url('gadimlie/photos/photos'),
                'icon'        => 'icon-camera',
                'permissions' => ['gadimlie.photos.*'],
                'order'       => 500,
                'sideMenu' => [
                    'photos' => [
                        'label'       => 'Photolar',
                        'icon'        => 'icon-files-o',
                        'url'         => Backend::url('gadimlie/photos/photos'),
                    ],
                ]
            ],
        ];
    }
}
