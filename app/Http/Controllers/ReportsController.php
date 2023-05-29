<?php

namespace App\Http\Controllers;

use App\Models\Reports;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function report_on_post()
    {
        return 'hi';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function report_on_comment()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function delete_report_on_post()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function delete_report_on_comment()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reports $reports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reports $reports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reports $reports)
    {
        //
    }
}
