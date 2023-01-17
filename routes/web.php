  <?php

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
// pizza routes
Route::get('/pizzas', [App\Http\Controllers\PizzaController::class,"index"]);
Route::get('/pizzas/create', [App\Http\Controllers\PizzaController::class,"create"]);
Route::post('/pizzas',  [App\Http\Controllers\PizzaController::class,"store"]);
Route::get('/pizzas/{id}', [App\Http\Controllers\PizzaController::class,"show"]);
Route::delete('/pizzas/{id}', [App\Http\Controllers\PizzaController::class,"destroy"]);

