<?php namespace Hao\SocialNetwork\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Meetic Back-end Controller
 */
class Meetic extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Hao.SocialNetwork', 'socialnetwork', 'meetic');
    }
}
