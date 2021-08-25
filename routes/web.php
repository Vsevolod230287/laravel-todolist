<?php
use App\Models\Todo;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::apiResource('todos', 'TodosController');
Route::apiResource('todolists', 'TodoListsController');
//Route::get('todos/{id}','TodosController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'HomeController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
