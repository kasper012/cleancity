<?php namespace Gadimlie\Photos\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Photos\Models\Photo as ModelsPhoto;

class Photo extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Photo Component',
            'description' => 'Photos of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $photos = ModelsPhoto::all();
        $this->page['photos'] = $photos;
    }
}
