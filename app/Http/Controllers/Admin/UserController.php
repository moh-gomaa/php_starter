<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function displayUserName(): string
    {
        return 'Mohamed Gomaa';
    }
}
