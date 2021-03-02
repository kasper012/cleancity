<?php namespace Gadimlie\Tss\Models;

use Model;
/** *
*Tss Model
 */
class tss extends Model
{
    public $implement = [
      'System.Behaviors.SettingsModel',
      'RainLab.Translate.Behaviors.TranslatableModel'
    ];


    public $translatable = [
      
      'participants',

    ];    

    public $settingsCode = 'gadimlie_tss_settings';

    public $settingsFields = 'fields.yaml';

}