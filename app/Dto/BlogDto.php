<?php

namespace App\Dto;

use App\Dto\BaseDto;
use App\Dto\BlogDto;
use App\Http\Requests\BlogFormRequest;

class BlogDto extends BaseDto
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $title,
        public string $excerpt,
        public string $content,
        public ?UploadedFile $cover_image,
        public ?Carbon $published_at
    ){}

    public function toArray():array
    {
        return $this->extractToArray([
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'content' => $this->content
        ]);
    }

    public static function FormData(BlogFormRequest $request):BlogDto
    {
        return new self(
            title: $request->validated(key: 'title'),
            excerpt: $request->validated(key: 'excerpt'),
            content: $request->validated(key: 'content')
        );
    }
}
