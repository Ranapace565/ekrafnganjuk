<?php

use Illuminate\Support\Facades\Route;

Route::get('/registration', function () {
    return view('main-visitor.registration');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('main-visitor.index');
})->name('beranda');

// Route::get('/beranda', function () {
//     session()->flash('error', 'Data berhasil disimpan.');
//     return view('main-visitor.index');
// })->name('beranda');

Route::get('/tentang', function () {
    return view('main-visitor.about');
});

Route::get('/infografis', function () {
    return view('main-visitor.infografis');
});

Route::get('/sektor', function () {
    return view('main-visitor.sector');
});

Route::get('/informasi', function () {
    return view('main-visitor.article');
});

Route::get('/artikel', function () {
    return view('main-visitor.article');
});

Route::get('/artikel-detail', function () {
    return view('main-visitor.article-detail');
});

Route::get('/event', function () {
    return view('main-visitor.event');
});

Route::get('/event-detail', function () {
    return view('main-visitor.event-detail');
});

Route::get('/usaha', function () {
    return view('main-visitor.business-detail');
});

Route::get('/profil', function () {
    return view('main-visitor.profile');
});

Route::get('/keluar', function () {
    return view('main-visitor.index');
});

Route::prefix('entrepreneur')->group(function () {
    Route::get('/', function () {
        return view('main-entrepreneur.index');
    });

    Route::get('/profile', function () {
        return view('main-entrepreneur.profile');
    });
});
