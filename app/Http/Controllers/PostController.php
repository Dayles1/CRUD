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
            $post= new Article();
            $post->title = $request->title;
            $post->description=$request->description;
            // $post = $request->file('image');
            // $fileName = time() . '.' . $post->getClientOriginalExtension(); 
            // $filePath = $post->storeAs('uploads', $fileName, 'public'); 
            // response()->json(['filePath' => $filePath]); 
            $post->save();

            return redirect()->route('index');
        }
        public function delete($id){
            return view('delete', compact('id'));
        }
        public function destroy($id)
{
    $post = Article::find($id);
    @unlink(storage_path('App/pupblic') .''. $post->id .'');
    $post->delete();
    return redirect()->route('index');
}

public function putEdit($id){
    $post = Article::find($id);
    return view('editPut',compact('post'));
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

