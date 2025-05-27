<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Torvic.AI</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <!-- Geist font from Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Geist&display=swap" rel="stylesheet" />
<!-- Include Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

     <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
     <!-- Add Geist Font -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@geist-ui/react@latest/dist/geist-ui.css" />
<style>
  * {
    font-family: 'Geist', 'Inter', sans-serif;
  }
</style>

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
  <div class="max-w-7xl mx-auto px-6 md:px-12 relative h-auto md:h-[600px]">

    <!-- Desktop only: absolute cards including center text block -->
    <div class="md:block hidden">
      <!-- Top Center Card -->
      <div class="absolute top-[-20px] left-1/2 -translate-x-1/2 max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer z-30">
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
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
      <div class="absolute top-[40%] left-1/2 transform -translate-x-1/2 max-w-md text-center z-20 bg-white rounded-3xl p-8 shadow-lg" style="min-height: 420px;">
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
        <button class="mt-6 px-10 py-2 rounded-full bg-gradient-to-r from-pink-400 to-pink-600 text-white font-semibold shadow-lg hover:brightness-110 transition">
          Start Free Trial
        </button>
      </div>

      <!-- Left Card -->
      <div class="absolute top-1/3 left-0 max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer z-10">
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
      <div class="absolute top-1/3 right-0 max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer z-10">
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
      <div class="max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer">
        <div class="text-pink-500 p-3 rounded-lg bg-pink-100 w-max mb-4">
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

      <!-- Center Text Block - Mobile -->
      <div class="w-full max-w-xs bg-white rounded-3xl p-6 shadow-xl text-center text-gray-900">
        <h2 class="text-3xl font-extrabold text-[#ff467c] leading-tight">
          What is <span class="text-pink-300">Torvic.AI</span>?
        </h2>
        <p class="mt-4 text-gray-800 text-base leading-relaxed">
          A revolutionary learning platform designed specifically for 5th-grade math students,
          making math engaging and effective.
        </p>
        <p class="mt-2 text-gray-700 text-sm leading-relaxed">
          Validated by real teachers, creatives, and AI – your child will experience math like never before.
        </p>
        <button class="mt-6 px-8 py-2 rounded-full bg-gradient-to-r from-pink-400 to-pink-600 text-white font-semibold shadow-lg hover:brightness-110 transition">
          Start Free Trial
        </button>
      </div>

      <!-- AI Integration card -->
      <div class="max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer">
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
      <div class="max-w-xs w-full bg-white rounded-2xl shadow-xl p-6 text-gray-900 cursor-pointer">
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











