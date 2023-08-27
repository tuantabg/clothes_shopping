<?php


namespace App\Repositories\ProductComment;


use App\Models\ProductComment;
use App\Repositories\BaseRepositoty;

class ProductCommentRepository extends BaseRepositoty implements ProductCommentRepositoryInterface
{
    public function getModel()
    {
        return ProductComment::class;
    }
}
