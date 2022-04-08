<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Models
use App\Models\Category;
use App\Models\Topics;


class Homepage extends Controller
{
    public function index(){
       $data['topics']=Topics::orderBy('created_at','DESC')->get();
       $data['categories']=Category::all();
       return view('front.homepage',$data);
         //print_r(Category::all()); die;
    // return view('front.homepage');
    }
}
