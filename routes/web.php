<?php
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\MyRequestController;


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
/*
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' = 'Home'
    ]);
*/
//Route::get('/', 'HomeController@index')->name('Home');


// Route::group([
//     'prefix' => 'admin',
//     'namespace'=> 'Admin',
//     'as' => 'admin.'
// ], function () {
//     Route::get('/', 'IndexController@index')->name('index');
//     Route::get('/test1', 'IndexController@test1')->name('test1');
//     Route::get('/test2', 'IndexController@test2')->name('test2');
// });



Route::view('/', 'home');
Route::match(['get', 'post'], '/home', [HomeController::class, 'index'])->name('home');
Route::view('/auth', 'reg');



Route::view('/about', 'about');
Route::get('/categories', [CategoriesController::class, 'index']);



Route::prefix('news')->group(function() {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{id}', [NewsController::class, 'show'])->name('showId');
    Route::get('/categories/{id}', [CategoriesController::class, 'show']);
    Route::get('/category/{slug}', [CategoriesController::class, 'showBySlug']);
    Route::get('/category/{slug}/{id}', [CategoriesController::class, 'showBySlugId']);
//->name('showId');
});




Route::prefix('admin')->group(function() {
    Route::get('/', [IndexController::class, 'index'])->name('admin.index');
    Route::get('/test1', [IndexController::class, 'test1'])->name('admin.test1');
    Route::get('/test2', [IndexController::class, 'test2'])->name('admin.test2');
    //Route::get('/addNew', [IndexController::class, 'addNew'])->name('admin.addNew');
    Route::match(['get', 'post'], '/create', [IndexController::class, 'create'])->name('admin.create');

});
Auth::routes();

Route::match(['get', 'post'], '/myRequest', [MyRequestController::class, 'myRequest'])->name('myRequest');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/saveNews', [HomeController::class, 'saveNews'])->name ('saveNews');
Route::get('/saveCats', [HomeController::class, 'saveCats'])->name ('saveCats');