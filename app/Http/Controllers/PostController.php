<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    public function index()
    {
        $post = Post::with('user')->orderBy('id', 'desc')->get();
        return view('posts.feedback', [
           'posts' => $post
        ]);
    }
    public function create()
    {
//        if (Gate::denies('create-post')) {
//            abort(403);
//        }
        return view('posts.post');
    }

    public function store (Request $request)
    {
//        if (Gate::denies('create-post')) {
//            abort(403);
//        } для ограничения

        $validated = $request->validate ([
            'theme' => 'required|min:3|max:255',
            'feedback_text' => 'required|string|min:5',
        ]);

         Post::create([
             'theme'=>$validated ['theme'],
             'feedback_text'=> $validated ['feedback_text'],
             'user_id'=>auth()->user()->id,
         ]);
         return redirect('/posts/feedback');
    }
    public function edit (string $id)
    {
        $post = Post::query()->findOrFail($id);

        return view('posts.edit', [
            'post'=>$post,
        ]);
    }
    public function update (Request $request, string $id)
    {
        $post = Post::query()->findOrFail($id);

        $validated = $request->validate ([
            'theme' => 'required|min:3|max:255',
            'feedback_text' => 'required|string|min:5',
        ]);

        $post->update($validated);
        return redirect('/posts/feedback');
    }
    public function destroy (string $id)
    {
        $post = Post::query()->findOrFail($id);
        $post->delete();
        return redirect('/posts/feedback');
    }
}
