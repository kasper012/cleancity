<?php namespace Gadimlie\Projects;

use Backend;
use System\Classes\PluginBase;

/**
 * projects Plugin Information File
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
            'name'        => 'projects',
            'description' => 'No description provided yet...',
            'author'      => 'gadimlie',
            'icon'        => 'icon-rocket'
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
            'Gadimlie\Projects\Components\Project' => 'projects',
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
            'gadimlie.projects.some_permission' => [
                'tab' => 'projects',
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
            'projects' => [
                'label'       => 'Layihələr',
                'url'         => Backend::url('gadimlie/projects/projects'),
                'icon'        => 'icon-rocket',
                'permissions' => ['gadimlie.projects.*'],
                'order'       => 500,
                'sideMenu' => [
                    'projects' => [
                        'label'       => 'Layihələr',
                        'icon'        => 'icon-files-o',
                        'url'         => Backend::url('gadimlie/projects/projects'),
                    ],
                ]
            ],
        ];
    }
}
