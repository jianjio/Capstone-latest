<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>GameDev</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="bg-black font-poppins">
    <!-- Header -->
    <header class="bg-transparent py-8">
      <div class="container mx-auto flex justify-between items-center px-4">
        <a href="/home" class="text-gray-400  text-6xl uppercase tracking-wide font-protest">
          <img src="{{asset('logo-footer.png')}}" class="w-2/3" alt="logo" />
        </a>
        <nav class="hidden md:flex space-x-20">
         
          @if (Route::has('login'))
              <div class="hidden md:flex space-x-10 sm:top-2 sm:right-0 p-6 text-right z-10">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="text-2xl text-neutral-500 hover:text-gray-300">Log in</a>
          
                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="text-2xl text-neutral-500 hover:text-gray-300">Register</a>
                      @endif
                  @endauth
              </div>
          @endif
        </nav>
        <button class="md:hidden">
          <svg
          class="w-6 h-6 text-white"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
          >
          <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16"
          ></path>
        </svg>
      </button>
    </div>
    </header>
    <section class="hero text-center content-center">
      <div class="container mx-auto px-2">
        <div>
        <h1 class="text-9xl tracking-widest font-protest text-[#D1BDC6]">GAMEDEV</h1>
        <p class="text-2xl tracking-wide text-blue-500 uppercase mb-8">
          Discover the Best Free-To-Play Games with Ease!
        </p>
      </div>
      </section>
  </body>
  </html>
  @include('profile.partials._footer')