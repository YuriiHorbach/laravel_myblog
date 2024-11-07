@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold mb-4 text-gray-800">{{ $post->title }}</h1>
    <p class="text-gray-600 mb-4">{{ $post->content }}</p>
    <a href="{{ url('/') }}" class="text-blue-500 hover:underline">Back to Posts</a>
</div>
@endsection
