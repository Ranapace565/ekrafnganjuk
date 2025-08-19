<?php

use App\Models\District;
use App\Models\Submission;
use Illuminate\Support\Env;
// use App\Http\ControllersSubmissionController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Mail\SubmissionNotificationToAdmin;
use App\Events\Submission\SubmissionCreated;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Ekraf\AdminEkrafController;
use App\Http\Controllers\Event\AdminEventController;
use App\Http\Controllers\Ekraf\VisitorEkrafController;
use App\Http\Controllers\Event\VisitorEventController;
use App\Http\Controllers\upload\ImageUploadController;
use App\Http\Controllers\sector\PublicSectorController;
use App\Http\Controllers\Ekraf\EntrepreneurEkrafController;
use App\Http\Controllers\Event\EntrepreneurEventController;
use App\Http\Controllers\Submission\AdminSubmissionController;
use App\Http\Controllers\Product\EntrepreneurProductController;
use App\Http\Controllers\Submission\VisitorSubmissionController;

// test
// Route::post(uri: '/regis', [SubmissionController::class, 'store'])->name('test');


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

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [GoogleController::class, 'index']);
// });

// rute registrasi



Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('main-visitor.index');
})->name('beranda');

Route::get('/tentang', function () {
    return view('main-visitor.about');
});

Route::get('/infografis', function () {
    return view('main-visitor.infografis');
});

Route::get('/sektor', [VisitorEkrafController::class, 'index'])->name('sector');

Route::get('/ekraf/{slug}', [VisitorEkrafController::class, 'index'])->name('ekraf');


Route::get('/informasi', function () {
    return view('main-visitor.article');
});

Route::get('/artikel', function () {
    return view('main-visitor.article');
});

Route::get('/artikel-detail', function () {
    return view('main-visitor.article-detail');
});

Route::get('/event', [VisitorEventController::class, 'index'])->name('event');

Route::get('/event/{slug}', [VisitorEventController::class, 'show'])->name('event-detail');

Route::get('/event/search', [VisitorEventController::class, 'search'])->name('event-detail-search');

Route::get('/ekraf', function () {
    return view('main-visitor.ekraf-detail');
});

Route::get('/keluar', function () {
    return view('main-visitor.index');
});


Route::middleware(['auth', 'role:visitor_logged'])->prefix('visitor_logged')
    ->name('visitor_logged.')->group(function () {
        // Route::get('/profil', function () {
        //     return view('main-visitor.profile');
        // });

        Route::get('/registration', [VisitorSubmissionController::class, 'create'])->name('registration');

        Route::post('/submission', [VisitorSubmissionController::class, 'store'])->name('business-submission');

        Route::put('/submission/{submission}', [VisitorSubmissionController::class, 'update'])->name('business-submission-update');

        Route::get('/your-submission', [VisitorSubmissionController::class, 'show'])->name('submission');
    });

Route::middleware(['auth', 'role:entrepreneur'])->prefix('entrepreneur')
    ->name('entrepreneur.')->group(function () {
        Route::get('/', function () {
            return view('main-entrepreneur.index');
        });

        Route::prefix('ekraf')->name('ekraf.')->group(function () {

            Route::get('/', [EntrepreneurEkrafController::class, 'edit'])->name('detail');

            Route::put('/update/{ekraf}', [EntrepreneurEkrafController::class, 'update'])->name('update');
        });

        Route::prefix('product')->name('product.')->group(function () {

            Route::get('/', [EntrepreneurProductController::class, 'index']);

            Route::get('/form', function () {
                return view('main-entrepreneur.product-form');
            })->name('form');

            Route::post('/store', [EntrepreneurProductController::class, 'store'])->name('store');

            Route::get('/edit/{slug}', [EntrepreneurProductController::class, 'edit'])->name('edit');

            Route::put('/{product}', [EntrepreneurProductController::class, 'update'])->name('update');

            Route::delete('/{product}', [EntrepreneurProductController::class, 'destroy'])->name('destroy');
        });

        Route::prefix('event')->name('event.')->group(function () {

            Route::get('/', [EntrepreneurEventController::class, 'index']);

            Route::get('/form', function () {
                return view('main-entrepreneur.event-form');
            })->name('form');

            Route::post('/store', [EntrepreneurEventController::class, 'store'])->name('store');

            Route::get('/edit/{slug}', [EntrepreneurEventController::class, 'edit'])->name('edit');

            Route::put('/update/{event}', [EntrepreneurEventController::class, 'update'])->name('update');

            Route::delete('/{event}', [EntrepreneurEventController::class, 'destroy'])->name('destroy');
        });
    });


Route::middleware(['auth', 'role:admin'])->prefix('admin')
    ->name('admin.')->group(function () {

        Route::get('/', function () {
            return view('main-admin.index');
        });

        Route::prefix('ekraf')->name('ekraf.')->group(function () {

            Route::prefix('submission')->name('submission.')->group(function () {
                Route::get('/', [AdminSubmissionController::class, 'index']);

                Route::get('/detail/{id}', [AdminSubmissionController::class, 'show'])->name('detail');

                Route::put('/reject/{submission}', [AdminSubmissionController::class, 'reject'])->name('reject');

                Route::post('/approve/{submission}', [AdminSubmissionController::class, 'approve'])->name('approve');
            });

            Route::get('/', [AdminEkrafController::class, 'index']);

            Route::get('/form', function () {
                return view('main-admin.ekraf-form');
            })->name('form');

            Route::post('/store', [AdminEkrafController::class, 'store'])->name('store');

            Route::get('/report', function () {
                return view('main-admin.ekraf-report');
            })->name('report');

            Route::get('/nonaktif', function () {
                return view('main-admin.ekraf-nonaktif');
            })->name('nonaktif');
        });

        Route::prefix('event')->name('event.')->group(function () {

            Route::prefix('submission')->name('submission.')->group(function () {
                Route::get('/', [AdminEventController::class, 'index']);

                Route::get('/detail/{id}', [AdminEventController::class, 'show'])->name('detail');

                Route::put('/reject/{event}', [AdminEventController::class, 'reject'])->name('reject');

                Route::post('/approve/{event}', [AdminEventController::class, 'approve'])->name('approve');
            });

            Route::get('/', [AdminEventController::class, 'index']);

            Route::get('/form', function () {
                return view('main-admin.event-form');
            })->name('form');

            Route::post('/store', [AdminEventController::class, 'store'])->name('store');

            Route::get('/edit/{slug}', [AdminEventController::class, 'edit'])->name('edit');

            Route::put('/update/{event}', [AdminEventController::class, 'update'])->name('update');

            Route::delete('/{event}', [AdminEventController::class, 'destroy'])->name('destroy');
        });

        Route::get('/sector/form', function () {
            return view('main-admin.sector-form');
        });

        Route::get('/sector', function () {
            return view('main-admin.sector');
        });

        // Route::get('/event/form', function () {
        //     return view('main-admin.event-form');
        // });

        // Route::get('/event-self', function () {
        //     return view('main-admin.event-self');
        // });

        // Route::get('/event-submission', function () {
        //     return view('main-admin.event-submission');
        // });

        // Route::get('/event', function () {
        //     return view('main-admin.event');
        // });

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

Route::get('/test-email', function () {
    $submission = Submission::latest()->with('user')->first(); // Ambil submission terbaru

    if (!$submission) {
        return 'Tidak ada data submission.';
    }

    event(new SubmissionCreated($submission));

    return 'Email notifikasi submission dikirim ke admin@example.com';
});
