<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Services\EkrafService;
use App\Services\EventService;
use App\Services\ProductService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class EntrepreneurDashboardController extends Controller
{
    public function index(ProductService $productService,UserService $userService, EkrafService $ekrafService, EventService $eventService)
    {
        try {
            $ekraf = $ekrafService->getByUser(Auth::id());
            $user = Auth::user();

            $eventCount = $eventService->findByUser($user)->count();

            $productCount = $productService->findByEkraf($ekraf)->count();

            // dd($productCount);

            return view('main-entrepreneur.index', compact(
                'productCount',
                'eventCount'
            ));
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan data: ' . $e->getMessage());
        }
    }
}
