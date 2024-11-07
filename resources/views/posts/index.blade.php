@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold mb-6 text-gray-800">Blog Posts</h1>
    @foreach($posts as $post)
    <div class="mb-6 p-4 bg-white shadow-md rounded-lg border border-gray-200 hover:shadow-xl transition-shadow duration-300">
        <h2 class="text-2xl font-semibold text-blue-600 hover:underline">
            <a href="{{ url('/posts/' . $post->id) }}">{{ $post->title }}</a>
        </h2>
        <p class="text-gray-600 mt-2">{{ Str::limit($post->content, 100) }}</p>
        <div class="mt-4">
            <a href="{{ url('/posts/' . $post->id) }}" class="text-blue-500 hover:underline">Read more</a>
        </div>
    </div>
    @endforeach

    <div class="mt-8">
        <a href="{{ url('/posts/create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Create a new post</a>
    </div>
</div>
@endsection
