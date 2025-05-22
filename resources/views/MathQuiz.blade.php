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
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-16 lg:items-center relative z-10">

    <!-- Left Pink Card -->
    <div class="w-full lg:w-7/12 bg-gradient-to-tr from-pink-700 via-pink-800 to-pink-900 rounded-3xl shadow-xl relative overflow-hidden">
      
      <!-- Floating Yellow Math Icons -->
      <div class="absolute top-8 left-8 text-yellow-400 text-7xl drop-shadow-lg animate-float-slow select-none">➕</div>
      <div class="absolute top-14 right-12 text-yellow-400 text-8xl drop-shadow-lg animate-float-delay select-none">➗</div>
      <div class="absolute bottom-10 right-20 text-yellow-400 text-9xl drop-shadow-lg animate-pulse select-none">✔️</div>

      <!-- Card content container -->
      <div class="p-14 relative z-10 text-center">
        <p class="text-yellow-300 font-semibold text-xs tracking-widest uppercase mb-5 drop-shadow-md">FOR ADULTS</p>
        <h1 class="text-white font-extrabold text-5xl md:text-6xl max-w-lg mx-auto drop-shadow-lg leading-tight">
          CAN YOU
          <span class="animated-gradient-text bg-gradient-to-r from-yellow-300 via-pink-400 to-pink-600 bg-clip-text text-transparent">OUTSMART</span><br />
          A <span class="underline decoration-yellow-300 decoration-4">5TH GRADE</span><br />
          MATH WHIZ?
        </h1>

        <div class="mt-12 bg-white bg-opacity-10 backdrop-blur-sm rounded-2xl px-12 py-10 text-left max-w-md mx-auto">
          <h3 class="text-pink-100 font-semibold text-2xl mb-2 drop-shadow-sm">Can You Outsmart a 5th Grade Math Whiz?</h3>
          <p class="text-yellow-200 mb-4 font-medium">6 Participants</p>
          <hr class="border-yellow-300 border-opacity-50 mb-6" />
          <p class="text-yellow-100 font-bold text-3xl mb-8 drop-shadow-md">Free</p>
          <button
            class="w-full py-4 bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 rounded-full font-bold text-white shadow-lg hover:scale-105 transition-transform duration-300"
          >
            View Details
          </button>
        </div>
      </div>
    </div>

    <!-- Right Text Panel -->
    <div
      class="w-full lg:w-5/12 bg-white rounded-3xl p-14 shadow-lg flex flex-col justify-center"
    >
      <h2 class="text-4xl font-extrabold mb-8 max-w-md text-gray-900 leading-snug">
        Think You’re <span class="text-pink-600 underline decoration-yellow-400 decoration-4">Smarter</span> Than a 5th Grader?<br />
        <span class="text-yellow-500">Prove It!</span>
      </h2>
      <p class="text-gray-700 mb-10 text-lg font-semibold max-w-md leading-relaxed">
        Are you ready to challenge your brain and unlock your inner math genius? Take on our fun and engaging math quiz designed for all skill levels!
      </p>

      <!-- Simple Vertical Level List -->
      <ul class="max-w-md space-y-6 font-semibold text-lg text-gray-900 pl-6 list-disc marker:text-yellow-500">
        <li class="hover:text-yellow-500 transition-colors cursor-pointer">Level 1: Outsmart a 5th grader in math.</li>
        <li class="hover:text-yellow-500 transition-colors cursor-pointer">Level 2: Prove you’re 50% smarter.</li>
        <li class="hover:text-yellow-500 transition-colors cursor-pointer">Level 3: Rise to the top as the ultimate math champion.</li>
      </ul>
    </div>
  </div>

  <!-- Background floating blobs -->
  <div
    class="hidden md:block absolute -top-24 -left-24 w-72 h-72 bg-yellow-400 rounded-full opacity-20 blur-3xl animate-blob"
    style="animation-delay: 0s"
  ></div>
  <div
    class="hidden md:block absolute bottom-16 right-16 w-64 h-64 bg-yellow-400 rounded-full opacity-15 blur-2xl animate-blob animation-delay-2000"
  ></div>

  <style>
    /* Gradient moving text */
    @keyframes gradientMove {
      0% {
        background-position: 0% 50%;
      }
      100% {
        background-position: 200% 50%;
      }
    }
    .animated-gradient-text {
      background: linear-gradient(90deg, #facc15, #ec4899, #f97316);
      background-size: 200% 200%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: gradientMove 5s linear infinite;
    }

    /* Floating animations */
    @keyframes floatSlow {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-12px); }
    }
    @keyframes floatDelay {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(10px); }
    }
    @keyframes pulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.7; transform: scale(1.1); }
    }
    .animate-float-slow {
      animation: floatSlow 6s ease-in-out infinite;
    }
    .animate-float-delay {
      animation: floatDelay 6s ease-in-out 2s infinite;
    }
    .animate-pulse {
      animation: pulse 3s ease-in-out infinite;
    }

    /* Blob float */
    @keyframes blob {
      0%, 100% {
        transform: translate(0, 0) scale(1);
      }
      33% {
        transform: translate(25px, -30px) scale(1.1);
      }
      66% {
        transform: translate(-15px, 20px) scale(0.9);
      }
    }
    .animate-blob {
      animation: blob 8s ease-in-out infinite;
    }
    .animation-delay-2000 {
      animation-delay: 2s;
    }
  </style>
</section>













     <x-footer/>
</body>
</html>