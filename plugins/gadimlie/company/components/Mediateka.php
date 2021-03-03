<?php namespace Gadimlie\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Company\Models\Mediateka as Settings;
use October\Rain\Database\Model;

class Mediateka extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Mediateka Component',
            'description' => ''
        ];
    }

    public function defineProperties()
    {
        return [
            'Mediateka'  => [
                'title'        => 'Mediateka',
                'description'  => 'Description'
            ]
        ];
    }

        public function onRun()
    {
        $settings = Settings::instance();
        $mediateka = new Model();
        $mediateka->title = $settings->title;
        $mediateka->gallery = $settings->gallery;
        $mediateka->video = $settings->video;
        $mediateka->type = $settings->type;
        $mediateka->section = $settings->section;

        
        $this->page['mediateka'] = $mediateka;
    }
}
