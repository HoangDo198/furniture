<?php

namespace App\Supports;

class LoadHelpers
{
    public static function loadModuleHelper ($dir)
    {
        $helpers = \File::glob($dir.'/../Helpers/*.php');
        foreach ($helpers as $helper) {
            require_once $helper;
        }
    }
}
