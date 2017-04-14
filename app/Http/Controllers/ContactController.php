<?php

namespace App\Http\Controllers;

class ContactController extends RenderController
{
    public function index()
    {
        $this->viewData([

        ]);

        return $this->renderView('contact.index');
    }
}
