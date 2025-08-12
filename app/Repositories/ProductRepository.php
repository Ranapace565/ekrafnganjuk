<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
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
}
