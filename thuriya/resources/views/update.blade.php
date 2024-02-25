@extends('master')
@section('content')
<div class="ms-7">
    {{--  <!-- Error message for 'name' field -->  --}}
    @if ($errors->has('name'))
        <div class="my-2">
            <div class="p-2 bg-red-100 border border-red-500 rounded-md">
                <span class="text-red-500">{{ $errors->first('name') }}</span>
            </div>
        </div>
    @endif

    {{--  <!-- Error message for 'title' field -->  --}}
    @if ($errors->has('title'))
        <div class="my-2">
            <div class="p-2 bg-red-100 border border-red-500 rounded-md">
                <span class="text-red-500">{{ $errors->first('title') }}</span>
            </div>
        </div>
    @endif

    {{--  <!-- Error message for 'description' field -->  --}}
    @if ($errors->has('description'))
        <div class="my-2">
            <div class="p-2 bg-red-100 border border-red-500 rounded-md">
                <span class="text-red-500">{{ $errors->first('description') }}</span>
            </div>
        </div>
    @endif

    @foreach ($data as $item )
    {{--  @dd($item);  --}}
    <div class="max-w-md p-6 mx-auto bg-white rounded-md shadow-md">
        <form action="{{ route('main#updateData') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="mb-4">
            <label for="name" class="block mb-2 font-bold text-gray-700">
                <span class="ms-2">
                    <i class="fas fa-user"></i>
                </span>
                Name:</label>
            <input type="text" id="name" name="name" required
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" value="{{ $item->name }}">
          </div>

          <div class="mb-4">
            <label for="title" class="block mb-2 font-bold text-gray-700">
                <span class="ms-2">
                    <i class="fas fa-newspaper"></i>
                </span>
                Title:
            </label>
            <input type="text" id="title" name="title" required
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" value="{{ $item->title }}">
          </div>
          <div class="mb-4">
            <label for="title" class="block mb-2 font-bold text-gray-700">
            <span class="ms-2">
                <i class="fas fa-briefcase"></i>
            </span>
                Position:
            </label>
            <input type="text" id="position" name="position" required
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500" value="{{ $item->position }}">
          </div>
          <div class="mb-4">
            <label for="description" class="block mb-2 font-bold text-gray-700">
                <span class="ms-2">
                    <i class="fas fa-comment"></i>
                </span>
                Description:</label>
            <textarea id="description" name="description" rows="5" required
                      class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">{{ $item->description}}</textarea>
          </div>
          <div class="mb-4">
            <label for="image" class="block mb-2 font-bold text-gray-700">Image</label>
            <input type="file" id="image" name="image"  placeholder="Fill out the image here" value="{{ old('image') }}"
                   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">
          </div>
          @if($item->image != null)
            <img src="{{ asset('storage/'.$item->image) }}" alt="Blog Cover Image" class="mb-6 rounded-lg">

          @endif
          <input type="hidden" name="id" value="{{ $item->id }}">
          <div class="flex justify-end p">
            <button type="submit" class="px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:shadow-outline">Submit</button>

          </div>
        </form>
      </div>
    @endforeach
@endsection
