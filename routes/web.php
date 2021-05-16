<?php

use App\Http\Controllers\PageController;
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
// Si son paginas estaticas funciona solo con una linea
// colocar la ruta y el nombre de la view,
//y un array si le queremos pasar datos
Route::view('/estatica', 'estatica', ['app' => 'página estática']);

//Escribiendo esto y con "php artisan make:controller <nombreController> --resource"
// te crea automaticamente las 7 rutas del crud
// En el ejemplo inferior serian 7 rutas pages
/*
GET|HEAD  | pages             | pages.index   | Muestra todo el registro
POST      | pages             | pages.store   | Salvar
GET|HEAD  | pages/create      | pages.create  | Formulario de creacion
GET|HEAD  | pages/{page}      | pages.show    | Show para mirar una unica pagina
PUT|PATCH | pages/{page}      | pages.update  | Actualizar
DELETE    | pages/{page}      | pages.destroy | Eliminar
GET|HEAD  | pages/{page}/edit | pages.edit    | Formulario de editar
*/
Route::resource('pages', PageController::class);
/*
Sin embargo crea el controlador vacio.
Si se desea que tenga los metodos creados usamos:
    "php artisan make:controller <nombreController> --resource"
Si queremos que tambien se cree el Modelo/Tabla utilizamos:
    "php artisan make:controller <nombreController> --resource --model=<nombreModel>
En este caso usamos:
"php artisan make:controller PageController --resource --model=Page"
*/

