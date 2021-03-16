<?php namespace Gadimlie\Tss;
use Backend;
use System\Classes\PluginBase;

/**
 * tss Plugin Information File
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
            'name' => 'Tullantıdan sənətə sərgisi',
            'description' => 'Tss',
            'author' => 'gadimlie',
            'icon' => 'icon-building',
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
            'Gadimlie\Tss\Components\Tss' => 'Tss',
            // 'Gadimlie\Company\Components\SubmitContactForm' => 'SubmitContactForm',
        ];
    }

    public function registerSettings()
    {
        return [
            'tss' => [
                'label' => 'Tullantıdan sənətə sərgisi',
                'description' => '',
                'category' => 'Gadimlie Studio',
                'class' => 'Gadimlie\Tss\Models\Tss',
                'order' => 100,
                'icon' => 'icon-envira',
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
            'gadimlie.tss.some_permission' => [
                'tab' => 'tss',
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
