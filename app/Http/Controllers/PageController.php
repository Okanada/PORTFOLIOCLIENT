<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Contact;

class PageController extends Controller
{

    public function index(){
        return view('welcome');
    }


    public function galeria(){

        $posts=Post::all();
        return  view('front.galerie',compact('posts'));
    }




  public function contact( Request $request) {

    event(new Contact($request));


     return redirect()->route('main');
    }
    
    

}
