<?php

namespace App\Repositories\Eloquents;

use App\Models\Blog;
use App\Repositories\Interface\BlogRepositoryInterface;

class BlogRepository implements BlogRepositoryInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected Blog $model
    ){}

    public function create(array $data):?Blog
    {
        return $this->model->create($data);
    }
}
