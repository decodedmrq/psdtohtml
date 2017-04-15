<?php

namespace App\Http\Controllers;

class ContactController extends RenderController
{
    public function index()
    {
        return $this->renderView('contact.index');
    }
}
