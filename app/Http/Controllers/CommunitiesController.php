<?php

namespace App\Http\Controllers;

use App\Models\Communities;
use Illuminate\Http\Request;

class CommunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create_community(Request $request)
    {
       return Communities::create($request->all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show_community()
    {
    return Communities::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Communities $communities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Communities $communities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Communities $communities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Communities $communities)
    {
        //
    }
}
