@extends('master')
@section('content')
<div class="text-center ">
    <button  id="toggleButton" class="px-6 py-2 font-bold text-center text-white transition duration-300 bg-purple-600 rounded-full shadow-md hover:bg-purple-700">Get Started</button>

</div>
<div class="flex flex-row-reverse justify-center  gap-10 p-5 " id="hiddenButtons" >
    <button class="px-6 py-2 font-bold text-center text-white transition duration-300 bg-purple-600 rounded-full shadow-md hover:bg-purple-700">
        <a href="{{ route('login') }}">Login</a>

    </button>
    <button  class="px-6 py-2 font-bold text-center text-white transition duration-300 bg-purple-600 rounded-full shadow-md hover:bg-purple-700">
        <a href="{{ route('register') }}">Sign Up</a>
    </button>
</div>
<script>
    const toggleButton = document.getElementById('toggleButton');
    const hiddenButtons = document.getElementById('hiddenButtons');

    toggleButton.addEventListener('click', () => {
        toggleButton.classList.add('hidden');
        hiddenButtons.classList.remove('hidden');
    });
</script>

@endsection
