<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Torvic.AI</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
     <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<style>
.clip-triangle {
  clip-path: polygon(0 30%, 100% 0%, 100% 100%, 0% 100%);
}
</style>

<style>
  .bg-grid-blue {
    background-image: linear-gradient(to right, rgba(255,255,255,0.1) 1px, transparent 1px),
                      linear-gradient(to bottom, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 80px 80px;
  }

</style>


<body class="bg-gray-100 antialiased">
<x-header />


  <!-- Main Wrapper -->
  <main class="w-full">

<section
  class="relative flex min-h-screen flex-col md:flex-row items-center justify-center px-10 py-28 overflow-hidden text-white select-none"
  style="background: linear-gradient(135deg, #1E88E5 50%, #0d2364 50%)"
>
  <!-- Floating geometric shapes -->
  <div
    aria-hidden="true"
    class="absolute top-12 left-12 w-72 h-72 border-4 border-white/20 rounded-lg animate-floatingShape1"
  ></div>
  <div
    aria-hidden="true"
    class="absolute bottom-16 right-16 w-96 h-96 border-8 border-white/10 rounded-full animate-floatingShape2"
  ></div>

  <!-- Left: White text with layered shadows -->
  <div class="md:w-1/2 max-w-xl px-8 z-20 text-center md:text-left">
    <h1
      class="relative text-white font-extrabold tracking-tight leading-[1.05] text-5xl sm:text-6xl md:text-7xl"
      style="
        text-shadow:
          1px 1px 2px rgba(0,0,0,0.3),
          2px 2px 5px rgba(0,0,0,0.2),
          5px 5px 10px rgba(0,0,0,0.15);
      "
    >
      Master <br />
      5th Grade Math <br />
      <span
        class="block mt-4 text-xl font-semibold tracking-wide text-white/80"
        style="text-shadow: none;"
      >
        with Fun, Personalized AI-powered Lessons
      </span>
    </h1>

    <p class="mt-8 max-w-md text-lg sm:text-xl leading-relaxed text-white/80">
      Torvic.AI turns math into an exciting adventure with interactive video lessons that follow the US curriculum while adding a fun twist.
    </p>

    <p class="mt-6 italic max-w-md text-white/60">
      Let your child master math with lessons they'll actually enjoy!
    </p>

    <button
      class="mt-12 rounded-full bg-white px-12 py-4 font-semibold text-[#1E88E5] shadow-lg transition-transform hover:scale-105 hover:shadow-2xl"
      type="button"
    >
      Get Started
    </button>
  </div>

  <!-- Right: Video inside asymmetrical clipped container with glowing border -->
  <div
    class="md:w-1/2 mt-16 md:mt-0 flex justify-center items-center z-20 px-8"
    style="background: transparent;"
  >
    <div
      class="relative max-w-[650px] w-full aspect-[16/9] rounded-[2rem] overflow-hidden"
      style="clip-path: polygon(15% 0%, 100% 0%, 85% 100%, 0% 100%)"
    >
      <video
        src="video.mp4"
        autoplay
        muted
        loop
        controls
        class="w-full h-full object-cover rounded-[2rem] drop-shadow-xl transition-transform duration-500 hover:scale-105 cursor-pointer"
      ></video>
      <!-- Glowing border -->
      <div
        class="pointer-events-none absolute inset-0 rounded-[2rem] border-4 border-white/70 opacity-60 blur-md animate-pulse"
        style="mix-blend-mode: screen"
      ></div>
    </div>
  </div>
</section>

<style>
  @keyframes floatingShape1 {
    0%, 100% { transform: translateY(0) translateX(0); }
    50% { transform: translateY(20px) translateX(15px); }
  }
  @keyframes floatingShape2 {
    0%, 100% { transform: translateY(0) translateX(0); }
    50% { transform: translateY(-15px) translateX(-20px); }
  }
  .animate-floatingShape1 {
    animation: floatingShape1 8s ease-in-out infinite;
  }
  .animate-floatingShape2 {
    animation: floatingShape2 10s ease-in-out infinite;
  }
</style>








<!---pinl section-->
<section
  class="relative flex min-h-screen flex-col md:flex-row items-center justify-center px-10 py-28 overflow-hidden select-none"
  style="background: linear-gradient(135deg, #b72c6f 50%, #f082b4 50%)"
>
  <!-- Floating pink blurred shapes -->
  <div
    aria-hidden="true"
    class="absolute top-12 left-12 w-72 h-72 bg-pink-700 rounded-lg opacity-30 blur-3xl animate-floatingShape1"
  ></div>
  <div
    aria-hidden="true"
    class="absolute bottom-16 right-16 w-96 h-96 bg-pink-400 rounded-full opacity-20 blur-2xl animate-floatingShape2"
  ></div>

  <!-- Left: Glassmorphic white card with white text -->
  <div
    class="md:w-1/2 max-w-lg bg-white/20 backdrop-blur-md rounded-3xl p-12 shadow-lg mx-auto md:mx-0 z-10 text-white"
  >
    <h2
      class="text-5xl sm:text-6xl font-extrabold leading-tight tracking-tight drop-shadow-md"
    >
      Ready to Help Your<br />
      Child Love Math?
    </h2>
    <p class="mt-8 text-lg sm:text-xl font-semibold leading-relaxed drop-shadow-sm">
      Join the thousands of parents and educators who trust Torvic.AI to make math fun, engaging, and effective. Sign up today and watch your child succeed in 5th-grade math.
    </p>
    <button
      class="mt-12 px-12 py-4 bg-gradient-to-r from-pink-600 to-pink-700 rounded-full font-bold shadow-lg transition-transform transform hover:scale-105 hover:brightness-110"
      type="button"
    >
      Start Free Trial
    </button>
  </div>

  <!-- Right: Full visible video with glowing neon pink border -->
  <div
    class="md:w-1/2 mt-16 md:mt-0 flex justify-center items-center z-10 px-8"
  >
    <div
      class="relative w-full max-w-[650px] rounded-3xl overflow-hidden shadow-2xl shadow-pink-600/80 hover:scale-[1.05] transition-transform duration-500 ease-in-out cursor-pointer"
    >
      <video
        autoplay
        muted
        loop
        controls
        class="w-full h-auto object-cover rounded-3xl"
        src="{{ asset('video2.mp4') }}"
      >
        Your browser does not support the video tag.
      </video>

      <!-- Neon Glow Border -->
      <div
        class="pointer-events-none absolute inset-0 rounded-3xl border-8 border-pink-500 opacity-70 blur-lg animate-pulse"
        style="mix-blend-mode: screen"
      ></div>
    </div>
  </div>
</section>

<style>
  /* Floating pink shape animations */
  @keyframes floatingShape1 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(20px, 20px); }
  }
  @keyframes floatingShape2 {
    0%, 100% { transform: translate(0, 0); }
    50% { transform: translate(-20px, -15px); }
  }
  .animate-floatingShape1 {
    animation: floatingShape1 7s ease-in-out infinite;
  }
  .animate-floatingShape2 {
    animation: floatingShape2 9s ease-in-out infinite;
  }
