<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Contact;
use App\Post;
use App\User;
use Storage;
use  Intervention\Image\ImageManagerStatic as  Image;


class PageController extends Controller
{

    public function index(){
        return view('welcome');
    }


    public function galeria(){

        $posts=Post::all();
        return  view('front.galerie',compact('posts'));
    }

    public function galeriashow(Post $post){

        return  view('front.galerieshow',compact('post'));
    }






  public function contact( Request $request) {

    event(new Contact($request));


     return redirect()->route('main');
    }
    
    

}
