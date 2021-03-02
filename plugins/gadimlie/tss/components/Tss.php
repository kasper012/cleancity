<?php namespace Gadimlie\Tss\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Tss\Models\Tss as Settings;
use October\Rain\Database\Model;

class Tss extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Tullantıdan sənətə sərgisi',
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
        $tss = new Model();
        $tss->name = $settings->name;

        $tss->participant = $settings->participant;
        

        

        $this->page['tss'] = $tss;
    }
}
