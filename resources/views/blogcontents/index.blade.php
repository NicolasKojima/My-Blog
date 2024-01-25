<!-- resources/views/blogcontents/index.blade.php -->

@foreach($blogcontents as $blogcontent)
    <div>
        <h2>{{ $blogcontent->title }}</h2>
        <p>{{ $blogcontent->description }}</p>
        <p>Author: {{ $blogcontent->author }}</p>
        <img src="{{ asset('storage/' . $blogcontent->image) }}" alt="Blog Image">
        <p>Created at: {{ $blogcontent->created_at }}</p>
    </div>
@endforeach
