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



 <section class="py-12 px-4 md:px-8">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-10 lg:items-center">
      
      <!-- Left Card -->
      <div class="w-full lg:w-1/2 bg-white rounded-xl shadow-lg overflow-hidden">
        
        <!-- Pink Grid Header -->
        <div class="relative pink-grid h-[360px] p-6 flex flex-col justify-center items-center text-center">
          <!-- Math Icons (Replace with images if needed) -->
          <div class="absolute top-4 left-4 text-yellow-300 text-5xl rotate-12">➕</div>
          <div class="absolute top-4 right-4 text-yellow-300 text-5xl rotate-12">➗</div>
          <div class="absolute bottom-6 right-10 text-yellow-300 text-5xl rotate-6">✔️</div>

          <!-- Text -->
          <p class="text-yellow-200 font-bold text-sm tracking-widest uppercase mb-1">For Adults</p>
          <h1 class="text-white text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight max-w-2xl">
            Can You Outsmart a<br />
            5th Grade Math Whiz?
          </h1>
        </div>

        <!-- Card Body -->
        <div class="px-6 py-5">
          <h3 class="text-lg font-bold mb-1">Can You Outsmart a 5th Grade Math Whiz?</h3>
          <p class="text-gray-600 text-sm mb-1">6 Participants</p>
          <p class="text-gray-800 font-semibold mb-4">Free</p>
          <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold w-full py-2 rounded-md">
            View Details
          </button>
        </div>
      </div>

      <!-- Right Text -->
      <div class="w-full lg:w-1/2 flex flex-col justify-center">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
          Think You’re Smarter Than a 5th Grader? Prove It!
        </h2>
        <p class="text-gray-700 mb-4 text-base max-w-xl">
          Are you ready to challenge your brain and unlock your inner math genius? Take on our fun and engaging math quiz designed for all skill levels!
        </p>
        <ul class="text-gray-800 text-base list-disc pl-5 space-y-2">
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