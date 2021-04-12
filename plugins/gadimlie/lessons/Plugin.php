<?php namespace Gadimlie\Lessons;

use Backend;
use Gadimlie\Lessons\Models\Lesson;
use System\Classes\PluginBase;

/**
 * lessons Plugin Information File
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
            'name'        => 'lessons',
            'description' => 'No description provided yet...',
            'author'      => 'gadimlie',
            'icon'        => 'icon-book'
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
            $items = Lesson::where('title', 'like', "%${query}%")
                        ->orWhere('description', 'like', "%${query}%")
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
                    'url'       => $controller->pageUrl('lessons/detailed', ['id' => $item->id]),
                    'thumb'     => optional($item->images)->first(), // Instance of System\Models\File
                    'relevance' => $relevance, // higher relevance results in a higher
                                               // position in the results listing
                    // 'meta' => 'data',       // optional, any other information you want
                                               // to associate with this result
                    // 'model' => $item,       // optional, pass along the original model
                ];
            });

    
            return [
                'provider' => 'Lessons', // The badge to display for this result
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
            'Gadimlie\Lessons\Components\Lesson' => 'lessons',
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
            'gadimlie.lessons.some_permission' => [
                'tab' => 'lessons',
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
            'lessons' => [
                'label'       => 'Ustad dərsləri',
                'url'         => Backend::url('gadimlie/lessons/lessons'),
                'icon'        => 'icon-book',
                'permissions' => ['gadimlie.lessons.*'],
                'order'       => 500,
            ],
        ];
    }
}
