<?php

namespace App\Http\Controllers\FrontPages;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\BaseController;

class ContactController extends BaseController
{
    public function __construct(

    ){}

    public function create():View
    {
        $title = "Cnwhyte | Contact";
        $description = "Welcome to Cnwhyte contact";
        $keywords = "porfolio, web developer, programmer";

        return view('front-pages.contact', compact('title', 'description', 'keywords'));
    }
}
