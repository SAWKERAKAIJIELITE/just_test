<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\CommunitiesController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\FavoritePostsController;
use App\Http\Controllers\FollowPageController;
use App\Http\Controllers\InviteController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RequestMediaController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Models\Communities;
use App\Http\Controllers\SubscribeCommunitiesController;
use App\Models\Favorite_Posts;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('getallinvites',[InviteController::class,'getallinvites']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('create',[UserController::class,'create_user']);
Route::post('login',[UserController::class,'login']);
Route::get('getallusers',[UserController::class,'getallusers']);
Route::middleware('auth:sanctum')->post('student',[StudentController::class,'student_user']);
Route::middleware('auth:sanctum')->post('expert',[ExpertController::class,'expert_user']);
Route::middleware('auth:sanctum')->get('getall{id}',[UserController::class,'getall']);
Route::middleware('auth:sanctum')->post('create_page',[PageController::class,'create_page']);
Route::middleware('auth:sanctum')->get('get_my_pages',[PageController::class,'get_my_pages']);
Route::middleware('auth:sanctum')->post('edit_my_page{id}',[PageController::class,'edit_my_page']);
Route::middleware('auth:sanctum')->get('delete_page{id}',[PageController::class,'delete_page']);
Route::middleware('auth:sanctum')->get('follow_page{id}',[FollowPageController::class,'follow_page']);
Route::middleware('auth:sanctum')->get('unfollowpage{id}',[FollowPageController::class,'unfollowpage']);
Route::middleware('auth:sanctum')->get('getmyfollowpages',[FollowPageController::class,'getmyfollowpages']);
Route::middleware('auth:sanctum')->get('add_friend{id}',[RequestMediaController::class,'add_friend']);
Route::middleware('auth:sanctum')->post('invie_friend_to_page{id}',[InviteController::class,'invie_friend_to_page']);
Route::middleware('auth:sanctum')->post('accept_friend{id}',[RequestMediaController::class,'accept_friend']);
Route::middleware('auth:sanctum')->get('getrequeststome',[RequestMediaController::class,'getrequeststome']);
Route::middleware('auth:sanctum')->get('getrequeststopeople',[RequestMediaController::class,'getrequeststopeople']);
Route::middleware('auth:sanctum')->get('invitetopage{id}',[RequestMediaController::class,'invitetopage']);
Route::get('getmediapages',[PageController::class,'getmediapages']);
Route::middleware('auth:sanctum')->get('getmyinvitestome',[InviteController::class,'getmyinvitestome']);
Route::middleware('auth:sanctum')->get('getmyinvitestopeople',[InviteController::class,'getmyinvitestopeople']);
Route::middleware('auth:sanctum')->post('accept_invite{id}',[InviteController::class,'accept_invite']);
Route::middleware('auth:sanctum')->post('createSpeciality',[SpecialityController::class,'createSpeciality']);
Route::middleware('auth:sanctum')->get('getmyspechilities',[SpecialityController::class,'getmyspechilities']);
Route::middleware('auth:sanctum')->get('deletemyspechilities{id}',[SpecialityController::class,'deletemyspechilities']);
Route::middleware('auth:sanctum')->post('editmyspechilities{id}',[SpecialityController::class,'editmyspechilities']);
Route::middleware('auth:sanctum')->post('create_post_from_profile',[PostController::class,'create_post_from_profile']);
Route::middleware('auth:sanctum')->post('create_post_from_page{id}',[PostController::class,'create_post_from_page']);
Route::middleware('auth:sanctum')->get('get_myprofile_posts',[PostController::class,'get_myprofile_posts']);
Route::middleware('auth:sanctum')->get('get_mypage_posts{id}',[PostController::class,'get_mypage_posts']);
Route::middleware('auth:sanctum')->post('edit_myprofile_posts{id}',[PostController::class,'edit_myprofile_posts']);
Route::middleware('auth:sanctum')->post('edit_mypage_posts/{page_id}/{post_id}',[PostController::class,'edit_mypage_posts']);
Route::middleware('auth:sanctum')->get('delete_profile_post{id}',[PostController::class,'delete_profile_post']);
Route::middleware('auth:sanctum')->get('delete_page_post/{page_id}/{post_id}',[PostController::class,'delete_page_post']);
Route::middleware('auth:sanctum')->post('add_photos_to_post_from_profile{id}',[PostController::class,'add_photos_to_post_from_profile']);
Route::middleware('auth:sanctum')->post('add_videos_to_post_from_profile{id}',[PostController::class,'add_videos_to_post_from_profile']);
Route::middleware('auth:sanctum')->post('create_community',[CommunitiesController::class,'create_community']);
Route::middleware('auth:sanctum')->get('show_community',[CommunitiesController::class,'show_community']);
Route::middleware('auth:sanctum')->get('getmycommunities',[SubscribeCommunitiesController::class,'getmycommunities']);
Route::middleware('auth:sanctum')->post('create_post_from_community{id}',[PostController::class,'create_post_from_community']);
Route::middleware('auth:sanctum')->post('edit_mycommunity_posts/{community_id}/{post_id}',[PostController::class,'edit_mycommunity_posts']);
Route::middleware('auth:sanctum')->get('delete_community_post/{community_id}/{post_id}',[PostController::class,'delete_community_post']);
Route::middleware('auth:sanctum')->get('addposttosaves{id}',[FavoritePostsController::class,'addposttosaves']);
Route::middleware('auth:sanctum')->get('removepostfromsaves{id}',[FavoritePostsController::class,'removepostfromsaves']);
Route::middleware('auth:sanctum')->get('showpostfromsaves',[FavoritePostsController::class,'showpostfromsaves']);
Route::middleware('auth:sanctum')->post('create_commente_on_post{id}',[CommentsController::class,'create_commente_on_post']);
Route::middleware('auth:sanctum')->get('delete_commente_on_post/{post_id}/{comment_id}',[CommentsController::class,'delete_commente_on_post']);
