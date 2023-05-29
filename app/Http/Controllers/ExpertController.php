<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class ExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function expert_user(Request $request)
    {
$user=Auth::user();
if($user->expert_id==null)
 {$expert=Expert::create([
    'section'=>$request->section,
    'start_year'=>$request->start_year,

    'work_at_company'=>$request->work_at_company,
    'years_as_expert'=>$request->years_as_expert ,
    'companies'=>$request->companies ,


]);
$user=User::where('id',$user->id)->update([
    'expert_id'=>$expert->id
]);}
else
return ' already expert';

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
    public function show(Expert $expert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expert $expert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expert $expert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expert $expert)
    {
        //
    }
}
