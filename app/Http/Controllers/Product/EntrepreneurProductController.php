<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\EkrafRepository;
use App\Http\Requests\Product\StoreProductRequest;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Product\UpdateProductRequest;

class EntrepreneurProductController extends Controller
{
    public function index(Request $request, ProductService $ProductService)
    {
        $search = $request->input('search');

        $Products = $ProductService->index($search);
        // dd($Products->first()->images);
        return view('main-entrepreneur.product', compact(
            'Products',
            'search',
        ));
    }
    public function store(ProductService $service, StoreProductRequest $request, EkrafRepository $ekrafRepository)
    {
        try {

            $request->merge([
                'ekraf_id' => $ekrafRepository->findByUserId(Auth::id())->id
            ]);

            // dd($request->file('images'));
            $product = $service->store($request);

            return redirect()->route('entrepreneur.product.')->with('success', 'Produk berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function edit(ProductService $ProductService, $slug)
    {
        try {
            $Product = $ProductService->findBySlug($slug);

            return view('main-entrepreneur.product-update')->with('data', $Product);
        } catch (\Exception $e) {
            Log::error('Gagal mendapatkan pengajuan pengguna: ' . $e->getMessage());
        }
    }

    public function update(UpdateProductRequest $request, ProductService $ProductService, Product $product)
    {

        try {

            // $deleteImageIds = $request->input('delete_images', []);

            $deleteImageIds = json_decode($request->input('deleted_images', '[]'), true);

            // dd($request->file('images'));

            $ProductService->update($product, $request, $deleteImageIds);

            return redirect()->route('entrepreneur.product.')->with('success', 'Produk berhasil diperbarui');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Gagal melakukan update produk.' . $e->getMessage());
        }
    }

    public function destroy(ProductService $ProductService, Product $Product)
    {
        try {
            $ProductService->destroy($Product);

            return redirect()->route('entrepreneur.product.')->with('success', 'Product berhasil dihapus!');
        } catch (AuthorizationException $e) {
            return back()->with('error', 'Tidak diizinkan melakukan penghapusan event.' . $e->getMessage());
        }
    }
}
