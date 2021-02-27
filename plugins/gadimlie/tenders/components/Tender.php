<?php namespace Gadimlie\Tenders\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Tenders\Models\Tender as ModelsTender;

class Tender extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Tender Component',
            'description' => 'Tenders of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $tenders = ModelsTender::all();
        $this->page['tenders'] = $tenders;
    }
}
