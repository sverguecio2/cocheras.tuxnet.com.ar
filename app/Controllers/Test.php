<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Test extends BaseController
{
    public function index()
    {
        echo 'Saludos desde el controlador Test';
    }
}
