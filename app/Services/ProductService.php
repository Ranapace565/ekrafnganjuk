<?php
// app/Services/PaymentService.php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Repositories\EkrafRepository;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductService
{
    protected $ProductRepository;
    protected $ekrafRepository;

    public function __construct(ProductRepositoryInterface $ProductRepository, EkrafRepository $ekrafRepository)
    {
        $this->ProductRepository = $ProductRepository;
        $this->ekrafRepository = $ekrafRepository;
    }

    public function index(?string $search = null)
    {
        $ekrafId = $this->ekrafRepository->findByUserId(Auth::id());
        return $this->ProductRepository->searchAndPaginate($search, $ekrafId->id);
    }
    public function findBySlug($slug)
    {
        return $this->ProductRepository->findBySlug($slug);
    }
    public function store(StoreProductRequest $request)
    {
        $productData = $request->only(['name', 'price', 'description', 'ekraf_id']);

        $product = $this->ProductRepository->createProduct($productData);

        if ($request->hasFile('images')) {
            $this->ProductRepository->storeImages($product, $request->file('images'));
        }

        return $product;
    }
    public function update(Product $Product, UpdateProductRequest $request, $deleteImageIds = [])
    {
        // update data utama produk
        $this->ProductRepository->update($Product, $request->validated());

        // hapus gambar jika diminta
        if ($deleteImageIds) {
            foreach ($deleteImageIds as $imageId) {
                $image = $Product->images()->find($imageId);
                if ($image) {
                    Storage::disk('public')->delete($image->image_path);
                    $this->ProductRepository->deleteImg($image);
                }
            }
        }

        if ($request->hasFile('images')) {
            $this->ProductRepository->storeImages($Product, $request->file('images'));
        }

        $Product->load('images');
        return $Product;
    }

    public function destroy(Product $Product)
    {
        // dd($Product->images);
        if ($Product->images) {
            foreach ($Product->images as $image) {

                $this->ProductRepository->deleteImg($image);
            }
        }
        $this->ProductRepository->destroy($Product);
    }
}