</style>















<!--whats is torvic section-->
<section class="relative py-28 select-none" style="background-color: #1e88e5;">
  <div class="max-w-7xl mx-auto px-6 md:px-12 relative h-[600px] md:h-[600px]">

    <!-- Desktop only: absolute cards including center text block -->
    <div class="md:block hidden">
      <!-- Top Center Card -->
      <div
        class="absolute top-[-20px] left-1/2 -translate-x-1/2 max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer z-30"
      >
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Real Teachers & Creatives</h3>
        <p class="text-gray-700 text-sm">
          Every lesson is crafted by experts to ensure it's both accurate and entertaining.
        </p>
      </div>

      <!-- Center Text Block -->
<div
  class="absolute top-[40%] left-1/2 transform -translate-x-1/2 max-w-md text-center z-20 bg-white rounded-3xl p-8 shadow-lg"
  style="min-height: 420px; overflow-y: visible;"
>
  <h2 class="text-5xl font-extrabold text-[#ff467c] leading-tight">
    What is <span class="text-pink-300">Torvic.AI</span>?
  </h2>
  <p class="mt-4 text-gray-800 text-base leading-relaxed">
    A revolutionary learning platform designed specifically for 5th-grade math students,
    making math engaging and effective.
  </p>
  <p class="mt-2 text-gray-700 text-sm leading-relaxed">
    Validated by real teachers, creatives, and AI – your child will experience math like never before.
  </p>
  <button
    class="mt-6 px-10 py-2 rounded-full bg-gradient-to-r from-pink-400 to-pink-600 text-white font-semibold shadow-lg hover:brightness-110 transition"
  >
    Start Free Trial
  </button>
