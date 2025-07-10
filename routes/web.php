<?php

use App\Models\District;
// use App\Http\ControllersSubmissionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\upload\ImageUploadController;
use App\Http\Controllers\sector\PublicSectorController;


// test
Route::post('/regis', [SubmissionController::class, 'store'])->name('test');


// login
Route::get('/auth/redirect/google', [GoogleController::class, 'redirectToGoogle'])->name('login');
Route::get('/auth/callback/google', [GoogleController::class, 'handleGoogleCallback']);
Route::get('/logout', [GoogleController::class, 'logout'])->name('logout');

// file manager
// Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
//     \UniSharp\LaravelFilemanager\Lfm::routes();
// });

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [GoogleController::class, 'index']);
});

// rute registrasi
Route::get('/registration', function () {
    return view('main-visitor.registration');
});

Route::post('/submission', [SubmissionController::class, 'store'])->name('business-submission');

Route::middleware(['auth', 'role:visitor_logged'])->group(function () {});



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

Route::middleware(['auth', 'role:visitor_logged'])->group(function () {
    Route::get('/admin/dashboard', [GoogleController::class, 'index']);
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

    Route::get('/inbox', function () {
        return view('main-entrepreneur.inbox');
    });

    Route::get('/profile', function () {
        return view('main-entrepreneur.profile');
    });
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('main-admin.index');
    });

    Route::get('/business-submission', function () {
        return view('main-admin.business-submission');
    });

    Route::get('/business', function () {
        return view('main-admin.business');
    });

    Route::get('/business-report', function () {
        return view('main-admin.business-report');
    });

    Route::get('/business-nonaktif', function () {
        return view('main-admin.business-nonaktif');
    });

    Route::get('/sector/form', function () {
        return view('main-admin.sector-form');
    });

    Route::get('/sector', function () {
        return view('main-admin.sector');
    });

    Route::get('/event/form', function () {
        return view('main-admin.event-form');
    });

    Route::get('/event-self', function () {
        return view('main-admin.event-self');
    });

    Route::get('/event-submission', function () {
        return view('main-admin.event-submission');
    });

    Route::get('/event', function () {
        return view('main-admin.event');
    });

    Route::get('/article/form', function () {
        return view('main-admin.article-form');
    });

    Route::get('/article', function () {
        return view('main-admin.article');
    });

    Route::get('/product', function () {
        return view('main-admin.product');
    });

    Route::get('/inbox', function () {
        return view('main-admin.inbox');
    });
});


Route::get('/get-villages/{district}', function (District $district) {
    return response()->json($district->villages()->select('id', 'name')->get());
});
