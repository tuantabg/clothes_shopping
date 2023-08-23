<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Service\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;

    public  function __construct(ProductServiceInterface $productService)
    {
        $this->productService = $productService;
    }

    public function show($id)
    {
        $product = $this->productService->find($id);

        return view('client.shop.show', compact('product'));
    }
}
