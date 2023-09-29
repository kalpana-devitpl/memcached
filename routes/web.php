<?php

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

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
    $user = User::paginate(10);
    Cache::put('users', $user);
    return view('welcome');
});

Route::get('memcache', function(){
    // Store data in the cache
    Cache::put('key', 'This is the cache date');
    // Check the cache is present or not
    if (Cache::has('key')){
        //Get data from cache
        return Cache::get('key');
    }else{
        return 'Cache is not defined!';
    }
});
