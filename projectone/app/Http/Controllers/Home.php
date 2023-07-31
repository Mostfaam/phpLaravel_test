<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view("admin.home");
    }
    public function homeUser(){
        $news =\App\Models\News::query()->latest()->get();
        $classification=\App\Models\Classification::query()->get();
        return view('front.home' ,compact("news",'classification'));
    }
}
