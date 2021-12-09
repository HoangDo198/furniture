<?php

use App\Facades\PageTitleFacade;
use App\Supports\PageTitle;


if(!function_exists('page_title'))
{
    /**
     * @return PageTitle
     */
    function page_title ()
    {
        return PageTitleFacade::getFacadeRoot();
    }
}