<!-- Advanced Modern Win-Win Section -->
<section class="relative bg-[#f2f7ff] py-28 px-6 md:px-20 overflow-hidden">
  <!-- Section Heading -->
  <div class="text-center mb-20">
    <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-6 text-gray-900">
      <span class="text-[#1f88e4]">Empowering Everyone in the Learning Journey</span>
    </h2>
    <p class="text-lg text-gray-600">
      From home to school to self-paced learning — each experience is crafted to engage and inspire.
    </p>
  </div>

  <!-- Tilted Card Stack -->
  <div class="relative flex flex-col md:flex-row justify-center items-center md:items-start gap-10">
    <!-- Parent Card -->
    <div class="relative z-30 transform md:rotate-[-3deg] md:-translate-y-4 hover:rotate-0 hover:scale-[1.02] transition duration-500 ease-in-out bg-white rounded-3xl shadow-xl w-full max-w-sm p-6 border-pink-200 border">
      <div class="rounded-xl overflow-hidden mb-4 h-48">
        <img src="{{ asset('1.avif') }}" class="object-cover w-full h-full" alt="Parents">
      </div>
      <div class="flex items-center text-pink-500 font-semibold mb-2">
        <span class="w-2.5 h-2.5 mr-2 bg-pink-500 rounded-full"></span>For Parents
      </div>
      <p class="text-sm text-gray-600">
        Stay involved in your child’s progress through real-time insights and at-home tools that work.
      </p>
    </div>

    <!-- Educator Card -->
    <div class="relative z-40 transform md:rotate-[2deg] hover:rotate-0 hover:scale-[1.02] transition duration-500 ease-in-out bg-white rounded-3xl shadow-2xl w-full max-w-sm p-6 border-blue-200 border">
      <div class="rounded-xl overflow-hidden mb-4 h-48">
        <img src="{{ asset('2.avif') }}" class="object-cover w-full h-full" alt="Educators">
      </div>
      <div class="flex items-center text-blue-600 font-semibold mb-2">
        <span class="w-2.5 h-2.5 mr-2 bg-blue-600 rounded-full"></span>For Educators
      </div>
      <p class="text-sm text-gray-600">
        Deliver personalized instruction at scale with AI-generated support insights.
      </p>
    </div>

    <!-- Student Card -->
    <div class="relative z-20 transform md:rotate-[5deg] md:translate-y-4 hover:rotate-0 hover:scale-[1.02] transition duration-500 ease-in-out bg-white rounded-3xl shadow-xl w-full max-w-sm p-6 border-yellow-300 border">
      <div class="rounded-xl overflow-hidden mb-4 h-48">
        <img src="{{ asset('3.avif') }}" class="object-cover w-full h-full" alt="Students">
      </div>
      <div class="flex items-center text-yellow-500 font-semibold mb-2">
        <span class="w-2.5 h-2.5 mr-2 bg-yellow-400 rounded-full"></span>For Students
      </div>
      <p class="text-sm text-gray-600">
        A challenge-based experience that rewards growth and builds long-term confidence.
      </p>
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
      <h2 class="text-4xl md:text-6xl font-bold text-[#1f88e4]">
        <span class="text-[#1f88e4]">Transform Your Child into a Math Pro</span>
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


<section class="bg-[#f1f8ff] py-[160px] relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 text-center mb-20">
    <h2 class="text-4xl sm:text-5xl font-extrabold text-[#1f88e4]">
      Empower Your Child with Personalized Math Learning
    </h2>
    <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
      With Torvic.AI, children receive fun, interactive, and effective lessons tailored to help them thrive in mathematics.
    </p>
  </div>

  <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 gap-20 items-center relative z-10">
<!-- Left: Blue Main Card shifted upward -->
<div class="bg-[#1f88e4] text-white rounded-3xl shadow-2xl w-full max-w-lg mx-auto overflow-hidden -mt-8">
  <!-- Smaller Image -->
  <div class="relative w-full aspect-[3/2]">
    <img src="{{ asset('FFBF42.avif') }}" alt="Struggling child"
         class="absolute inset-0 w-full h-full object-cover" />
  </div>

  <!-- Card Content with tighter spacing -->
  <div class="p-6 space-y-4">
    <h2 class="text-2xl sm:text-3xl font-extrabold leading-snug">
      Don’t Let Your Child Struggle with Math!
    </h2>
    <p class="text-sm text-blue-100 leading-relaxed">
      Torvic.AI helps your child master math with personalized lessons, quizzes, and real-time progress reports.
    </p>
    <button class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-5 rounded-full shadow-md shadow-pink-300/40 text-sm">
      Start Free Trial
    </button>

    <!-- Icons -->
    <div class="flex space-x-5 pt-3">
      <div class="flex items-center space-x-2">
        <div class="bg-white text-yellow-400 p-1.5 rounded-full shadow">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2L12 8H18L13 12L15 18L10 14L5 18L7 12L2 8H8L10 2Z"/>
          </svg>
        </div>
        <span class="text-xs text-white">Video Lessons</span>
      </div>
      <div class="flex items-center space-x-2">
        <div class="bg-white text-green-500 p-1.5 rounded-full shadow">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" stroke-opacity="0.25"/>
            <path d="M4 12a8 8 0 018-8"/>
          </svg>
        </div>
        <span class="text-xs text-white">Progress Tracking</span>
      </div>
    </div>
  </div>
</div>

