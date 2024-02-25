<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Bar UI with Tailwind CSS</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
  <div class="flex items-center justify-center h-screen">
    <div class="flex items-center bg-white rounded-full shadow-xl">
      <input type="text" placeholder="Search..." class="px-4 py-2 rounded-l-full focus:outline-none" />
      <button class="px-4 text-blue-500 rounded-r-full hover:text-blue-600 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35a8.5 8.5 0 1 0-1.14 1.14L21 21zm-9.5-3.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11z"></path>
        </svg>
      </button>
    </div>
  </div>
</body>
</html>
