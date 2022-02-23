<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
TODO-MAIT kui paramseid vaja kaasa anda
    return Inertia::Render('Home',[
        'name' => 'Mait'
    ]);
*/

Route::get('login',[LoginController::class,'create'])->name('login');
Route::post('login',[LoginController::class,'store']);
Route::post('logout',[LoginController::class,'destroy'])->middleware('auth');
Route::middleware('auth')->group(function (){

Route::get('/', function () {
    return Inertia::Render('Home',[
        'time' => now()->toTimeString(),
        'users' => User::query()
            ->when(Request::input('search'),function ($query,$search){
                $query->where('name','like','%'.$search.'%');
            })
            ->paginate(10)
            ->withQueryString()
            ->through(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name
            ];
        }),
        'filters' =>Request::only(['search']),
        'can' => [
            'createUser' => Auth::user()->can('create',User::class)
        ]
    ]);
});
Route::get('/about', function () {
    return Inertia::Render('About');
});
Route::get('/contact', function () {
    return Inertia::Render('Contact');
});

Route::get('/create', function () {
    return Inertia::Render('User/Create');
})->can('create','App\Models\User');
Route::post('/create/new', function () {
    $attributes = Request::validate([
        'name'=>'required',
        'email'=>['required','email'],
        'password'=>'required',
    ]);
    User::create($attributes);
    return redirect('/');
});
});