<!-- Right: Floating Feature Cards Group shifted down -->
<div class="relative h-[780px] flex items-center justify-center mt-[100px]">
  <!-- Card 1: Engaging Lessons -->
  <div class="absolute top-0 left-0 w-64 min-h-[160px] p-6 bg-white rounded-2xl shadow-xl transform rotate-[-6deg] hover:rotate-0 transition-all">
    <h3 class="font-semibold text-lg mb-2">📺 Engaging Lessons</h3>
    <p class="text-sm text-gray-600">Interactive videos your child will love.</p>
  </div>

  <!-- Card 2: Real-Time Reports -->
  <div class="absolute top-16 right-0 w-64 min-h-[160px] p-6 bg-white rounded-2xl shadow-xl transform rotate-[4deg] hover:rotate-0 transition-all">
    <h3 class="font-semibold text-lg mb-2">📊 Real-Time Reports</h3>
    <p class="text-sm text-gray-600">Track success with visual stats.</p>
  </div>

  <!-- Card 3: Quizzes & Assessments -->
  <div class="absolute top-56 left-0 w-64 min-h-[160px] p-6 bg-white rounded-2xl shadow-xl transform rotate-[-3deg] hover:rotate-0 transition-all">
    <h3 class="font-semibold text-lg mb-2">🎯 Quizzes & Assessments</h3>
    <p class="text-sm text-gray-600">Reinforce learning with interactive quizzes.</p>
  </div>

  <!-- Card 4: Learn Anywhere -->
  <div class="absolute top-[288px] right-0 w-64 min-h-[160px] p-6 bg-white rounded-2xl shadow-xl transform rotate-[5deg] hover:rotate-0 transition-all">
    <h3 class="font-semibold text-lg mb-2">📱 Learn Anywhere</h3>
    <p class="text-sm text-gray-600">Access learning from any device, anytime.</p>
  </div>
</div>



  </div>
</section>




<section class="relative py-28 bg-white overflow-hidden select-none">
  <!-- Floating blobs -->
  <div class="absolute -top-32 -left-40 w-96 h-96 bg-blue-100 rounded-full blur-[100px] z-0"></div>
  <div class="absolute top-96 -right-32 w-72 h-72 bg-pink-100 rounded-full blur-[80px] z-0"></div>

  <!-- Section Heading -->
  <div class="text-center mb-20 relative z-10">
    <h2 class="text-5xl font-extrabold leading-tight  text-[#1f88e4]">
      Get in Touch
    </h2>
    <p class="text-gray-600 mt-4 text-lg">We’d love to help you unlock your child’s full potential.</p>
  </div>

  <!-- Cards -->
  <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 relative z-10 items-center px-6 md:px-12">

    <!-- Info Card -->
    <div class="bg-[#1f88e4] text-white p-12 rounded-[40px] shadow-2xl relative hover:scale-105 transition-transform">
      <div class="absolute top-0 right-0 opacity-10">
        <svg viewBox="0 0 200 200" width="200" height="200" class="text-white">
          <path fill="currentColor" d="M0,100 Q100,200 200,100 L200,0 L0,0 Z" />
        </svg>
      </div>

      <h3 class="text-4xl font-bold mb-6 leading-snug">Unlock the Power of <br />AI-Powered Learning</h3>
      <p class="text-white/90 text-base mb-6">
        Help your child master math with AI-driven lessons, gamified quizzes, and real-time progress tracking.
      </p>

      <ul class="space-y-4 text-white">
        <li class="flex items-center gap-3">
          <i class="fas fa-check-circle text-white text-xl"></i>
          <span class="font-medium">Personalized AI Lessons</span>
        </li>
        <li class="flex items-center gap-3">
          <i class="fas fa-chart-line text-white text-xl"></i>
          <span class="font-medium">Real-Time Progress Reports</span>
        </li>
        <li class="flex items-center gap-3">
          <i class="fas fa-gamepad text-white text-xl"></i>
          <span class="font-medium">Fun Quizzes & Achievements</span>
        </li>
      </ul>
    </div>

    <!-- Form Card -->
    <form class="bg-white rounded-[40px] shadow-2xl p-10 space-y-6 border border-blue-100 hover:scale-105 transition-transform">
      <h3 class="text-3xl font-bold text-center bg-gradient-to-r from-[#1f88e4] to-[#ff467c] text-transparent bg-clip-text">Get Early Access</h3>
      <input type="text" placeholder="First Name" required class="w-full border border-gray-300 rounded-lg px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#1f88e4]" />
      <input type="text" placeholder="Last Name" required class="w-full border border-gray-300 rounded-lg px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#1f88e4]" />
      <input type="email" placeholder="Email Address" required class="w-full border border-gray-300 rounded-lg px-5 py-3 focus:outline-none focus:ring-2 focus:ring-[#1f88e4]" />

      <label class="flex items-center gap-2 text-sm text-gray-600">
        <input type="checkbox" class="accent-[#1f88e4] w-5 h-5" />
        I agree to receive updates & promotions.
      </label>

      <button type="submit" class="w-full py-3 bg-gradient-to-r from-[#1f88e4] to-[#ff467c] text-white font-bold rounded-xl shadow-md transition hover:brightness-110">
        Request Invite
      </button>
    </form>
  </div>
