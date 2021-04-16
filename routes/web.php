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

//use App\Http\Controllers\ProfileController;
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
/// admin dashboard
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard')->middleware('auth');

//////// lili code ////////////
Route::get('/login_template', function () {
    return view('login_template');
});

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/begleit', function () {
    return view('begleit');
});

Route::get('/overview_profile', function () {
    return view('overview_profile');
});

Route::get('/begleit', 'BegleitController@select_category')->name('begleit.select_category');
///////////////////////////////

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
    })->name('upgrade');

    ////////  lili ///////////
    /*Route::get('/profile_invest', function () {
        return view('profile_invest');
    });*/
    Route::get('/chat', function () {
        return view('chat');
    });

    //Route::get('/edit_profile','ProfileController@index');
    Route::get('/edit_profile/{option}','ProfileController@index')->name('profile.option');
    Route::get('/profile_invest/{step}', 'Profile_investController@index')->name('profile.invest');
    /////////////////////////////

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

/************************************** lili code *****************************/
////////////////// post ////////////
Route::post('/begleit', 'BegleitController@begleit_find')->name('begleit_find');
Route::post('change_email/{id}', 'ProfileController@change_email')->name('change_email.submit');
Route::post('change_password/{id}', 'ProfileController@change_password')->name('change_password.submit');
Route::post('edit_profile/{id}', 'ProfileController@edit_profile')->name('edit_profile.submit');
Route::post('report/{id}', 'ProfileController@report')->name('report.submit');
Route::post('step-1', 'Profile_investController@step_1')->name('offer.step_1');
Route::post('step-2', 'Profile_investController@step_2')->name('offer.step_2');
Route::post('step-3', 'Profile_investController@step_3')->name('offer.step_3');
Route::post('step-5-1', 'Profile_investController@step_5_1')->name('offer.step_5_1');
Route::post('step-5-2', 'Profile_investController@step_5_2')->name('offer.step_5_2');
Route::post('step-5-3', 'Profile_investController@step_5_3')->name('offer.step_5_3');
Route::post('step-5-4', 'Profile_investController@step_5_4')->name('offer.step_5_4');

///////////////// Image upload ///////////////
Route::post('/uploadImage', ['as'=>'upload.image','uses'=>'ImageController@uploadImage']);
Route::post('/uploadTempImage', ['as'=>'upload.TempImage','uses'=>'ImageController@uploadTempImage']);
Route::post('/move_image', ['as'=>'move.image','uses'=>'ImageController@moveImage']);
Route::post('/delete_image', 'ProfileController@delete_image')->name('delete_image.submit');

////////// Delete account /////////////
Route::get('/delete_account', 'UserController@delete_account')->name('delete.account');





