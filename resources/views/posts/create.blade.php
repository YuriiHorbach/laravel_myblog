@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold mb-6">Create a New Post</h1>
    <form action="{{ url('/posts') }}" method="POST" class="bg-white shadow-md rounded-lg p-8 mb-4">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required>
        </div>
        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" id="content" rows="6" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-opacity-50" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Create Post</button>
    </form>
    <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Back to Posts</a>
</div>
@endsection
