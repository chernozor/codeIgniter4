<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = ucfirst('welcome_message');

        return view('/templates/header', $data) . view('/' . 'welcome_message') . view('/templates/footer');
    }
}
