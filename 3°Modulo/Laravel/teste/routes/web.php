<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('contato');
});


Route::get('/quem-somos', function () {
    return view('quem-somos');
});

Route::get('/framework', function () {
    return view('framework');
});

Route::get('/aprendizagem', function () {
    return view('aprendizagem');
});
