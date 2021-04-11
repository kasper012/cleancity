<?php namespace Gadimlie\Tenders;

use Backend;
use Gadimlie\Tenders\Models\Tender;
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
        \Event::listen('offline.sitesearch.query', function ($query) {

            // The controller is used to generate page URLs.
            $controller = \Cms\Classes\Controller::getController() ?? new \Cms\Classes\Controller();
    
            // Search your plugin's contents
            $items = Tender::where('title', 'like', "%${query}%")
                        ->orWhere('text', 'like', "%${query}%")
                        ->get();
    
            // Now build a results array
            $results = $items->map(function ($item) use ($query, $controller) {
    
                // If the query is found in the title, set a relevance of 2
                $relevance = mb_stripos($item->title, $query) !== false ? 2 : 1;
                
                // Optional: Add an age penalty to older results. This makes sure that
                // newer results are listed first.
                // if ($relevance > 1 && $item->created_at) {
                //    $ageInDays = $item->created_at->diffInDays(\Illuminate\Support\Carbon::now());
                //    $relevance -= \OFFLINE\SiteSearch\Classes\Providers\ResultsProvider::agePenaltyForDays($ageInDays);
                // }
    
                return [
                    'title'     => $item->title,
                    'text'      => $item->content,
                    'url'       => $controller->pageUrl('about/tender_detailed', ['id' => $item->id]),
                    'thumb'     => optional($item->images)->first(), // Instance of System\Models\File
                    'relevance' => $relevance, // higher relevance results in a higher
                                               // position in the results listing
                    // 'meta' => 'data',       // optional, any other information you want
                                               // to associate with this result
                    // 'model' => $item,       // optional, pass along the original model
                ];
            });

    
            return [
                'provider' => 'Tenders', // The badge to display for this result
                'results'  => $results,
            ];
        });
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
                'icon'        => 'icon-files-o',
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
