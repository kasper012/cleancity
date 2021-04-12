<?php namespace Gadimlie\Residents\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Residents\Models\Resident as ModelsResident;

class Resident extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Resident Component',
            'description' => 'Residents of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $residents = ModelsResident::all();
        $this->page['residents'] = $residents;
    }
}
