<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\EkrafRepository;
use App\Http\Requests\Product\StoreProductRequest;

class EntrepreneurProductController extends Controller
{

    public function store(ProductService $service, StoreProductRequest $request, EkrafRepository $ekrafRepository)
    {
        try {
            // dd('masuk ke controller');

            // $request['ekraf_id'] = $ekrafRepository->findByUserId(Auth::id())->id;

            $request->merge([
                'ekraf_id' => $ekrafRepository->findByUserId(Auth::id())->id
            ]);


            $product = $service->store($request);

            return redirect()->route('entrepreneur.producpt.form')->with('success', 'Produk berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
