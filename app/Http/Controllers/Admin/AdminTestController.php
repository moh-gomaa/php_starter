<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminTestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['printString5']);
    }

    public function printString1(): string
    {
        return 'This is string number 1';
    }

    public function printString2(): string
    {
        return 'This is string number 2';
    }

    public function printString3(): string
    {
        return 'This is string number 3';
    }

    public function printString4(): string
    {
        return 'This is string number 4';
    }

    public function printString5(): string
    {
        return 'This is string number 5';
    }
}
