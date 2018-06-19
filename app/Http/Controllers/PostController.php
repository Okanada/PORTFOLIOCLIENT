<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use Storage;
use  Intervention\Image\ImageManagerStatic as  Image;
use App;
use Mail;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        //$post->image =  App::make('ImageResize')->imageStore($request->image);
        return  view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view ('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePost $request)
    {
         $request->validated();

        $post = new Post;
        $post->titre = $request->titre;
        $post->contenu = $request->contenu;
        $post->user_id = $request->user_id;
        $post->image = $request->image->store('','imagePost');


        // Redimensionnement de l'image 
        $post->image =  App::make('ImageResize')->imageStore($request->image);
        // Redimmensionnement de l'image


        $post->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view ('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        
        return  view ('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */


    public function update(StorePost $request, Post $post)
    
    {
           $request->validated();


             //    Remplacement d'une image par une autre tout en supprimant l'ancienne du storage
             if($request->image != null){ 

                // Suppression de l'image redimmensionné 
                 $post->image = App::make('ImageResize')->imageDelete($post->image);
                //  Redimmensionnement de l'image
                 $post->image = App::make('ImageResize')->imageStore($request->image);
        
            }

            $post->titre = $request->titre;
            $post->contenu = $request->contenu;
            $post->image = $request->image->store('','imagePost');
            $post->save();
            return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function destroy(Post $post)
    {


        Storage::disk('imagePost')->delete($post->image);
        Storage::disk('imagePostResize')->delete($post->image);
        $post->delete();
        return redirect()->route('post.index');


    }

    
}
