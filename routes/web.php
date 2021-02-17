<?php

use Illuminate\Support\Facades\Route;
use App\User;
//use App\Address;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', function(){
    /*
    #method 1
    $user = factory(User::class)->create();
    $user->address()->create([
        'country' => 'UAS'
    ]);
    #method 2
    $address = new \App\Address([
        'country' => 'China'
    ]);
    $address->user()->associate($user);
    $address->save();
    */
    $users = User::with('address')->get();
    return view('users.list', compact('users'));
});

Route::get('/address', function(){
    $addresses = Address::all();
    return view('users.address', compact('addresses'));
});