<?php

namespace App\Repositories\Interfaces;

use App\Models\Product;
use App\Models\Productimg;

interface ProductRepositoryInterface
{
    public function searchAndPaginate(?string $search = null, ?int $ekrafId = null, int $perPage = 10);
    public function createProduct(array $data): Product;
    public function storeImages(Product $product, array $images): void;
    public function findBySlug($slug);
    public function update(Product $product, array $data);
    public function deleteImg(Productimg $productImg);
    public function destroy(Product $product);
}
