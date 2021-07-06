<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\siteControllers;
use App\http\controllers\PostsController;
use App\http\controllers\viewController;

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

//Route::get('/', [siteControllers::class, 'index']);

Route::get('/', [siteControllers::class, 'index']);

Route::get('/log', [siteControllers::class, 'log']);

//display site users
Route::get('/admin', [viewController::class, 'showData']);

Route::get('/about', [siteControllers::class, 'about']);

Route::get('/contact', [siteControllers::class, 'contact']);

Route::get('/advert', [siteControllers::class, 'advert']);

Route::get('/terms', [siteControllers::class, 'terms']);

//register page route
Route::get('/sign', [siteControllers::class, 'sign']);
