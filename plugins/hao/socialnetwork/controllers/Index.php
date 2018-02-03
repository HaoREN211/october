<?php namespace Hao\Socialnetwork\Controllers;

use Illuminate\Support\Facades\Lang;
use BackendMenu;
use Backend\Classes\Controller;

/**
 * Index Back-end Controller
 */
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Hao.Socialnetwork', 'socialnetwork', 'index');
    }

    /**
     * Display index.
     */
    public function index()
    {
        $this->pageTitle = Lang::get('hao.socialnetwork::lang.plugin.name');
    }

}
