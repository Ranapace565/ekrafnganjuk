<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Productimg;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    public function searchAndPaginate(?string $search = null, ?int $ekrafId = null, int $perPage = 12)
    {
        return Product::query()
            ->with(['images'])
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%");
                });
            })
            ->where('ekraf_id', $ekrafId)
            ->orderBy('name', 'desc')
            ->paginate($perPage);
    }
    public function findBySlug($slug)
    {
        return Product::where('slug', $slug)->with(['images'])->first();
    }
    public function createProduct(array $data): Product
    {
        return Product::create($data);
    }
    public function storeImages(Product $product, array $images): void
    {
        foreach ($images as $image) {
            $path = $image->store('products', 'public');

            $product->images()->create([
                'image_path' => $path
            ]);
        }
    }
    public function update(Product $product, array $data)
    {
        $product->update($data);
        return $product;
    }
    public function deleteImg(Productimg $productImg)
    {
        Storage::disk('public')->delete($productImg->image_path);
        return $productImg->delete();
    }
    public function destroy(Product $Product): bool
    {

        return $Product->delete();
    }
}
