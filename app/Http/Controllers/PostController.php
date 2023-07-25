<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{   

    public function display(){

        $posts = Post::all();

        return view('home')->with('posts', $posts);
    }

    public function view($id){

        $post = Post::find($id);
        

        return view('post')->with('post', $post);


    }


    public function create(){
        $post = 0;
        return view('form')->with('post' , $post);
    }


    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'content'=>'required',
            'author'=>'required|max:25'
        ]);

        $post = new Post;
        $post->author = $request->input('author');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('/post/display');


    }

    public function edit($id){

        $post = Post::find($id);
        

        return view('form')->with('post',$post);


    }


    public function update(Request $request, $id) {  

        $this->validate($request, [
            'title' => 'required',
            'content'=>'required',
            'author'=>'required|max:25'
        ]);

        $post = Post::find($id);
        $post->author = $request->input('author');
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
    
            return redirect('/post/display');



 
      
    }


    public function delete($id){

        $post = Post::find($id);
        $post->delete();
        return redirect('/post/display');


    }



    


}






