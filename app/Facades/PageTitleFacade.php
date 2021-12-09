<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Supports\PageTitle;

class PageTitleFacade extends Facade
{
    protected static function getFacadeAccessor ()
    {
        return PageTitle::class;
    }
}
