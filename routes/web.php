<?php

use Illuminate\Support\Facades\Mail;
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

// Afficher le formulaire de contact

Route::get('formulaire', function (){
    return view('formulaire');
});

Route::post('formulaire', function (Illuminate\Http\Request $request){
    $name = $request->input('name');
    $email = $request->input('email');
    $messages = $request->input('message');




    Mail::send('contact', ['name' => $name, 'email' => $email, 'messages' => $messages], function ($m) use ($name,$email){
        $m->from($email, $name);
        $m->to('contact@example.com', 'Contact')->subject('Test du formulaire de contact');
    });
});
