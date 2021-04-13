<?php namespace Gadimlie\Bsp\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Bsp\Models\Bsp as Settings;
use October\Rain\Database\Model;

class Bsp extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Balaxanı sənayə parkı',
            'description' => '',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        $bsp = new Model();
        $bsp->name = $settings->name;

        $bsp->participant = $settings->participant;
        $bsp->document = $settings->document;
        

        

        $this->page['bsp'] = $bsp;
    }
}
