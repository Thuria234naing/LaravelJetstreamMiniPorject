@extends('master')
@section('content')
<div class="flex mx-8 mt-2 ">

    <div class="w-5/12 ">
        @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" class="relative px-6 py-2 font-bold text-center text-white transition duration-300 bg-purple-600 rounded-full shadow-md left-10 bottom-28 hover:bg-purple-700" onclick="event.preventDefault(); this.closest('form').submit();">
            Logout
        </a>
    </form>
@endauth

        <div class="flex items-center justify-center mb-3">
            <div class="flex items-center bg-white rounded-full shadow-xl">
            <form action="{{ route('main#home') }}" method="get">
          <input type="text" name="searchKey" placeholder="Search..." class="px-4 py-2 rounded-l-full focus:outline-none" />
            <button class="px-4 text-blue-500 rounded-r-full hover:text-blue-600 focus:outline-none" type="submit">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35a8.5 8.5 0 1 0-1.14 1.14L21 21zm-9.5-3.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z"></path>
                </svg>
              </button>
        </form>
        </div>
      </div>
        {{--  <!-- Error message for 'name' field -->  --}}
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
            @if ($errors->has('image'))
            <div class="my-2">
                <div class="p-2 bg-red-100 border border-red-500 rounded-md">
                    <span class="text-red-500">{{ $errors->first('image') }}</span>
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

        </div>
        @if (session('status') == 'update')
       <div class="mb-4 ms-6">
        <div x-data="{ isOpen: true }" x-show="isOpen" class="relative px-4 py-3 text-gray-700 bg-indigo-100 border border-indigo-400 rounded" role="alert">
            <span class="block sm:inline">Update Success</span>
            <button @click="isOpen = false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="w-3 h-6 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.35 14.35a1 1 0 0 1-1.41 0L10 11.41l-2.94 2.94a1 1 0 1 1-1.41-1.41L8.59 10 5.65 7.06a1 1 0 0 1 1.41-1.41L10 8.59l2.94-2.94a1 1 0 0 1 1.41 1.41L11.41 10l2.94 2.94a1 1 0 0 1 0 1.41z"/>
              </svg>
            </button>
          </div>
       </div>
       @elseif (session('status') == 'delete')
       <div class="mb-4 ms-6">
        <div x-data="{ isOpen: true }" x-show="isOpen" class="relative px-4 py-3 text-gray-700 bg-red-100 border border-red-400 rounded" role="alert">
            <span class="block sm:inline">Delete Success</span>
            <button @click="isOpen = false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="w-3 h-6 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.35 14.35a1 1 0 0 1-1.41 0L10 11.41l-2.94 2.94a1 1 0 1 1-1.41-1.41L8.59 10 5.65 7.06a1 1 0 0 1 1.41-1.41L10 8.59l2.94-2.94a1 1 0 0 1 1.41 1.41L11.41 10l2.94 2.94a1 1 0 0 1 0 1.41z"/>
              </svg>
            </button>
          </div>
       </div>
       @elseif (session('status') == 'create')
       <div class="mb-4 ms-6">
        <div x-data="{ isOpen: true }" x-show="isOpen" class="relative px-4 py-3 text-gray-700 border rounded bg-emerald-100 border-emerald-400" role="alert">
            <span class="block sm:inline">create Success</span>
            <button @click="isOpen = false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
              <svg class="w-3 h-6 fill-current" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path d="M14.35 14.35a1 1 0 0 1-1.41 0L10 11.41l-2.94 2.94a1 1 0 1 1-1.41-1.41L8.59 10 5.65 7.06a1 1 0 0 1 1.41-1.41L10 8.59l2.94-2.94a1 1 0 0 1 1.41 1.41L11.41 10l2.94 2.94a1 1 0 0 1 0 1.41z"/>
              </svg>
            </button>
          </div>
       </div>
