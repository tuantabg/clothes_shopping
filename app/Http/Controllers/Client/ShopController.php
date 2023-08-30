<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;

    public  function __construct(
        ProductServiceInterface $productService,
        ProductCommentServiceInterface $productCommentService
    ){
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
    }

    public function show($id)
    {
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);

        return view('client.shop.show', compact('product', 'relatedProducts'));
    }

    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());

        return redirect()->back();
    }

    public function index(Request $request)
    {
        $products = $this->productService->getProductOnIndex($request);

        return view('client.shop.index', compact('products'));
    }
}
