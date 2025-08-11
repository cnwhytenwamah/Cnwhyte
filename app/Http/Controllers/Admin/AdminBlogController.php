<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\BaseController;

class AdminBlogController extends BaseController
{
    public function __construct(

    ){}

    public function create():View
    {
        $title = "Cnwhyte | Add Blog";
        $description = "This is Admin Blog Page";
        $keywords = "porfolio, web developer, programmer";

        return view('admin.blog.add-blog', compact('title', 'description', 'keywords'));
    }
}
