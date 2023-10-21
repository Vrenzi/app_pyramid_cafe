<?php

use App\Models\Menu;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'MenuController2@home');

Route::resource('/menu', 'MenuController2');


Route::get('/gallery', function () {
    return view('Pyramid.gallery');
});

Route::get('/reservation', function () {
    return view('Pyramid.reservation');
});

Route::get('/about', function () {
    return view('Pyramid.about');
});

Route::get('/contact', function () {
    return view('Pyramid.contact');
});




Route::get('/menus/shows', 'MenuController@show');





Route::get('/report', 'ReportController@index')->middleware('auth');


Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');
Route::post('/logout', 'LoginController@logout');


// Route::resource('/pembayaran', 'TransactionController2');
Route::get('/pemesanan/{no_table}', 'TransactionController2@index');
Route::post('/pemesanan', 'TransactionController2@store');



Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {
    //Route::get('/', 'AppController@index');
    Route::get('/', 'DashboardController@index')->middleware('auth');;
    Route::get('/menus/shows', 'MenuController@show');
    Route::resource('/menu', 'MenuController')->middleware('auth')->missing(fn () => redirect()->back());

    Route::resource('/user', 'UserController')->middleware('auth')->missing(fn () => redirect()->back());
    Route::post('/user/edit/{user}', 'UserController@edit')->middleware('auth')->name('user.edit');
    Route::get('/user/edit/{user}', 'UserController@edit')->middleware('auth');
    Route::post('/user/delete', 'UserController@destroy')->middleware('auth');

    Route::get('/user/edit/{user}', function (User $user) {
        if (Auth::user()->level_id !== $user->level_id) {
            return redirect()->back();
        }
        return view('account.edit', [
            'user' => $user->with('level')->where('id', $user->id)->get()
        ]);
    })->middleware('auth');

    Route::resource('/transaction', 'TransactionController')->middleware('auth')->missing(fn () => redirect()->back());
    Route::post('/transaction/add', 'TransactionController@store')->middleware('auth')->missing(fn () => redirect()->back());
    Route::get('/transactions/{id}', 'TransactionController@update')->name('transactions.update');


    // Route::get('/invoice/{transaction}', function (Transaction $transaction) {
    //     return View('transaction.invoice', [
    //         'data' => $transaction->with(['transaction_details', 'transaction_details.menu', 'user'])->where('id',$transaction->id)->get()
    //     ]);
    // });

    Route::get('/invoice/{no_order}', [TransactionController::class, 'invoice'])->name('invoice');

    Route::get('/activityLog', [ActivityLogController::class, 'index']);

    Route::resource('/chef', 'ChefController')->middleware('auth')->missing(fn () => redirect()->back());
    Route::get('/chef/show/{id}', 'ChefController@show')->middleware('auth')->missing(fn () => redirect()->back());
    Route::patch('/update-status/{transaction}', 'ChefController@updateStatus')->name('update.status');
});
