<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController; /*обязательно указывать namespace и название класса из папки Controllers!*/


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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('about', function () {
    return view('about');
});
*/
Route::get('about', [PageController::class, 'about']);

// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleController::class, 'index'])
  ->name('articles.index'); // имя маршрута, нужно для того, чтобы не создавать ссылки руками -resources/views/article/index.blade.php

Route::get('articles/create', 'App\Http\Controllers\ArticleController@create')
  ->name('articles.create');

Route::post('articles', 'App\Http\Controllers\ArticleController@store')
  ->name('articles.store');  

# id – параметр, который зависит от конкретной статьи
# Фигурные скобки нужны для описания параметров маршрута
Route::get('articles/{id}', [ArticleController::class, 'show'])
->name('articles.show');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])
  ->name('articles.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])
  ->name('articles.update');

Route::delete('articles/{id}', [ArticleController::class, 'destroy'])
  ->name('articles.destroy');



