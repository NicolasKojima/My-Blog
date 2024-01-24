<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function create()
    {
        return view('blogposts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'author' => 'nullable|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images');

        $blogpost = Blogpost::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'author' => $validatedData['author'],
            'image_path' => $imagePath,
        ]);

        return redirect('/blogposts/create')->with('success', 'Blogpost created successfully!');
    }

    public function index()
    {
        $blogposts = Blogpost::all();
        return view('bookblog', compact('blogposts'));
    }
}
