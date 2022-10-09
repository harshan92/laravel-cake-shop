<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $products=DB::table('products')->get();
        return view('index',['products'=>$products]);
    }

    public function products()
    {
        $products=DB::table('products')->get();
        return view('products',['products'=>$products]);
    }
}