</div>

      <!-- Left Card -->
      <div
        class="absolute top-1/3 left-0 max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer z-10"
      >
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">AI Integration</h3>
        <p class="text-gray-700 text-sm">
          AI-powered visuals and interactive elements keep your child focused and interested.
        </p>
      </div>

      <!-- Right Card -->
      <div
        class="absolute top-1/3 right-0 max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer z-10"
      >
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Curriculum-Based Learning</h3>
        <p class="text-gray-700 text-sm">
          Our lessons follow the US 5th-grade math curriculum but with a fresh, engaging approach.
        </p>
      </div>
    </div>

    <!-- Mobile only: stacked cards -->
    <div class="md:hidden flex flex-col items-center space-y-6">
      <!-- Teacher card -->
      <div
        class="max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer"
      >
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
          <!-- Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Real Teachers & Creatives</h3>
        <p class="text-gray-700 text-sm">
          Every lesson is crafted by experts to ensure it's both accurate and entertaining.
        </p>
      </div>

     <!-- Center Text Block -->
<div
  class="absolute top-[40%] left-1/2 transform -translate-x-1/2 max-w-md text-center z-20 bg-white rounded-3xl p-8 shadow-lg"
  style="min-height: 380px;"
>
  <h2 class="text-5xl font-extrabold text-[#ff467c] leading-tight">
    What is <span class="text-pink-300">Torvic.AI</span>?
  </h2>
  <p class="mt-4 text-gray-800 text-base leading-relaxed">
    A revolutionary learning platform designed specifically for 5th-grade math students,
    making math engaging and effective.
  </p>
  <p class="mt-2 text-gray-700 text-sm leading-relaxed">
    Validated by real teachers, creatives, and AI – your child will experience math like never before.
  </p>
  <button
    class="mt-6 px-10 py-2 rounded-full bg-gradient-to-r from-pink-400 to-pink-600 text-white font-semibold shadow-lg hover:brightness-110 transition"
  >
    Start Free Trial
  </button>
</div>

      <!-- AI Integration card -->
      <div
        class="max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer"
      >
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">AI Integration</h3>
        <p class="text-gray-700 text-sm">
          AI-powered visuals and interactive elements keep your child focused and interested.
        </p>
      </div>

      <!-- Curriculum-Based Learning card -->
      <div
        class="max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer"
      >
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
          </svg>
        </div>
        <h3 class="text-xl font-semibold mb-2">Curriculum-Based Learning</h3>
        <p class="text-gray-700 text-sm">
          Our lessons follow the US 5th-grade math curriculum but with a fresh, engaging approach.
        </p>
      </div>
    </div>

  </div>
</section>












