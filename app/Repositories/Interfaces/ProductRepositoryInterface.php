<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function createProduct(array $data): Product;

    public function storeImages(Product $product, array $images): void;
}
