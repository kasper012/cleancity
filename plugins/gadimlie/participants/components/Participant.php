<?php namespace Gadimlie\Participants\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Participants\Models\Participant as ModelsParticipant;

class Participant extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Participant Component',
            'description' => 'Participants of Waste to art'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $participants = ModelsParticipant::all();
        $this->page['participants'] = $participants;
    }
}