<!-- Modern Win-Win Section -->
<section class="win-win-section bg-[#f1f8ff] py-20 relative overflow-hidden">
  <!-- Decorative elements -->
  <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
    <div class="absolute top-10 left-10 w-32 h-32 rounded-full bg-blue-100 opacity-20 mix-blend-multiply blur-xl"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 rounded-full bg-pink-100 opacity-20 mix-blend-multiply blur-xl"></div>
    <div class="absolute top-1/3 right-1/4 w-24 h-24 rounded-full bg-yellow-100 opacity-20 mix-blend-multiply blur-xl"></div>
  </div>
  
  <div class="max-w-7xl mx-auto px-6 text-center relative z-10">
    <!-- Animated Heading -->
    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-14 relative inline-block">
      <span class="heading-underline">A Win-Win for Parents, Teachers, and Students Alike</span>
    </h2>

    <!-- Enhanced Card Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 text-left">
      
      <!-- Card 1 - Parents -->
      <div class="win-card group">
        <div class="overflow-hidden rounded-2xl mb-6 relative win-card-image-container">
          <div class="bg-pink-500 p-1">
            <img src="{{ asset('1.avif') }}" alt="Parent and child" class="w-full h-full object-cover transition-transform duration-700" />
          </div>
          <div class="win-card-overlay"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
          <span class="inline-block w-6 h-6 rounded-full bg-pink-500 mr-3"></span>
          For Parents
        </h3>
        <p class="text-gray-700 leading-relaxed">
          Looking for a way to boost your child's math skills while keeping it fun? Torvic.AI is the perfect solution to make learning math enjoyable and effective.
        </p>
        <div class="mt-4">
          <button class="win-card-button bg-pink-50 text-pink-600 hover:bg-pink-100">
            Learn more
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 win-card-arrow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Card 2 - Educators -->
      <div class="win-card group">
        <div class="overflow-hidden rounded-2xl mb-6 relative win-card-image-container">
          <div class="bg-blue-500 p-1">
            <img src="{{ asset('2.avif') }}" alt="Parent and child" class="w-full h-full object-cover transition-transform duration-700" />
          </div>
          <div class="win-card-overlay"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
          <span class="inline-block w-6 h-6 rounded-full bg-blue-500 mr-3"></span>
          For Educators
        </h3>
        <p class="text-gray-700 leading-relaxed">
          Torvic.AI supplements your classroom with engaging, curriculum-based lessons that provide the personalized support students need to excel.
        </p>
        <div class="mt-4">
          <button class="win-card-button bg-blue-50 text-blue-600 hover:bg-blue-100">
            Learn more
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 win-card-arrow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Card 3 - Students -->
      <div class="win-card group">
        <div class="overflow-hidden rounded-2xl mb-6 relative win-card-image-container">
          <div class="bg-yellow-400 p-1">
            <img src="{{ asset('3.avif') }}" alt="Parent and child" class="w-full h-full object-cover transition-transform duration-700" />
          </div>
          <div class="win-card-overlay"></div>
        </div>
        <h3 class="text-2xl font-bold text-gray-900 mb-3 flex items-center">
          <span class="inline-block w-6 h-6 rounded-full bg-yellow-400 mr-3"></span>
          For Students
        </h3>
        <p class="text-gray-700 leading-relaxed">
          Whether they need extra help or crave a challenge, students thrive in our interactive, gamified environment, learning at their own pace and having fun along the way.
        </p>
        <div class="mt-4">
          <button class="win-card-button bg-yellow-50 text-yellow-600 hover:bg-yellow-100">
            Learn more
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 win-card-arrow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Modern 3 Steps Section -->
<section class="steps-section bg-white py-24 relative overflow-hidden">
  <!-- Decorative elements -->
  <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
    <div class="absolute top-1/4 left-10 w-48 h-48 rounded-full bg-pink-100 opacity-20 mix-blend-multiply blur-3xl"></div>
    <div class="absolute bottom-1/3 right-20 w-64 h-64 rounded-full bg-blue-100 opacity-15 mix-blend-multiply blur-3xl"></div>
  </div>
  
  <div class="max-w-7xl mx-auto px-6 relative z-10">
    <!-- Animated Main Heading -->
    <div class="text-center mb-20">
      <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
        <span class="heading-gradient">Transform Your Child into a Math Pro</span>
        <span class="block text-3xl md:text-4xl font-semibold text-gray-600 mt-4">in Just 3 Simple Steps</span>
      </h2>
      <div class="flex justify-center mt-8">
        <div class="w-24 h-1 bg-gradient-to-r from-pink-500 to-blue-500 rounded-full"></div>
      </div>
    </div>

    <!-- Steps Container -->
    <div class="space-y-28 md:space-y-32">
      <!-- STEP 1 -->
      <div class="step-card grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Image with decorative border -->
        <div class="relative step-image-container">
          <div class="absolute -inset-4 bg-gradient-to-br from-pink-400 to-blue-400 rounded-2xl opacity-20 blur-xl"></div>
          <div class="relative overflow-hidden rounded-xl shadow-2xl h-full">
            <img src="{{ asset('Unit 9.avif') }}" alt="Parent and child" class="w-full h-full object-cover transition-all duration-700" />
            <div class="step-number absolute -left-4 -top-4 w-16 h-16 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg">1</div>
          </div>
        </div>
        <!-- Text Content -->
        <div class="step-content">
          <h4 class="text-pink-500 font-bold text-lg uppercase mb-3 tracking-wider">Step 1</h4>
          <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-snug">
            Explore and Preview the Program
          </h3>
          <p class="text-gray-600 text-lg leading-relaxed mb-6">
            Check out our fun, interactive math lessons and see how much easier and more enjoyable learning math can be.
          </p>
          <button class="step-button group">
            Learn more about Step 1
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- STEP 2 -->
      <div class="step-card grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Image with decorative border -->
        <div class="relative step-image-container md:order-2">
          <div class="absolute -inset-4 bg-gradient-to-br from-blue-400 to-yellow-400 rounded-2xl opacity-20 blur-xl"></div>
          <div class="relative overflow-hidden rounded-xl shadow-2xl h-full">
            <img src="{{ asset('Unit 7.avif') }}" alt="Parent and child" class="w-full h-full object-cover transition-all duration-700" />
            <div class="step-number absolute -left-4 -top-4 w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg">2</div>
          </div>
        </div>
        <!-- Text Content -->
        <div class="step-content md:order-1">
          <h4 class="text-blue-500 font-bold text-lg uppercase mb-3 tracking-wider">Step 2</h4>
          <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-snug">
            Start your Free Trial
          </h3>
          <p class="text-gray-600 text-lg leading-relaxed mb-6">
            Ready to dive in? Start your Free Trial to access all the lessons and interactive features your child will love.
          </p>
          <button class="step-button group">
            Begin your free trial
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>

      <!-- STEP 3 -->
      <div class="step-card grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <!-- Image with decorative border -->
        <div class="relative step-image-container">
          <div class="absolute -inset-4 bg-gradient-to-br from-yellow-400 to-pink-400 rounded-2xl opacity-20 blur-xl"></div>
          <div class="relative overflow-hidden rounded-xl shadow-2xl h-full">
            <img src="{{ asset('Unit 8.avif') }}" alt="Parent and child" class="w-full h-full object-cover transition-all duration-700" />
            <div class="step-number absolute -left-4 -top-4 w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg">3</div>
          </div>
        </div>
        <!-- Text Content -->
        <div class="step-content">
          <h4 class="text-yellow-500 font-bold text-lg uppercase mb-3 tracking-wider">Step 3</h4>
          <h3 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6 leading-snug">
            Watch Your Child Grow
          </h3>
          <p class="text-gray-600 text-lg leading-relaxed mb-6">
            Track their progress through real-time quizzes and assessments as their math skills and confidence soar.
          </p>
          <button class="step-button group">
            See success stories
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300 group-hover:translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-[#f1f8ff] py-24">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-12 items-center">
    
    <!-- Left: Image with overlayed text -->
    <div class="relative rounded-3xl overflow-hidden max-w-3xl mx-auto shadow-lg group">
      <img src="{{ asset('FFBF42.avif') }}" alt="Parent and child" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out" />
      
      <!-- Blue overlay with triangle clip -->
      <div class="absolute bottom-0 left-0 w-full h-1/2 bg-gradient-to-tr from-blue-600 to-blue-500 clip-triangle z-10 opacity-95"></div>
      
      <!-- Text content -->
      <div class="absolute bottom-0 left-0 p-8 z-20 text-white max-w-md space-y-4 drop-shadow-lg">
        <h2 class="text-3xl md:text-4xl font-extrabold leading-tight tracking-wide">
          Don’t Let Your Child <br /> Struggle with Math!
        </h2>
        <p class="text-base md:text-lg leading-relaxed opacity-90">
          In a busy classroom, it’s easy for children to fall behind. With Torvic.AI, your child gets engaging lessons tailored to their needs, helping them build confidence and excel in math.
        </p>
        <button class="bg-pink-500 hover:bg-pink-600 shadow-lg shadow-pink-400/50 text-white font-semibold py-3 px-7 rounded-full text-base transition duration-300 ease-in-out transform hover:scale-105">
          Start Free Trial
        </button>
      </div>
    </div>

    <!-- Right: 2x2 grid features -->
    <div class="w-full max-w-4xl h-full grid grid-cols-1 sm:grid-cols-2 gap-6">
      
      <!-- Feature 1 -->
      <div class="bg-gradient-to-br from-blue-600 to-blue-500 text-white flex flex-col p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out group cursor-pointer">
        <div class="mb-4">
          <svg class="w-10 h-10 text-yellow-400 animate-bounce" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2L12 8H18L13 12L15 18L10 14L5 18L7 12L2 8H8L10 2Z"/></svg>
        </div>
        <h3 class="font-semibold text-xl mb-2 group-hover:underline">Engaging Video Lessons</h3>
        <p class="text-sm opacity-90">Fun, interactive lessons that keep your child interested and motivated.</p>
      </div>

      <!-- Feature 2 -->
      <div class="bg-gradient-to-br from-blue-600 to-blue-500 text-white flex flex-col p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out group cursor-pointer">
        <div class="mb-4">
          <svg class="w-10 h-10 text-yellow-400 animate-pulse" fill="currentColor" viewBox="0 0 24 24"><rect x="6" y="3" width="2" height="18" rx="1" ry="1"/><rect x="10" y="7" width="2" height="10" rx="1" ry="1"/></svg>
        </div>
        <h3 class="font-semibold text-xl mb-2 group-hover:underline">Flexible Learning</h3>
        <p class="text-sm opacity-90">Learn anytime, anywhere—whether at home or on the go.</p>
      </div>

      <!-- Feature 3 -->
      <div class="bg-gradient-to-br from-blue-600 to-blue-500 text-white flex flex-col p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out group cursor-pointer">
        <div class="mb-4">
          <svg class="w-10 h-10 text-yellow-400 animate-spin-slow" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10" stroke-opacity="0.25"/><path d="M4 12a8 8 0 018-8"/></svg>
        </div>
        <h3 class="font-semibold text-xl mb-2 group-hover:underline">Real-Time Progress Tracking</h3>
        <p class="text-sm opacity-90">Stay in the loop with detailed performance reports and celebrate each success.</p>
      </div>

      <!-- Feature 4 -->
      <div class="bg-gradient-to-br from-blue-600 to-blue-500 text-white flex flex-col p-8 rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300 ease-in-out group cursor-pointer">
        <div class="mb-4">
          <svg class="w-10 h-10 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927C9.32 2.096 10.68 2.096 10.951 2.927l1.11 3.374a1 1 0 00.95.69h3.552c.969 0 1.371 1.24.588 1.81l-2.874 2.085a1 1 0 00-.364 1.118l1.11 3.373c.271.83-.69 1.515-1.403 1.04l-2.873-2.086a1 1 0 00-1.176 0l-2.874 2.086c-.713.474-1.674-.21-1.403-1.04l1.11-3.373a1 1 0 00-.364-1.118L2.348 8.8c-.783-.57-.38-1.81.588-1.81h3.552a1 1 0 00.95-.69l1.11-3.374z"/></svg>
        </div>
        <h3 class="font-semibold text-xl mb-2 group-hover:underline">Quizzes and Assessments</h3>
        <p class="text-sm opacity-90">Measure your child’s improvement and reinforce learning with fun, interactive quizzes.</p>
      </div>
    </div>
  </div>
</section>





<!-- Signup Announcement Section -->
<section class="relative min-h-screen bg-gradient-to-tr from-pink-500 via-pink-600 to-pink-700 flex items-center justify-center overflow-hidden p-8">

  <!-- Background diagonal dynamic shapes -->
  <div class="absolute top-0 left-0 w-full h-full pointer-events-none overflow-hidden">
    <div class="absolute -top-96 -left-96 w-[700px] h-[700px] bg-pink-400 rounded-[40%] opacity-40 blur-[180px] rotate-45 animate-blob animation-delay-0"></div>
    <div class="absolute -bottom-96 -right-96 w-[600px] h-[600px] bg-pink-600 rounded-[30%] opacity-30 blur-[120px] rotate-12 animate-blob animation-delay-4000"></div>
  </div>

  <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-12 max-w-7xl w-full">
<!-- Left card with pink gradient background, white text -->
<div class="relative perspective-1500 group cursor-default">
  <div
    class="transform-style preserve-3d transition-transform duration-700 group-hover:rotate-y-12 group-hover:rotate-x-6 rounded-3xl bg-gradient-to-br from-pink-600 via-pink-700 to-pink-800 p-12 shadow-2xl shadow-pink-900/70">
    <h1
      class="text-5xl font-extrabold text-white mb-6 leading-snug drop-shadow-lg">
      Unlock the Power of <br /><span class="text-pink-300">AI-Powered Learning</span>
    </h1>
    <p class="text-pink-200 text-lg mb-8 drop-shadow-md">
      Get early access to Torvic.AI and help your child master math with personalized AI lessons, fun quizzes, and real-time progress tracking.
    </p>
    <ul class="space-y-5 text-pink-300 font-semibold text-lg">
      <li class="flex items-center gap-3">
        <svg class="w-7 h-7 text-pink-300 animate-pulse" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <path d="M5 13l4 4L19 7" />
        </svg>
        Engaging interactive lessons
      </li>
      <li class="flex items-center gap-3">
        <svg class="w-7 h-7 text-pink-300 animate-pulse animation-delay-500" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" />
          <path d="M12 6v6l4 2" />
        </svg>
        Real-time progress updates
      </li>
      <li class="flex items-center gap-3">
        <svg class="w-7 h-7 text-pink-300 animate-pulse animation-delay-1000" fill="none" stroke="currentColor"
          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
          <path d="M16 21v-2a4 4 0 00-8 0v2" />
          <circle cx="12" cy="7" r="4" />
        </svg>
        Fun quizzes & rewards
      </li>
    </ul>
  </div>
  <!-- subtle 3D shadow effect -->
  <div
    class="absolute top-4 left-4 right-4 bottom-4 rounded-3xl bg-pink-800 opacity-40 blur-2xl pointer-events-none"></div>
</div>

    <!-- Glassmorphic signup form right -->
    <form action="#" method="POST"
      class="relative bg-white/10 backdrop-blur-lg rounded-3xl p-12 max-w-md mx-auto shadow-lg border border-white/20 space-y-10">
      <h2 class="text-4xl font-bold text-white text-center mb-6 drop-shadow-md">Sign Up for Early Access</h2>

      <!-- Input group -->
      <div class="space-y-8">
        <div class="relative">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6 text-pink-400 absolute left-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-3-3.87M4 21v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          <input id="firstName" name="firstName" type="text" placeholder="First Name" required
            class="peer w-full bg-transparent border-b-2 border-pink-400 py-4 pl-14 pr-4 text-white placeholder-transparent focus:outline-none focus:border-pink-300 transition" />
          <label for="firstName"
            class="absolute left-14 top-4 text-pink-300 text-lg transition-all peer-placeholder-shown:top-12 peer-placeholder-shown:text-base peer-placeholder-shown:text-pink-500 peer-focus:top-4 peer-focus:text-pink-300 cursor-text">First
            Name</label>
        </div>

        <div class="relative">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6 text-pink-400 absolute left-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-3-3.87M4 21v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
          </svg>
          <input id="lastName" name="lastName" type="text" placeholder="Last Name" required
            class="peer w-full bg-transparent border-b-2 border-pink-400 py-4 pl-14 pr-4 text-white placeholder-transparent focus:outline-none focus:border-pink-300 transition" />
          <label for="lastName"
            class="absolute left-14 top-4 text-pink-300 text-lg transition-all peer-placeholder-shown:top-12 peer-placeholder-shown:text-base peer-placeholder-shown:text-pink-500 peer-focus:top-4 peer-focus:text-pink-300 cursor-text">Last
            Name</label>
        </div>

        <div class="relative">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6 text-pink-400 absolute left-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M4 4h16v16H4z" />
            <polyline points="22,6 12,13 2,6" />
          </svg>
          <input id="email" name="email" type="email" placeholder="Email Address" required
            class="peer w-full bg-transparent border-b-2 border-pink-400 py-4 pl-14 pr-4 text-white placeholder-transparent focus:outline-none focus:border-pink-300 transition" />
          <label for="email"
            class="absolute left-14 top-4 text-pink-300 text-lg transition-all peer-placeholder-shown:top-12 peer-placeholder-shown:text-base peer-placeholder-shown:text-pink-500 peer-focus:top-4 peer-focus:text-pink-300 cursor-text">Email
            Address</label>
        </div>

        <label
          class="flex items-center gap-3 cursor-pointer select-none text-pink-300 font-medium text-sm md:text-base">
          <input type="checkbox" required
            class="w-6 h-6 rounded border-pink-400 focus:ring-pink-500 focus:ring-2 bg-transparent" />
          I agree to receive updates and promotional emails.
        </label>
      </div>

      <button type="submit"
        class="w-full mt-4 py-4 bg-gradient-to-r from-pink-500 via-pink-600 to-pink-700 rounded-3xl font-extrabold text-white text-xl shadow-xl hover:scale-[1.05] transition-transform flex justify-center items-center gap-3 drop-shadow-lg">
        Get Access
        <svg class="w-6 h-6 animate-pulse" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" stroke-opacity="0.3"></circle>
          <path d="M12 6v6l4 2"></path>
        </svg>
      </button>
    </form>
  </div>
</section>









  <!-- Modern Testimonial Section -->
<section class="bg-[#f1f8ff] py-20">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-12">

    <!-- Testimonial Slider (Left) -->
    <div class="flex-1 max-w-4xl overflow-hidden" id="testimonialSliderWrapper">
      <div id="testimonialSlider" class="flex transition-transform duration-700 ease-in-out">

        <!-- Slide 1 -->
        <div class="w-full flex-shrink-0 px-6" style="width: 100%;">
          <div class="bg-white rounded-3xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6">
            <div class="flex-shrink-0 relative">
              <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-purple-400 via-pink-300 to-yellow-300 ring-4 ring-white shadow-md"></div>
            </div>
            <div>
              <p class="font-semibold text-gray-900 text-lg md:text-xl">Mark T.</p>
              <p class="text-xs text-purple-600 uppercase tracking-widest mb-4">Teacher</p>
              <p class="text-gray-800 text-xl leading-relaxed">
                My students are more engaged and motivated with <span class="font-bold text-purple-600">Torvic.AI</span>.<br />
                It’s made teaching math so much easier.
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="w-full flex-shrink-0 px-6" style="width: 100%;">
          <div class="bg-white rounded-3xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6">
            <div class="flex-shrink-0 relative">
              <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-pink-400 via-purple-300 to-indigo-300 ring-4 ring-white shadow-md"></div>
            </div>
            <div>
              <p class="font-semibold text-gray-900 text-lg md:text-xl">Sarah M.</p>
              <p class="text-xs text-pink-600 uppercase tracking-widest mb-4">Parent</p>
              <p class="text-gray-800 text-xl leading-relaxed">
                <span class="font-bold text-pink-600">Torvic.AI</span> turned math time into something my daughter looks forward to. Her confidence has skyrocketed!
              </p>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="w-full flex-shrink-0 px-6" style="width: 100%;">
          <div class="bg-white rounded-3xl shadow-lg p-8 flex flex-col md:flex-row items-start gap-6">
            <div class="flex-shrink-0 relative">
              <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-blue-400 via-teal-300 to-green-300 ring-4 ring-white shadow-md"></div>
            </div>
            <div>
              <p class="font-semibold text-gray-900 text-lg md:text-xl">James L.</p>
              <p class="text-xs text-blue-600 uppercase tracking-widest mb-4">Student</p>
              <p class="text-gray-800 text-xl leading-relaxed">
                It’s actually fun to learn with <span class="font-bold text-blue-600">Torvic.AI</span>. The quizzes, animations, and videos make math feel like a game!
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Arrows (Right, Vertically Centered) -->
    <div class="flex gap-6 text-3xl pt-6 md:pt-12">
      <button onclick="prevTestimonial()" aria-label="Previous testimonial" class="p-3 rounded-full bg-white shadow-md hover:bg-gray-100 transition">
        &larr;
      </button>
      <button onclick="nextTestimonial()" aria-label="Next testimonial" class="p-3 rounded-full bg-white shadow-md hover:bg-gray-100 transition">
        &rarr;
      </button>
    </div>

  </div>
</section>


  </div>
</section>














 <x-footer/>


  </main>
  <script>
    let currentIndex = 0;
    const totalSlides = 3;
    const slider = document.getElementById('testimonialSlider');

    function updateSlider() {
      const translateXPercent = -currentIndex * 100;
      slider.style.transform = `translateX(${translateXPercent}%)`;
    }

    function nextTestimonial() {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlider();
    }

    function prevTestimonial() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateSlider();
    }
  </script>

