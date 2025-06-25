<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\upload\ImageUploadController;

Route::post('/upload-image', [ImageUploadController::class, 'store']);


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

    Route::get('/business', function () {
        return view('main-entrepreneur.business');
    });

    Route::get('/product', function () {
        return view('main-entrepreneur.product');
    });
    Route::get('/product/form', function () {
        return view('main-entrepreneur.product-form');
    });

    Route::get('/event', function () {
        return view('main-entrepreneur.event');
    });
    Route::get('/event/form', function () {
        return view('main-entrepreneur.event-form');
    });

    Route::get('/profile', function () {
        return view('main-entrepreneur.profile');
    });
});
