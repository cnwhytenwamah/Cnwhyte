<?php

namespace App\Http\Controllers\FrontPages;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\BaseController;

class HomeController extends BaseController
{
    public function __construct(

    ){}

    public function index():View
    {
        $title = "Cnwhyte | Home";
        $description = "Welcome to Cnwhyte homepage";
        $keywords = "porfolio, web developer, programmer";

        return view('front-pages.welcome', compact('title', 'description', 'keywords'));
    }
}
