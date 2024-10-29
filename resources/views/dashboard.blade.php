<x-app-layout>
  <body class="bg-black">
     <!-- Hero Section -->
  <section class="hero text-center content-center">
    <div class="container mx-auto px-4">
      <h1 class="text-9xl tracking-widest uppercase font-protest text-[#D1BDC6] mb-4">GAMEDEV</h1>
      <p class="text-2xl tracking-wide text-blue-500 uppercase mb-8">
        Discover the Best Free-To-Play Games with Ease!
      </p>
       <!-- START BUTTON  -->

     <a
     href="#populargames"
     class="arrow bg-black fill-white text-white px-8 py-3 rounded-full uppercase font-medium hover:bg-inherit transition duration-300"
     >popular games</i></a
   >
   </section>
   <!-- Popular Games Section -->
   <section class="py-20 bg-black" id="populargames">
     <div class="container mx-auto px-4">
       <h2 class="text-4xl font-bold text-center uppercase mb-4">
         most popular games
       </h2>
       <p class="text-center text-xl mb-4">
         "Expand your horizons! Dive into new genres and discover exciting
         adventures beyond your usual games."
       </p>
        <!-- CAROUSEL -->
       
        <div id="carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded md:h-screen">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img
                        src="{{ asset('lol.webp') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="apex"
                    />
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                        src="{{ asset('deadlock.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="dota2"
                    />
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                        src="{{ asset('wz.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="warzone"
                    />
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                        src="{{ asset('apex.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="lol"
                    />
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img
                        src="{{ asset('valorant.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="valorant"
                    />
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
  
          <!-- Game Cards -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12">
            <!-- Valorant Card -->
            <div class="card bg-custom-red rounded-lg overflow-hidden">
              <img
                src="{{asset('valorant.jpg')}}"
                alt="valorant image"
                class="w-full border-b border-[#d1bdc6]"
              />
              <div class="p-6">
                <h3 class="text-2xl text-white font-semibold text-center uppercase mb-4">
                  Valorant
                </h3>
                <p class="mb-4">
                  Test your mettle in Riot Games' character-based FPS shooter
                  Valorant.
                </p>
                <a
                  href="https://playvalorant.com/en-sg/"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-block bg-red-600 text-white px-4 py-2 rounded mb-4 hover:bg-red-700 transition duration-300"
                  >Download</a
                >
                <ul class="space-y-2">
                  <li><strong>Genre:</strong> Shooter</li>
                  <li><strong>Platform:</strong> PC (WINDOWS)</li>
                  <li><strong>Release Date:</strong> 2020-06-02</li>
                </ul>
                <div class="mt-4">
                  <a
                    href="https://www.freetogame.com/valorant"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-block bg-red-600 text-white px-4 py-2 rounded text-sm hover:bg-red-700 transition duration-300"
                    >View Profile</a
                  >
                </div>
              </div>
            </div>
  
            <!-- League of Legends Card -->
  
            <div class="card bg-custom-red rounded-lg overflow-hidden">
              <img
                src="{{asset('lol.webp')}}"
                alt="LoL image"
                class="w-full border-b border-[#d1bdc6]"
              />
              <div class="p-6">
                <h3 class="text-2xl text-white font-semibold text-center uppercase mb-4">
                  League of Legends
                </h3>
                <p class="mb-4">
                  A free-to-play MOBA game, and one of the most played pc game in
                  the world.
                </p>
                <a
                  href="https://www.leagueoflegends.com/en-ph/"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-block bg-red-600 text-white px-4 py-2 rounded mb-4 hover:bg-red-700 transition duration-300"
                  >Download</a
                >
                <ul class="space-y-2">
                  <li><strong>Genre:</strong> MOBA</li>
                  <li><strong>Platform:</strong> PC (WINDOWS)</li>
                  <li><strong>Release Date:</strong> 2009-10-27</li>
                </ul>
                <div class="mt-4">
                  <a
                    href="https://www.freetogame.com/league-of-legends"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-block bg-red-600 text-white px-4 py-2 rounded text-sm hover:bg-red-700 transition duration-300"
                    >View Profile</a
                  >
                </div>
              </div>
            </div>
            <!-- Dota 2 Card -->
            <div class="card bg-custom-red rounded-lg overflow-hidden">
              <img
                src="{{asset('dota.jpg')}}"
                alt="dota image"
                class="w-full border-b border-[#d1bdc6]"
              />
              <div class="p-6">
                <h3 class="text-2xl text-white font-semibold text-center uppercase mb-4">
                  Dota 2
                </h3>
                <p class="mb-4">
                  A free-to-play MOBA game, and one of the most played pc game in
                  the world.
                </p>
                <a
                  href="https://www.dota2.com/home"
                  target="_blank"
                  rel="noopener noreferrer"
                  class="inline-block bg-red-600 text-white px-4 py-2 rounded mb-4 hover:bg-red-700 transition duration-300"
                  >Download</a
                >
                <ul class="space-y-2">
                  <li><strong>Genre:</strong> MOBA</li>
                  <li><strong>Platform:</strong> PC (WINDOWS)</li>
                  <li><strong>Release Date:</strong> 2013-07-09</li>
                </ul>
                <div class="mt-4">
                  <a
                    href="https://www.freetogame.com/dota-2"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-block bg-red-600 text-white px-4 py-2 rounded text-sm hover:bg-red-700 transition duration-300"
                    >View Profile</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Recommendations Section -->
    <section class="bg-slate-800 py-20">
      <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-4">RECOMMENDATIONS</h2>
        <p class="text-center text-xl mb-12">
          "Step out of your comfort zone! Explore other games for new
          challenges, unique stories, and endless fun."
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
          <!-- Call of Duty: Warzone Card -->
          <div class="card bg-custom-red rounded-lg overflow-hidden">
            <img
              src="{{asset('wz.jpg')}}"
              alt="warzone image"
              class="w-full border-b border-[#d1bdc6]"
            />
            <div class="p-6">
              <h3 class="text-2xl uppercase font-semibold text-center mb-4">
                Call of Duty: Warzone
              </h3>
              <p class="mb-4">
                A standalone free-to-play battle royale and modes accessible via
                Call of Duty: Modern Warfare.
              </p>
              <a
                href="https://www.callofduty.com/warzone"
                target="_blank"
                class="inline-block uppercase bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition duration-300"
                >Learn more</a
              >
            </div>
          </div>

          <!-- Deadlock Card -->
          <div class="card bg-custom-red rounded-lg overflow-hidden">
            <img
              src="{{asset('deadlock.jpg')}}"
              alt="deadlock image"
              class="w-full border-b border-[#d1bdc6]"
            />
            <div class="p-6">
              <h3 class="text-2xl uppercase font-semibold text-center mb-4">
                Deadlock
              </h3>
              <p class="mb-4">
                Deadlock is an upcoming Multiplayer action game developed and
                published by Valve.
              </p>
              <a
                href="https://store.steampowered.com/app/1422450/Deadlock/"
                target="_blank"
                class="inline-block bg-red-600 text-white px-6 py-2 rounded uppercase hover:bg-red-700 transition duration-300"
                >Learn more</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

     
</body>
      @include('profile.partials._footer')
    
</x-app-layout>