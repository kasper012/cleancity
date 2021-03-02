<?php namespace Gadimlie\Bsp\Models;

use Model;
/** *
*Bsp Model
 */
class bsp extends Model
{
    public $implement = [
      'System.Behaviors.SettingsModel',
      'RainLab.Translate.Behaviors.TranslatableModel'
    ];


    public $translatable = [
      
      'participants',

    ];    

    public $settingsCode = 'gadimlie_bsp_settings';

    public $settingsFields = 'fields.yaml';

}