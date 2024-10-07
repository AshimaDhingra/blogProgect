<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
      $posts= Post::all();
        return view('posts.list',['posts'=>$posts]);
    }
    public function create(){
        return view('posts.new');
    }
    public function store(Request $request){
        $post= new  Post;
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        return redirect('/'); 
    }
      public function edit($id){
        $post=Post::where('id',$id)->first();
            return view('posts.edit',['post' => $post]);
      }
      public function update(Request $request,$id){
        $post = Post::where('id',$id)->first();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->save();
        return redirect('/');
      }
      public function destroy($id){
        $post = Post:: whereId($id)->first();
        $post->delete();
        return redirect('/');
      }

      public function show($id)
      {
        $post = Post:: whereId($id)->first();
          return view('posts.show', ['post' => $post]);
          // $post=Post::where('id',$id)->first();
          // return view('posts.show',['post' => $post]);
      }
    }
