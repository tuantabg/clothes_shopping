<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Product\ProductServiceInterface;

class HomeController extends Controller
{
    private $productService;
    private $blogService;

    public  function __construct(
        ProductServiceInterface $productService,
        BlogServiceInterface $blogService
    ){
        $this->productService = $productService;
        $this->blogService = $blogService;
    }

    public function index()
    {
        $featuredProducts = $this->productService->getFeaturedProducts();
        $blogs = $this->blogService->getLatestBlogs();

        return view('client.index', compact('featuredProducts', 'blogs'));
    }
}
