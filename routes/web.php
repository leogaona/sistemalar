<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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


//Route::get('/entrada', 'EntradaController@index');
Route::resource('/entrada', 'EntradaController');


/*
Route::get('/usuario',function(){
    $nombre = "Leonardo";
    return "Hola Usuario {$nombre}";
});
*/


//Route::get('/consulta', function(){
    //$usuarios = DB::table('users')->get();
    //$usuarios = DB::table('users')->first();
    //$usuarios = DB::table('users')->get();
    //dd($usuarios[0]);


    //$usuarios = DB::table('users')
    //->select('name', 'email')
    //->get();

    // $usuarios = DB::table('entradas')
    // ->select('titulo', 'contenido')
    // ->where('user_id', '=', 1)
    // ->get(); 
    // dd($usuarios);


    //$usuarios = DB::table('entradas')
    //->join('users', 'entradas.user_id', '=', 'users.id')
    //->select(['users.*', 'entradas.titulo'])
    //->get(); 
    //dd($usuarios);

   
//});

Route::get('/consulta', function(){
    $insertado = DB::table('users')
    // ->insertGetId(
    //     [
    //       "name" => "pepito perez",
    //       "email" => "pepito@email.com",
    //       "password" => "pepitopass"
    //     ]   
    // );


    // ->insert([
    //     "name" => "juan perez",
    //     "email" => "juan@perez.com",
    //     "password" => "juanperez" 
    // ]);
    // ->where('id', '=', '11')
    // ->update([
    //    "name" => "juan perez acosta",
    //    "email" => "juan@perez.com",
    //    "password" => "juanperez" 
    // ]);

    ->where('id', '=', '12')
    ->delete();

    dd($insertado);

});


Route::match(['put','post'],'/cliente',function(){
    return 'cliente';
});

//cualquiera metodo
Route::any('/cliente',function(){
    return 'cliente';
});

//redirect
Route::redirect('/blog', 'admin/usuario');   

//view
Route::view('/welcome', 'welcome');


//parametros
/*
Route::get('/usuario/{nombre?}/{apellido}', function($nombre="", $apellido=""){
    return "Hola Usuario " . $nombre . " " . $apellido;
})->where(['nombre'=>'[A-Za-z]+', 'apellido'=>'[A-Za-z]+']);
*/


//grupo de rutas
Route::group(['prefix'=>'admin'], function(){
    Route::get('/usuario/{nombre?}/{apellido}', function($nombre="", $apellido=""){
        return "Hola Usuario " . $nombre . " " . $apellido;
    })->where(['nombre'=>'[A-Za-z]+', 'apellido'=>'[A-Za-z]+']);
});

Route::get('/host', function(){
    return env('DB_HOST');
});


Route::get('/zona', function(){
    return config('app.timezone');
});


Route::view('/producto', 'producto');
Route::get('/producto', function(){
    //return view('producto', ["nombre"=>"LX 300"]);
    
    //return view('producto')->with(["nombre"=>"Impresora LX300"]);

    $nombre = "Impresora LX300";
    $marca = "Epson";
    
    return view('producto', compact('nombre', 'marca')); 

});

Route::view('/prueba', 'prueba');


// Route::get('/estructuras/{nota?}', function($nota=0){
//     return view('estructuras', compact("nota"));
// });

/*
Route::get('/estructuras/{numero?}', function($numero=0){
    return view('estructuras', compact("numero"));
});
*/

Route::get('/estructuras', function(){
    $lista = ["platano", "naranja", "manzana"];
    return view('estructuras', compact("lista"));
});

Route::view('/producto', 'producto.index');

Route::view('/ventas', 'ventas.index');

Route::get('/vue', function(){
    return view('pruebavue');
});

Route::view('imagen', 'imagen');