<?php
/**
 * Created by IntelliJ IDEA.
 * User: nuocg
 * Date: 4/13/2017
 * Time: 11:46 AM
 */

namespace App\Http\Controllers;

class RenderController extends Controller
{
    protected $viewData = [];

    protected function viewData(array $items)
    {
        $this->viewData = array_merge($this->viewData, $items);
    }

    protected function renderView($viewPath)
    {
        return view($viewPath, $this->viewData);
    }
}