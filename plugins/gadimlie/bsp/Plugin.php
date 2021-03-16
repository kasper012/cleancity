<?php namespace Gadimlie\Bsp;
use Backend;
use System\Classes\PluginBase;

/**
 * bsp Plugin Information File
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
            'name' => 'Balaxanı Sənayə Parkı',
            'description' => 'Bsp',
            'author' => 'gadimlie',
            'icon' => 'icon-tree',
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
            'Gadimlie\Bsp\Components\Bsp' => 'Bsp',
            // 'Gadimlie\Bsp\Components\SubmitContactForm' => 'SubmitContactForm',
        ];
    }

    public function registerSettings()
    {
        return [
            'bsp' => [
                'label' => 'Balaxanı sənayə parkı',
                'description' => '',
                'category' => 'Gadimlie Studio',
                'class' => 'Gadimlie\Bsp\Models\Bsp',
                'order' => 100,
                'icon' => 'icon-tree',
            ],
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
            'gadimlie.bsp.some_permission' => [
                'tab' => 'bsp',
                'label' => 'Some permission',
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

        ];
    }
}
