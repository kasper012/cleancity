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
        
        // $company->about = $settings->about;
        // $company->receive = $settings->receive;
        
        // $company->normativ = $settings->normativ;
        // $company->finance = $settings->finance;
        // $company->tender = $settings->tender;

        // $company->name = $settings->name;
        // $company->email = $settings->email;
        // $company->phone = $settings->phone;
        // $company->google_map = $settings->google_map;
        // $company->address = $settings->address;


        $this->page['company'] = $company;
    }
}
