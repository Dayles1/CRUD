<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Article;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Article::all();
        return view("index", compact('posts'));
    }

    public function create()
        {
            // $posts = Article::all();
            return view("create");
        }
        public function store(Request $request)
        {
            $posts= new Article();
            $posts->title = $request->title;
            $posts->description=$request->description;
            // $article->status=$request->status;
            $posts->save();
            return redirect()->route('index');
        }
        public function delete($id){
            return view('delete', compact('id'));
        }
        public function destroy($id)
{
    $post = Article::find($id);
    $post->delete();
    return redirect()->route('index');
}

public function putEdit($id){
    return view('editPut',compact('id'));
}
 public function putUpdate(Request $request, $id)
    {
        $post = Article::find($id);
        $post->update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description')

        ]);
        return redirect()->route('index');
    }
    public function edit($id){
        $post = Article::find($id);
        return view('editPatch' , compact('post'));
    }
    public function update(Request $request, $id)
    {
        $post = Article::find($id);
        $post->update([
            'description'=>$request->input('description')

        ]);
        return redirect()->route('index');
    }
    
}

