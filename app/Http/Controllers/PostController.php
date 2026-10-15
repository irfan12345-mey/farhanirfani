<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    // Menampilkan form untuk membuat post
    public function create()
    {
        return view('posts.create');
    }

    // Menyimpan data post ke database
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        // Menyimpan data
        Post::create($validated);

        return redirect()->route('posts.create')->with('success', 'Post created successfully!');
    }
}