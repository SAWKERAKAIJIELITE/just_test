<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function report_on_post(Request $request,$id)
    {
        $user=Auth::user();
        $user=User::find($user->id);
 $post=Post::find($id);
$d=Reports::create([

    'type_id'=>$user->id,
    'type_type'=>'post',


]);
$r=$post->value('reports_number');
$b=$post->update(['reports_number'=>$r+1]);
return $d;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function report_on_comment(Request $request,$id)
    {
        $user=Auth::user();
        $user=User::find($user->id);
 $post=Comments::find($id);
 $d=Reports::create([

    'type_id'=>$user->id,
    'type_type'=>'comment',


]);
$r=$post->value('reports_number');
$b=$post->update(['reports_number'=>$r+1]);
return $d;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function delete_report_on_post($id)
    {
    
        $user=Auth::user();
        $user=User::find($user->id);
        Reports::where('type_type','post')->where('type_id',$user->id)->delete();
        $aaa= $post=Post::find($id);
                $r=$aaa->value('reports_number');

        $b=$aaa->update(['reports_number'=>$r-1]);
return 'suc';
    }

    /**
     * Display the specified resource.
     */
    public function delete_report_on_comment($id)
    {
        $user=Auth::user();
        $user=User::find($user->id);
        Reports::where('type_type','comment')->where('type_id',$user->id)->delete();
        $aaa= $post=Comments::find($id);
        $r=$aaa->value('reports_number');

$b=$aaa->update(['reports_number'=>$r-1]);
return 'suc';
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
