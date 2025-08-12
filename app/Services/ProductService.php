<?php
// app/Services/PaymentService.php

namespace App\Services;

use App\Http\Requests\Product\StoreProductRequest;
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductService
{
    protected $ProductRepository;

    public function __construct(ProductRepositoryInterface $ProductRepository)
    {
        $this->ProductRepository = $ProductRepository;
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
}
