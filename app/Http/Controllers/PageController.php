<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        echo "Hi! Welcome To Laravel";
    }
    public function about(){
        echo "Muhammad Ilham El Hakim <br>";
        echo "2041720162";
    }
    public function articles($id){
        echo "This is Article Pages with ID: ".$id;
    }
}
