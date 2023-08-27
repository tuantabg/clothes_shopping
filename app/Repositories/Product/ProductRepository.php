<?php


namespace App\Repositories\Product;


use App\Models\Product;
use App\Repositories\BaseRepositoty;

class ProductRepository extends BaseRepositoty implements ProductRepositoryInterface
{

    public function getModel()
    {
        return Product::class;
    }

    public function getRelatedProducts ($product, $limit = 4)
    {
        return $this->model->where('product_category_id', $product->product_category_id)
            ->where('tag', $product->tag)
            ->limit($limit)
            ->get();
    }

    public function getFeaturedProductsByCategory(int $categoryID)
    {
        return $this->model->where('featured', true)
            ->where('product_category_id', $categoryID)
            ->get();
    }

    public function getProductOnIndex()
    {
        $products = $this->model->paginate(9);

        return $products;
    }
}