<script>
  // FloatingInput helper function to inject inputs (if you want to generate dynamically)
  function FloatingInput({ id, type, label, icon, required }) {
    const icons = {
      user: `<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-pink-400 absolute left-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-3-3.87M4 21v-2a4 4 0 013-3.87M16 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>`,
      mail: `<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-pink-400 absolute left-4 top-1/2 transform -translate-y-1/2 pointer-events-none" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M4 4h16v16H4z"/><polyline points="22,6 12,13 2,6"/></svg>`
    };
    return `
      <div class="relative">
        ${icons[icon] || ''}
        <input
          id="${id}"
          name="${id}"
          type="${type}"
          placeholder="${label}"
          ${required ? 'required' : ''}
          class="peer w-full bg-transparent border-b-2 border-pink-400 py-4 pl-14 pr-4 text-white placeholder-transparent focus:outline-none focus:border-pink-300 transition"
        />
        <label
          for="${id}"
          class="absolute left-14 top-4 text-pink-300 text-lg transition-all peer-placeholder-shown:top-12 peer-placeholder-shown:text-base peer-placeholder-shown:text-pink-500 peer-focus:top-4 peer-focus:text-pink-300 cursor-text"
        >
          ${label}
        </label>
      </div>
    `;
  }

  // Example injecting inputs dynamically (if you want):
  const form = document.querySelector('form');
  if (form) {
    form.querySelector('div.space-y-8').innerHTML = [
      FloatingInput({ id: 'firstName', type: 'text', label: 'First Name', icon: 'user', required: true }),
      FloatingInput({ id: 'lastName', type: 'text', label: 'Last Name', icon: 'user', required: true }),
      FloatingInput({ id: 'email', type: 'email', label: 'Email Address', icon: 'mail', required: true }),
    ].join('');
  }
</script>
</body>

</html>




