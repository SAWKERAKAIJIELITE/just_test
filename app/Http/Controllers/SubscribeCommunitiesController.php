<?php

namespace App\Http\Controllers;

use App\Models\Communities;
use App\Models\Speciality;
use App\Models\Subscribe_Communities;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeCommunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getmycommunities()
    {
        $user=Auth::user() ;
     $aa=   Subscribe_Communities::where('user_id',$user->id)->pluck('community_id');
       return  Communities::whereIn('id',$aa)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Subscribe_Communities $subscribe_Communities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribe_Communities $subscribe_Communities)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscribe_Communities $subscribe_Communities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribe_Communities $subscribe_Communities)
    {
        //
    }
}
