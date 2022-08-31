<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\stagaireController;
use App\Http\Controllers\dossierController;
use App\Http\Controllers\csController;
use App\Http\Controllers\cdController;
use App\Http\Controllers\PdfController;
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
Route::group( ['middlware'=>'throttle:60,1'],function () {
    


Route::get('/', function () {
    
    return view('login');
});
Route::get('/register',
function(){
    return view('register');
} 

);
Route::Post('/register',

[registerController::class,'store']
);


Route::get('/login',
function(){
    return view('login');
} );


Route::Post('/login',
[loginController::class,'login']
)->middleware('throttle:login')->name('login');

Route::get('/BDO_interface',
function(){
    return view('BDO_interface');
})->middleware('auth','CheckBDO');

Route::put('/intier', 
[dossierController::class,'intier', ['hi' => session('hi')]]
)->middleware('auth');
Route::get('/CGM',
[stagaireController::class,'whereIsNull','hi',session('hi')]
)->middleware('auth');

Route::get('/CGM_interface',
function(){
    return view('CGM_interface');
} )->middleware('auth','CheckCGM');


Route::get('/CGM_interface_CYCLE',
function(){
    return view('/CGM_interface_CYCLE');
} 
)->middleware('auth','CheckCGM');


Route::put('/identifiants', 
[stagaireController::class,'identifiants']
)->middleware('auth');

Route::get('/CS_interface',
function(){
    return view('CS_interface');
} 

)->middleware('auth','CheckCS');

Route::get('/CS_interface_CYCLE',
function(){
    return view('/ChefS_interface_CYCLE');
} 
)->middleware('auth','CheckCS');

Route::get('CS_interface',
[csController::class,'liste'] 
)->middleware('auth');

Route::get('/ChefS_interface',
function(){
    return view('/ChefS_interface');
} 

)->middleware('auth','CheckCS');
/*
Route::put('/identifiants', 
[stagaireController::class,'identifiants']);
*/


Route::put('/etat', 
[dossierController::class,'edit_etat']
)->middleware('auth');


Route::put('/cs', 
[dossierController::class,'affecter']
)->middleware('auth');
/*Route::get('CS_interface',
[csController::class,'liste'] 
);
Route::put('/csCD', 
[dossierController::class,'affecter']
);*/

Route::put('/csCD', 
[dossierController::class,'affecterCD']
)->middleware('auth');
Route::get('/csCD',[cdController::class,'liste'])->middleware('auth');
Route::get('/csCD', 
function(){
    return 'hey';
}
)->middleware('auth');

Route::get('/CD_interface',[cdController::class,'liste'])->middleware('auth','CheckCD');
/*
Route::get('/CD',
function(){
    return view('/CD_interface');
}
);*/

Route::get('/CD_interface',
function(){
    return view('/CD_interface');
}
)->middleware('auth','CheckCD');



Route::get('/CD_interface_CYCLE',
function(){
    return view('/CD_interface_CYCLE');
}
)->middleware('auth','CheckCD');


Route::get('/searchEencadrant',
[dossierController::class,'searchEmptyEncadrant']
)->middleware('auth');
Route::get('/CD_interface2',
function(){
    return view('/CD_interface2');
}

)->middleware('auth');

Route::get('/sendok',
function(){
    return view('/');
}

)->middleware('auth');

Route::get('/sendok',
[dossierController::class,'sendok']
)->middleware('auth');

Route::get('/CD_interface3',
function(){
    return view('/CD_interface3');
}

)->middleware('auth');

Route::post('/pdf', [PdfController::class, 'index'])->middleware('auth');

});