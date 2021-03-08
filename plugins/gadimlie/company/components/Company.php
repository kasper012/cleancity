<?php namespace Gadimlie\Company\Components;

use Cms\Classes\ComponentBase;
use Gadimlie\Company\Models\Company as Settings;
use October\Rain\Database\Model;

class Company extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Компания',
            'description' => 'Использовaние данных компании',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        $company = new Model();
        $company->name = $settings->name;
        
        $company->structure_person = $settings->structure_person;
        $company->structure_image = $settings->structure_image;
        $company->appeal_board = $settings->appeal_board;

        $company->documents = $settings->documents;
        $company->certificates = $settings->certificates;
        
        $company->receive = $settings->receive;
        $company->slogan = $settings->slogan;

        $this->page['company'] = $company;
    }
}