</section>






<!---testimonial section-->
<section class="bg-white text-[#1f88e4] py-32 relative overflow-hidden">
  <div class="max-w-4xl mx-auto px-6">
    <!-- Section Heading -->
    <div class="text-center mb-20">
      <h2 class="text-4xl md:text-5xl font-extrabold mb-4">What Our Clients Say</h2>
      <p class="text-[#1f88e4]/70 text-lg">Real feedback from businesses using Torvic</p>
    </div>

    <!-- Swiper -->
    <div class="swiper testimonialSwiper w-full">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="bg-[#1f88e4] text-white rounded-3xl p-8 shadow-xl text-center">
            <div class="flex items-center gap-4 justify-center mb-4">
              <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
              <div class="text-left">
                <p class="font-bold text-base">Sophie Lee</p>
                <p class="text-sm text-white/80 -mt-1">HealthFlow</p>
              </div>
            </div>
            <h3 class="text-lg font-serif mb-3">Made our operations seamless</h3>
            <p class="text-white/90 text-sm leading-relaxed">“From invoicing to daily tracking, everything is in one place. We love how effortless it is to use Torvic.”</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="bg-[#1f88e4] text-white rounded-3xl p-8 shadow-xl text-center">
            <div class="flex items-center gap-4 justify-center mb-4">
              <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
              <div class="text-left">
                <p class="font-bold text-base">Matt Stith</p>
                <p class="text-sm text-white/80 -mt-1">Voli Wellness</p>
              </div>
            </div>
            <h3 class="text-lg font-serif mb-3">Snapshot of our business</h3>
            <p class="text-white/90 text-sm leading-relaxed">“Torvic gives us quick insights into our finances. It's intuitive, beautiful, and simplifies reporting.”</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="bg-[#1f88e4] text-white rounded-3xl p-8 shadow-xl text-center">
            <div class="flex items-center gap-4 justify-center mb-4">
              <img src="https://randomuser.me/api/portraits/men/28.jpg" alt="User" class="w-10 h-10 rounded-full border-2 border-white">
              <div class="text-left">
                <p class="font-bold text-base">James Carter</p>
                <p class="text-sm text-white/80 -mt-1">BrightTech</p>
              </div>
            </div>
            <h3 class="text-lg font-serif mb-3">Powerful features</h3>
            <p class="text-white/90 text-sm leading-relaxed">“The interface is beautiful. Torvic has improved our operations and decisions.”</p>
          </div>
        </div>

      </div>
    </div>

    <!-- Custom Arrows at Bottom -->
    <div class="flex justify-center items-center gap-6 mt-10">
      <button id="prevBtn" class="w-10 h-10 flex items-center justify-center text-[#1f88e4] hover:text-blue-700 transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button id="nextBtn" class="w-10 h-10 flex items-center justify-center text-[#1f88e4] hover:text-blue-700 transition">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>

    <!-- Pagination -->
    <div class="swiper-pagination mt-6 text-center"></div>
  </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".testimonialSwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: "#nextBtn",
      prevEl: "#prevBtn",
    },
  });
</script>









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




