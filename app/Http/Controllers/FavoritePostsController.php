<?php

namespace App\Http\Controllers;

use App\Models\Favorite_Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoritePostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addposttosaves($id)
    {
        $user=Auth::user();
      return  Favorite_Posts::create([
            'user_id'=>$user->id,
            'post_id'=>$id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function removepostfromsaves($id)
    {
        $user=Auth::user();
        return  Favorite_Posts::where('user_id',$user->id)->where('post_id',$id)->delete();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function showpostfromsaves()
    {
        $user=Auth::user();
        return  Favorite_Posts::where('user_id',$user->id)->get();
    }

    /**
     * Display the specified resource.
     */
    public function show(Favorite_Posts $favorite_Posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favorite_Posts $favorite_Posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Favorite_Posts $favorite_Posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favorite_Posts $favorite_Posts)
    {
        //
    }
}
