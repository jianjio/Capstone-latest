<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>GameDev</title>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Guerrilla&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
  </head>

  <body class="bg-black font-['poppins']">
    <!-- Header -->
    <header class="bg-transparent py-5">
      <div class="container mx-auto flex justify-between items-center px-4">
        <a href="{{ route('dashboard') }}" class="text-neutral-500 flex text-6xl uppercase tracking-wide font-['protest_guerrilla']">
          <img src="{{asset('logo-footer.png')}}" class="w-1/5" alt="logo" />GameDev
        </a>
        <nav class="hidden md:flex space-x-20">
            <a href="/home" class="text-3xl text-neutral-500 hover:text-gray-300"><i class="fa-solid fa-house"></i></a>
            <a href="/library" class="text-3xl text-neutral-500 hover:text-gray-300"
              ><i class="fa-solid fa-briefcase"></i></a
            >
            <a href="/store" class="text-3xl text-neutral-500 hover:text-gray-300"
              ><i class="fa-solid fa-coins"></i></a
            >
            <a href="/home" class="text-3xl text-neutral-500 hover:text-gray-300"
              ><i class="fa-solid fa-scroll"></i></a
            >
            <a href="/about" class="text-3xl text-neutral-500 hover:text-gray-300"
              ><i class="fa-solid fa-address-card"></i></a
            >
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


