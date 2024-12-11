<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class HomeController extends Controller
{
    public function index(){
        $latestArticlesTop3 = Articles::orderBy('date', 'desc')->take(3)->get();
        $latestArticlesTop5 = Articles::orderBy('date', 'desc')->take(5)->get();
        return view('home', compact('latestArticlesTop3', 'latestArticlesTop5'));
    }
}
