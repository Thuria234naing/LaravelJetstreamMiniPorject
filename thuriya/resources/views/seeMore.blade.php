@extends('master')
@section('content')
<div class="container py-8 mx-auto">
    {{--  @dd($status)  --}}
    @foreach ($data as $item )
    <div class="max-w-3xl p-6 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex items-center mb-4">
          <span class="mr-2 text-lg text-blue-500"><i class="fas fa-newspaper"></i></span>
          <h1 class="text-3xl font-bold">{{ $item->title }}</h1>
        </div>
        <div class="mb-6">
          <img src="https://via.placeholder.com/800x400" alt="News Image" class="object-cover w-full h-64 rounded-lg">
        </div>
        <p class="mb-6 text-gray-700">{{ $item->description }}</p>
        <a href="{{ route('main#home') }}" class="flex items-center font-semibold text-blue-500 hover:text-blue-700">
          <span class="mr-2"><i class="fas fa-arrow-left"></i></span>
          Back to all news
        </a>
      </div>
    @endforeach

  </div>

@endsection
