<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index():View
    {
        $title = "Cnwhyte | Dashboard";
        $description = "Welcome to Cnwhyte Dashboard";
        $keywords = "porfolio, web developer, programmer";

        return view('admin.dashboard.index', compact('title', 'description', 'keywords'));
    }
}
