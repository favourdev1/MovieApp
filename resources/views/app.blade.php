<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    {{-- <script src="/node_modules/jquery/dist/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
    @vite('resources/css/app.css')

    @vite('resources/css/main.css')
    @vite('resources/js/app.js')

    {{-- @vite('public/js/glide/dist/css/glide.core.min.css') --}}

   
</head>

<body class="flex flex-col bg-black">

    @yield('content')
   
    {{-- @vite('public/js/glide/dist/glide.min.js') --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script> --}}
    {{-- 
    <script>
        new Glide('.glide', {
            type: 'carousel',
            startAt: 0,
            perView: 3,
        gap: 40
        }).mount();
      </script> --}}

</body>

</html>
