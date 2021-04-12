<?php namespace Gadimlie\Participants;

use Backend;
use System\Classes\PluginBase;

/**
 * participants Plugin Information File
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
            'name'        => 'participants',
            'description' => '...',
            'author'      => 'gadimlie',
            'icon'        => 'icon-envira'
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
            'Gadimlie\Participants\Components\Participant' => 'participants',
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
            'gadimlie.participants.some_permission' => [
                'tab' => 'participants',
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
            'participants' => [
                'label'       => 'İştirakçılar',
                'url'         => Backend::url('gadimlie/participants/participants'),
                'icon'        => 'icon-envira',
                'permissions' => ['gadimlie.participants.*'],
                'order'       => 500,

            ],
        ];
    }
}
