<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Info;
use App\Stream;
use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    $stream = Stream::whereClient(Info::whereName('stream')->first()->value)->first();
    return view('index', compact('stream'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/signup', 'UserController@signup')->name('signup');

//Route::group(['namespace' => 'User'], function)


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('index', function(){
        $all = User::all();
        $top = User::where('lane1','top')->orWhere('lane2', 'top')->get();
        $mid = User::where('lane1','mid')->orWhere('lane2', 'mid')->get();
        $bot = User::where('lane1','bot')->orWhere('lane2', 'bot')->get();
        $sp = User::where('lane1','sp')->orWhere('lane2', 'sp')->get();
        $jg = User::where('lane1','jg')->orWhere('lane2', 'jg')->get();
        return view('admin.index', compact('all', 'top', 'mid', 'bot', 'sp', 'jg'));
    });

    Route::get('ban/{id}', function($id){
        $user = User::find($id);
        if($user->ban == 1) {
            $user->ban = 0;
        }
        else {
            $user->ban = 1;
//            return "Not Banned: ".$user;
        }
        $user->save();
        return redirect(route('member.index'));
    });

    Route::resource('member', 'UserController');
    Route::resource('stream', 'StreamController');
    Route::resource('info', 'InfoController');
});