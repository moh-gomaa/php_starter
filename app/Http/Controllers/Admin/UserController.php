<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;
use stdClass;

class UserController extends BaseController
{
    public function displayUserName(): string
    {
        return 'Mohamed Gomaa';
    }
    public function Index(): View
    {
        return view('welcome');
    }
    public function Index1(): View{
        //Just a basic view without any parameters
        return view('admin\viewTest1');
    }
    public function Index2(): View{
        //Pass parameters to view using with keyword
        return view('admin\viewTest2')->with(['name' => 'Mohamed Gomaa', 'age' => 24]);
    }
    public function Index3(): View{
        //Pass data to view with object
        $obj = new stdClass();
        $obj->name = 'Mohamed Gomaa';
        $obj->age = 24;

        return view('admin\viewTest3', compact('obj'));
    }
    public function Index4(): View{
        //Pass data to view with array
        $data = [];
        $data['name'] = 'Mohamed Gomaa';
        $data['age'] = 24;

        return view('admin\viewTest4', $data);
    }
}
