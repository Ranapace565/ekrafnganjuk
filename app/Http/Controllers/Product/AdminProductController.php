<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Repositories\EkrafRepository;
use App\Http\Requests\Product\StoreProductRequest;
use Illuminate\Auth\Access\AuthorizationException;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Services\SectorService;

class AdminProductController extends Controller
{
    public function index(Request $request, ProductService $ProductService, SectorService $sectorService)
    {

        $sectorId = $request->input('sector_id');
        $search = $request->input('search');

        $Products = $ProductService->indexAll($search, $sectorId);

        $sector = $sectorId ? $sectorService->getById($sectorId) : null;
        $sector = $sector ? $sector->name : null;

        return view('main-admin.product', compact(
            'Products',
            'search',
            'sector',
            'sectorId',
        ));
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
