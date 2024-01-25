<?php

namespace App\Http\Controllers;

use App\Models\Blogcontent;
use Illuminate\Http\Request;

class BlogcontentController extends Controller
{

    public function create()
    {
        return view('blogcontents.create');
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:5000',
        'title' => 'required',
        'description' => 'required',
        'author' => 'required',
        'category' => 'required|in:book,project,studies',
        'rating' => 'required|integer|min:1|max:10',
    ]);

    $imagePath = $request->file('image')->store('images', 'public');

    Blogcontent::create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'author' => $request->input('author'),
        'image' => $imagePath,
        'category' => $request->input('category'),
        'rating' => $request->input('rating'),
    ]);

    return redirect('/blogcontents/create')->with('status', 'Form submitted successfully');
}
}
