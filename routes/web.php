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

Route::get('/', function(){

    $saluto = 'Benvenuto in';
    $name = 'Laravel';

    return view('home', compact('saluto','name'));
});

Route::get('/chi-siamo', function(){

    $saluto = 'Benvenuto in';
    $name = 'Laravel';
    $title = 'Ecco qui il nostro team:';

    $teams = [
        [
            'photo'=>'https://www.bassaromagnamia.it/brm-cmswp/wp-content/uploads/2019/06/Gioacchino-Rossini-per-sito-2.png',
            'name'=>'Gioacchino',
            'surname'=>'Rossi',
            'email'=>'acciacchino@gmail.com'
        ],
        [
            'photo'=>'https://www.partenophil.com/wp-content/uploads/2021/10/64.jpg',
            'name'=>'Franco',
            'surname'=>'Bollo',
            'email'=>'francobollo@gmail.com'
        ],
        [
            'photo'=>'https://media.tenor.com/images/56236b026ac9839bdf466eaf8fbba56d/tenor.png',
            'name'=>'Tiho',
            'surname'=>'Fregato',
            'email'=>'fregatotiho@gmail.com'
        ],
    ];

    return view('about', compact('saluto','name','title','teams'));
});

Route::get('/contatti', function(){
    $saluto = 'Benvenuto in';
    $name = 'Laravel';
    $title= 'Ecco i nostri Contatti:';

    $contact= [
        'address'=>'Via roma, 27 , Milano',
        'email'=>'laravel@gmail.com',
        'phone'=>'+39 3358812203',
    ];

return view('contact', compact('saluto','name','title', 'contact'));
});
