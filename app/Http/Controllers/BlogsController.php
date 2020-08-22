<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function store(Request $request){
        // print_r($_POST);
         print_r($request); exit;
    }
}
