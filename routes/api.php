<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

/* CARRITO */
Route::group(['prefix' => 'cart'], function() {

  Route::post('/', [CartController::class, 'postCart']);

  Route::get('{id}', [CartController::class, 'getCart']);

  Route::post('{id}/product', [CartController::class, 'postProduct']);

  Route::put('{id}', [CartController::class, 'putCart']);

  Route::delete('{id}/line/{id_line}', [CartController::class, 'deleteLine']);

  Route::post('{id}/cupon', [CartController::class, 'postCupon']);

  Route::delete('{id}/cupon', [CartController::class, 'deleteCupon']);

});

/* CHECKOUT */
Route::group(['prefix' => 'checkout'], function() {
  Route::post('/', [CheckoutController::class, 'postCheckout']);
});

/* USUARIO */
Route::group(['prefix' => 'user'], function() {

  Route::post('login', [UserController::class, 'postLogin']);

  Route::post('register', [UserController::class, 'postRegister']);

  Route::put('{id}', [UserController::class, 'putUser']);

  Route::delete('{id}', [UserController::class, 'deleteUser']);

  Route::get('{id}/favorite', [UserController::class, 'getFavorite']);

  Route::post('{id}/favorite/{product}', [UserController::class, 'postFavorite']);

  Route::delete('{id}/favorite/{product}', [UserController::class, 'deleteFavorite']);

  Route::get('{id}/orders', [UserController::class, 'getOrders']);

  Route::get('{id}/comments', [UserController::class, 'getComments']);
});

/* NEWSLETTER */
Route::group(['prefix' => 'newsletter'], function() {

  Route::post('newsletter', [UserController::class, 'postNewsletter']);

  Route::delete('newsletter', [UserController::class, 'deleteNewsletter']);
});

/* CATEGORÍAS */
Route::group(['prefix' => 'newsletter'], function() {

  Route::get('category/{id}', [UserController::class, 'getCategory']);
});

/* MODELOS */
Route::group(['prefix' => 'models'], function() {

  Route::get('model/{id}', [UserController::class, 'getCategory']);

  Route::get('model/{id}/comment', [UserController::class, 'getComment']);

  Route::post('model/{id}/comment', function ($id) {
    return "Creación de comentarios $id";
  });
});

/* GESTIÓN DEL MENÚ */

Route::get('menu', function () {
  return 'Recuperar menús';
});

Route::get('menu/{id}', function ($id) {
  Log::info('Pureba de log');
  return "Recuperar un menú $id";
});

// Route::get('menu/{id?}', function ($id = null) {
//   return "Recuperar menú $id";
// });

