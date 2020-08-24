<?php
#App\Plugins\Other\AmadoMaster\Admin\AdminController.php

namespace App\Plugins\Other\AmadoMaster\Admin;

use App\Http\Controllers\Controller;
use App\Plugins\Other\AmadoMaster\AppConfig;

class AdminController extends Controller
{
    public $plugin;

    public function __construct()
    {
        $this->plugin = new AppConfig;
    }
    public function index()
    {
        return view($this->plugin->pathPlugin.'::Admin',
            [
                
            ]
        );
    }
}
