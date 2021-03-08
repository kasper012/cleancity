<?php namespace Gadimlie\Medias\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Medias\Models\Media as ModelsMedia;
use October\Rain\Database\Model;

class Media extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Media Component',
            'description' => 'Mediafiles of Clean City'
        ];
    }

    public function defineProperties()
    {
        return [];

    }

    public function onRun() {
        $medias = ModelsMedia::all();
        $this->page['medias'] = $medias;
    }
}
