<?php


namespace App\Repositories\Blog;


use App\Models\Blog;
use App\Repositories\BaseRepositoty;

class BlogRepository extends BaseRepositoty implements BlogRepositoryInterface
{
    public function getModel()
    {
        return Blog::class;
    }

    public function getLatestBlogs($limit = 3)
    {
        return $this->model->orderBy('id', 'desc')
            ->limit($limit)
            ->get();
    }
}
