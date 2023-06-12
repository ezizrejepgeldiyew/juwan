<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FavoritController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\OtpController;
use App\Http\Controllers\Admin\PodkastController;
use App\Http\Controllers\Admin\Posts\PostController;
use App\Http\Controllers\Admin\Posts\PostBookController;
use App\Http\Controllers\Admin\Posts\PostPhotoController;
use App\Http\Controllers\Admin\Posts\PostVideoController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\Users\PermissionController;
use App\Http\Controllers\Admin\Users\RoleController;
use App\Http\Controllers\Admin\Users\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

Route::prefix('admin/')->middleware(['auth'])->group(function () {

    Route::middleware(['role:admin|moderator'])->group(function () {
        Route::resources([
            '/categories' => CategoryController::class,
            '/books' => BookController::class,
            '/authors' => AuthorController::class,
            '/genres' => GenreController::class,
            '/podkasts' => PodkastController::class,
            '/posts' => PostController::class,
            '/post/photos' => PostPhotoController::class,
            '/post/videos' => PostVideoController::class,
            '/postbooks' => PostBookController::class,
        ]);
        Route::controller(PostBookController::class)->name('post_books.')->prefix('posts/books/')->group(function () {
            Route::get('select-delete', 'selectDelete')->name('select_delete');
            Route::get('select-books', 'selectBooks')->name('select_books');
            Route::get('select-store-books', 'selectStoreBooks')->name('select_store_books');
        });
        Route::get('selectDeleteBooks', [BookController::class, 'selectDeleteBooks'])->name('selectDeleteBooks');
        Route::get('selectDeleteCategories', [CategoryController::class, 'selectDeleteCategories'])->name('selectDeleteCategories');
        Route::get('selectDeletePosts', [PostController::class, 'selectDeletePosts'])->name('selectDeletePosts');
        Route::get('selectDeletePodkasts', [PodkastController::class, 'selectDeletePodkasts'])->name('selectDeletePodkasts');
        Route::get('selectDeleteGenres', [GenreController::class, 'selectDeleteGenres'])->name('selectDeleteGenres');
        Route::get('selectDeleteAuthors', [AuthorController::class, 'selectDeleteAuthors'])->name('selectDeleteAuthors');
        Route::get('selectDeletePostPhotos', [PostPhotoController::class, 'selectDeletePostPhotos'])->name('selectDeletePostPhotos');
        Route::get('selectDeletePostVideos', [PostVideoController::class, 'selectDeletePostVideos'])->name('selectDeletePostVideos');
    });
    Route::middleware(['role:admin'])->group(function () {
        Route::resources([
            '/roles' => RoleController::class,
            '/permissions' => PermissionController::class,
            '/users' => UserController::class,
            '/otps' => OtpController::class,
            '/favorites' => FavoritController::class,
        ]);
        Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
        Route::post('/roles/{role}/permissions', [RoleController::class, 'givePermission'])->name('roles.permissions');
    });

    Route::controller(ProfileController::class)->name('profile.')->prefix('profile/')->group(function () {
        Route::get('index', 'index')->name('index');
        Route::put('update-account-info/{id}', 'updateAccountInfo')->name('update_account_info');
        Route::post('chaneg-pasword', 'changePassword')->name('change_password');
    });
});