@endif
<div class="max-w-md p-6 mx-auto bg-white rounded-md shadow-md">
            <form action="{{ route('main#create') }}" method="post"  enctype="multipart/form-data"  class="ms-6" >
                @csrf

              <div class="mb-4">
                <label for="name" class="block mb-2 font-bold text-gray-700">Name:</label>
                <input type="text" id="name" name="name"   placeholder="Enter the author name  here" value="{{ old('name') }}"
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">
              </div>

              <div class="mb-4">
                <label for="title" class="block mb-2 font-bold text-gray-700">Title:</label>
                <input type="text" id="title" name="title"  placeholder="Enter the title here" value="{{ old('title') }}"
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">
              </div>
              <div class="mb-4">
                <label for="image" class="block mb-2 font-bold text-gray-700">Image</label>
                <input type="file" id="image" name="image"  placeholder="Fill out the image here" value="{{ old('image') }}"
                       class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">
              </div>
              <div class="mb-4">
                <label for="description" class="block mb-2 font-bold text-gray-700">Description:</label>
                <textarea id="description" name="description" rows="5"  placeholder="Enter your blog here"
                          class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-indigo-500">{{ old('description') }}</textarea>
              </div>

              <div class="flex justify-end">
                <button type="submit" class="px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:outline-none focus:shadow-outline"><i class="fa-solid fa-download me-1"></i>Save</button>

              </div>
            </form>
          </div>

    {{--  <button type="submit" class="float-right px-3 py-2 mt-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm me-14 hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 "><i class="fa-solid fa-download me-1"></i>Save</button>  --}}
    </form>
    </div>
    <div class="w-7/12 ">
      @if(count($data) != 0)
      @foreach ($data as $item )
      <div class="container px-6 py-1 mx-auto">
 <h1 class="mb-5 text-4xl font-bold text-gray-800">{{ $item->title }} | {{ $item->id }}</h1>
 <div class="mb-3">
     <span class="text-gray-600">Published on {{ $item->created_at->format('F d, Y \a\t h:i A') }} , By <br> <span class=" text-emerald-900">{{ $item->name }}</span></span>
   </div>

 <div class="max-w-3xl mx-auto">
    @if($item->image != null)
        <img src="{{ asset('storage/'.$item->image) }}" alt="Blog Cover Image" class="mb-6 rounded-lg">

    @else
        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d1/Image_not_available.png" alt="Blog Cover Image" class="mb-6 rounded-lg">

    @endif
   <p class="mb-4 text-lg text-gray-700">
     {{ substr($item->description,0,100) }}...
     <a href="{{ url('main/seeMore').'/'.$item->id }}" class="text-blue-600 hover:text-blue-800">
         <span class="">See more</span>
         <i class="fa-solid fa-arrow-right"></i>
       </a>
   </p>


   <div class="flex items-center justify-between">
     <div>
     </div>
   </div>
   <div class="flex justify-between my-2">
                 <a href="{{ url('main/update').'/'.$item->id }}"><button class="px-3 py-2 text-sm font-semibold text-white bg-yellow-500 rounded-md shadow-sm hover:bg-yellow-400 focus-visible:outline-indigo-600"><i class="me-1 fa-solid fa-pen-to-square"></i>Edit</button></a>
   <div >
         <a href="{{ url('main/seeMore').'/'.$item->id }}"><button class="px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class="me-1 fa-solid fa-circle-info"></i>See More</button></a>
         <a href="{{ url('main/delete').'/'.$item->id}}"><button class="px-3 py-2 text-sm font-semibold text-white bg-red-600 rounded-md shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><i class=" me-1 fa-solid fa-person-circle-minus"></i>Delete</button></a>
   </div>
 </div>
 </div>
</div>
     @endforeach
     @else
     <div class="relative px-4 py-3 text-red-700 bg-red-100 border border-red-400 rounded mt-14 ms-4" role="alert">
        <strong class="font-bold">No data available!</strong>
        <span class="block sm:inline">Please check back later.</span>
      </div>

      @endif


    </div>
</div>
<div class="flex justify-center my-4 ">
    {{ $data->appends(request()->query())->links() }}
</div>
    @endsection

