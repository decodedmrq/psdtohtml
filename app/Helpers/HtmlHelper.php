<?php
/**
 * Created by IntelliJ IDEA.
 * User: mon.ls
 * Date: 11/7/2016
 * Time: 4:09 PM
 */

namespace App\Helpers;


use Illuminate\Support\Facades\Route;

class HtmlHelper
{
    public function active($arg, $class = 'active')
    {
        $currentRoute = Route::current()->getName();
        $currentRoute = substr($currentRoute, 0, strpos($currentRoute . '.test', '.'));
        if (is_string($arg)) {
            return ($currentRoute == $arg) ? $class : null;
        }

        return $arg ? $class : null;
    }
}
