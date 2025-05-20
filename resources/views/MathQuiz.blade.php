<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <script src="https://cdn.tailwindcss.com"></script>
 <style>
  .pink-grid {
    background-color: #f43f5e; /* Tailwind pink-500 */
    background-image: linear-gradient(0deg, rgba(255,255,255,0.15) 1px, transparent 1px),
                      linear-gradient(90deg, rgba(255,255,255,0.15) 1px, transparent 1px);
    background-size: 40px 40px;
  }
</style>

<body>
     <x-Header/>

     
<section class="py-16 px-6 md:px-12 bg-[#f0f6fc]">
  <div class="max-w-7xl flex flex-col lg:flex-row gap-16 lg:items-center">
    <!-- Left Pink Card -->
    <div class="w-full lg:w-7/12 bg-white shadow-lg overflow-hidden">
      <!-- Pink Grid Header -->
      <div class="relative h-[360px] p-8 flex flex-col justify-center items-center text-center bg-pink-600" style="background-image: linear-gradient(rgba(255 255 255 / 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255 255 255 / 0.1) 1px, transparent 1px); background-size: 40px 40px;">
        <!-- Math Icons -->
        <div class="absolute top-5 left-6 text-yellow-400 text-7xl rotate-12 drop-shadow-lg select-none">➕</div>
        <div class="absolute top-5 right-6 text-yellow-400 text-7xl rotate-12 drop-shadow-lg select-none">➗</div>
        <div class="absolute bottom-8 right-12 text-yellow-400 text-8xl rotate-6 drop-shadow-lg select-none">✔️</div>

        <!-- Text -->
        <p class="text-yellow-400 font-bold text-xs tracking-widest uppercase mb-2">FOR ADULTS</p>
        <h1 class="text-white text-3xl sm:text-4xl md:text-5xl font-extrabold leading-snug max-w-3xl">
          CAN YOU OUTSMART A<br />
          5TH GRADE MATH WHIZ?
        </h1>
      </div>

      <!-- Card Body aligned left -->
      <div class="px-8 py-7 text-left">
        <h3 class="text-lg font-semibold mb-1">Can You Outsmart a 5th Grade Math Whiz?</h3>
        <p class="text-gray-600 text-sm mb-2">6 Participants</p>
        <hr class="border-gray-300 mb-4" />
        <p class="text-gray-900 font-semibold mb-5">Free</p>
        <button class="bg-blue-600 hover:bg-blue-700 text-white text-base font-semibold py-3 rounded-md w-full transition">
          View Details
        </button>
      </div>
    </div>

    <!-- Right Text Section -->
    <div class="w-full lg:w-5/12 flex flex-col justify-center pl-12 md:pl-20">
      <h2 class="text-4xl md:text-4xl font-extrabold mb-6 leading-snug max-w-xl">
        Think You’re Smarter Than a 5th Grader? Prove It!
      </h2>
      <p class="text-gray-800 mb-6 text-base max-w-lg leading-relaxed font-semibold">
        Are you ready to challenge your brain and unlock your inner math genius? Take on our fun and engaging math quiz designed for all skill levels!
      </p>
      <ul class="text-gray-900 text-lg list-disc pl-6 space-y-3 max-w-lg">
        <li>Level 1: Outsmart a 5th grader in math.</li>
        <li>Level 2: Prove you’re 50% smarter.</li>
        <li>Level 3: Rise to the top as the ultimate math champion.</li>
      </ul>
    </div>
  </div>
</section>











     <x-Footer/>
</body>
</html>