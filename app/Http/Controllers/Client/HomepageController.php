<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $reports = getBlogPostsByCategory('reports');
        return view('client.index', compact('reports'));
    }
}
