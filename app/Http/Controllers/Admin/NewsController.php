<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return('In news => Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return('In news => Create Form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return('In news => Store request');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return('In news => Show by ID');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return('In news => Edit Form by ID');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return('In news => Update request');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return('In news => Remove action');
    }
}
