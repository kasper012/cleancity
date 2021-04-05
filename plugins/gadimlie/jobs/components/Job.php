<?php namespace Gadimlie\Jobs\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Jobs\Models\Job as ModelsJob;

class Job extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Vacancies component',
            'description' => 'Vacancies of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $jobs = ModelsJob::all();
        $this->page['jobs'] = $jobs;
    }
}
