<?php namespace Gadimlie\Projects\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Projects\Models\Project as ModelsProject;

class Project extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Project Component',
            'description' => 'Projects of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $projects = ModelsProject::all();
        $this->page['projects'] = $projects;
    }
}
