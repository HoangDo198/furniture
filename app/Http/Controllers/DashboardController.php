<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function getIndex ()
    {
        page_title()->setTitle(trans('app_config/config::config.dashboard'));
        return view('backend.layouts.index');
    }
}
