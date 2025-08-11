<?php

namespace App\Repositories\Interface;

use App\Models\Blog;

interface BlogRepositoryInterface
{
    public function create(array $data):?Blog;
}
