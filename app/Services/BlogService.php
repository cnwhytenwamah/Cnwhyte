<?php

namespace App\Services;

use stdClass;
use App\Http\Requests\Requests\BlogFormRequest;
use App\Repositories\Interface\BlogRepositoryInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BlogService extends BaseService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected BlogRepositoryInterface $blogRepository
    ){}

    public function create(BlogFormRequest $request):stdClass
    {
        try{
            $cover_image = $this->uploadImage($request->cover_image, "uploads/blogs_cover_photos");
            if(!$cover_image){
                return $this->errorMsg("An error occurred while uploading your blog cover image", 422);
            }

            return $this->successMsg("Blog post created successfully");
        }catch(HttpException $e){
            return $this->errorMsg($e->getMessage(), $e->getStatusCode);
        }
    }
}
