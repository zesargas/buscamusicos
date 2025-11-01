<?php

namespace App\Account\Controllers;

use Illuminate\Http\Request;


readonly class LoginController
{

    public function __invoke(Request $request)
    {
        dd("hola");
    }
}
