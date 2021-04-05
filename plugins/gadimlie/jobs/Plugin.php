<?php namespace Gadimlie\Jobs;

use Backend;
use System\Classes\PluginBase;

/**
 * jobs Plugin Information File
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
            'name'        => 'Vacancies',
            'description' => '',
            'author'      => 'gadimlie',
            'icon'        => 'icon-files-o'
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
            'Gadimlie\Jobs\Components\Job' => 'jobs',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'gadimlie.jobs.some_permission' => [
                'tab' => 'jobs',
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
            'jobs' => [
                'label'       => 'Vakansiyalar',
                'url'         => Backend::url('gadimlie/jobs/jobs'),
                'icon'        => 'icon-building-o',
                'permissions' => ['gadimlie.jobs.*'],
                'order'       => 500,
                'sideMenu' => [
                    'jobs' => [
                        'label'       => 'Vakansiyalar',
                        'icon'        => 'icon-building-o',
                        'url'         => Backend::url('gadimlie/jobs/jobs'),
                    ],
                ]
            ],
        ];
    }
}
