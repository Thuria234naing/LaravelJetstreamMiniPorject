<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* Apply the Poppins font to placeholders */
        ::placeholder {
            font-family: 'Poppins', sans-serif;
            /* Adjust font styles as needed */
            font-size: 14px;
            font-weight: 500;
            color: #8e8e8e; /* Placeholder text color */
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <div class="container p-8 px-6 mx-auto text-center">
        <h1 class="mb-4 text-4xl font-bold leading-tight text-gray-800 md:text-6xl">
          <span class="text-purple-600">Unleash</span>
          <br class="md:hidden">
          Your Creativity
        </h1>
        <p class="text-lg text-gray-700">Discover new possibilities</p>
      </div>    @yield('content')
      <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
</body>
</html>
