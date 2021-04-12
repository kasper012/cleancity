<?php namespace Gadimlie\Lessons\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Lessons\Models\Lesson as ModelsLesson;

class Lesson extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Lesson Component',
            'description' => 'Lessons of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $lessons = ModelsLesson::all();
        $this->page['lessons'] = $lessons;
    }
}
