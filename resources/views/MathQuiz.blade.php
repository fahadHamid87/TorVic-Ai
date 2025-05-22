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
     <x-header/>

     
<section class="py-20 px-6 md:px-12 bg-[#f0f6fc] overflow-hidden relative">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-20 lg:items-center relative z-10">

    <!-- Left Pink Card with skewed background -->
    <div class="w-full lg:w-7/12 bg-gradient-to-tr from-pink-600 via-pink-700 to-pink-800 rounded-3xl shadow-2xl overflow-hidden relative transform -skew-x-6">
      <!-- Inner container to counteract skew -->
      <div class="skew-x-6 p-12 flex flex-col items-center text-center relative z-20">
        <!-- Animated floating math icons -->
        <div class="absolute top-6 left-8 text-yellow-400 text-8xl rotate-[15deg] drop-shadow-xl animate-bounce-slow select-none">➕</div>
        <div class="absolute top-6 right-8 text-yellow-400 text-8xl rotate-[10deg] drop-shadow-xl animate-bounce-delay select-none">➗</div>
        <div class="absolute bottom-12 right-14 text-yellow-400 text-9xl rotate-[5deg] drop-shadow-xl animate-pulse select-none">✔️</div>

        <p class="text-yellow-300 font-bold text-xs tracking-widest uppercase mb-4 drop-shadow-md">FOR ADULTS</p>

        <h1 class="text-white text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight max-w-xl drop-shadow-lg">
          CAN YOU <span class="bg-gradient-to-r from-yellow-300 via-pink-400 to-pink-600 bg-clip-text text-transparent">OUTSMART</span><br />
          A <span class="underline decoration-yellow-300 decoration-4">5TH GRADE</span><br />
          MATH WHIZ?
        </h1>
      </div>

      <!-- Card Body aligned left -->
      <div
        class="skew-x-6 bg-white bg-opacity-20 backdrop-blur-md px-10 py-10 text-left rounded-bl-3xl rounded-br-3xl border-t border-pink-300 border-opacity-50"
      >
        <h3 class="text-xl font-semibold mb-2 text-pink-50 drop-shadow-sm">Can You Outsmart a 5th Grade Math Whiz?</h3>
        <p class="text-pink-200 text-sm mb-4">6 Participants</p>
        <hr class="border-pink-300 border-opacity-50 mb-6" />
        <p class="text-pink-50 font-semibold text-2xl mb-8 drop-shadow-md">Free</p>
        <button
          class="relative inline-block px-12 py-4 bg-gradient-to-r from-yellow-400 via-pink-500 to-pink-600 text-white font-bold rounded-full overflow-hidden group shadow-lg hover:shadow-2xl transition-all duration-300"
        >
          <span class="relative z-20">View Details</span>
          <span
            class="absolute inset-0 bg-gradient-to-r from-pink-600 via-pink-400 to-yellow-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-full"
          ></span>
          <span
            class="absolute -inset-1 border-4 border-yellow-300 rounded-full opacity-0 group-hover:opacity-100 animate-ping-fast"
          ></span>
        </button>
      </div>
    </div>

    <!-- Right Text Section with glass effect -->
    <div
      class="w-full lg:w-5/12 bg-white bg-opacity-20 backdrop-blur-lg rounded-3xl p-12 flex flex-col justify-center drop-shadow-lg"
    >
      <h2 class="text-5xl font-extrabold mb-8 leading-snug max-w-lg text-gray-900">
        Think You’re <span class="text-pink-600 underline decoration-yellow-400 decoration-4">Smarter</span> Than a 5th Grader? <br />
        <span class="text-yellow-400">Prove It!</span>
      </h2>
      <p class="text-gray-700 mb-8 text-lg max-w-md leading-relaxed font-semibold">
        Are you ready to challenge your brain and unlock your inner math genius? Take on our fun and engaging math quiz designed for all skill levels!
      </p>
      <ul class="text-gray-900 text-xl list-disc pl-8 space-y-4 max-w-md font-semibold">
        <li class="hover:text-pink-600 transition">Level 1: Outsmart a 5th grader in math.</li>
        <li class="hover:text-yellow-400 transition">Level 2: Prove you’re 50% smarter.</li>
        <li class="hover:text-pink-600 transition">Level 3: Rise to the top as the ultimate math champion.</li>
      </ul>
    </div>
  </div>

  <!-- Decorative floating blobs -->
  <div
    class="hidden md:block absolute -top-20 -left-20 w-72 h-72 bg-pink-400 rounded-full opacity-30 blur-3xl animate-blob"
    style="animation-delay: 0s"
  ></div>
  <div
    class="hidden md:block absolute bottom-20 right-10 w-64 h-64 bg-yellow-400 rounded-full opacity-20 blur-2xl animate-blob animation-delay-2000"
  ></div>

  <style>
    /* Custom slow bounce animation */
    @keyframes bounce-slow {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10%);
      }
    }
    .animate-bounce-slow {
      animation: bounce-slow 4s ease-in-out infinite;
    }
    /* Delay for second bounce */
    .animate-bounce-delay {
      animation: bounce-slow 4s ease-in-out 2s infinite;
    }
    /* Fast ping for button */
    @keyframes ping-fast {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      100% {
        transform: scale(1.5);
        opacity: 0;
      }
    }
    .animate-ping-fast {
      animation: ping-fast 1.5s cubic-bezier(0, 0, 0.2, 1) infinite;
    }
    /* Blob float */
    @keyframes blob {
      0%, 100% {
        transform: translate(0, 0) scale(1);
      }
      33% {
        transform: translate(30px, -50px) scale(1.1);
      }
      66% {
        transform: translate(-20px, 20px) scale(0.9);
      }
    }
    .animate-blob {
      animation: blob 7s ease-in-out infinite;
    }
  </style>
</section>











     <x-footer/>
</body>
</html>