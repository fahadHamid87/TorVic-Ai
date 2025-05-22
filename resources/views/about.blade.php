<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
   <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <title>About Torvic.AI</title>

  <!-- ✅ Include Tailwind CSS via CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Optional: Custom grid background CSS -->
  <style>
    .bg-grid-blue {
      background-image: linear-gradient(to right, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
                        linear-gradient(to bottom, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
      background-size: 80px 80px;
    }
     /* Clip and skew effect for diagonal split */
  .clip-skew-left {
    clip-path: polygon(0 0, 100% 10%, 100% 90%, 0% 100%);
  }
  .clip-skew-right {
    clip-path: polygon(0 10%, 100% 0%, 100% 100%, 0 90%);
  }
  /* Outline effect on text */
  .text-outline {
    color: transparent;
    -webkit-text-stroke: 1.5px #2563EB; /* blue outline */
    text-stroke: 1.5px #2563EB;
  }
  /* Smooth image zoom on hover */
  .image-hover-zoom {
    transition: transform 0.6s ease;
  }
  .image-hover-zoom:hover {
    transform: scale(1.05) translateZ(0);
  }

  </style>
  <style>
  #layered-title {
    position: relative;
    height: 1.2em;
  }
  #layered-title .layer {
    pointer-events: none;
  }
</style>
  <style>
  .bg-grid-blue {
    background-image: linear-gradient(to right, rgba(255,255,255,0.1) 1px, transparent 1px),
                      linear-gradient(to bottom, rgba(255,255,255,0.1) 1px, transparent 1px);
    background-size: 80px 80px;
  }
</style>

</head>

<body class="bg-blue-500 text-white font-sans">

<x-header/>

<!-- 3D Layered Text with Blue Starfield Background -->
<section class="relative overflow-hidden py-32 px-6 md:px-20 select-none" style="background: linear-gradient(135deg, #3b82f6 0%, #2563eb 50%, #1e40af 100%);">
  <!-- Blue Starfield Canvas -->
  <canvas id="starfield" class="absolute inset-0 -z-10 w-full h-full"></canvas>

  <div class="max-w-6xl mx-auto text-center">
    <h1
      id="layered-title"
      class="relative text-6xl md:text-8xl font-extrabold text-white cursor-default"
      style="perspective: 1000px;"
    >
      <span class="layer layer1 absolute top-0 left-0 w-full h-full text-transparent bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text filter drop-shadow-lg" style="transform: translate3d(0,0,30px) scale(1.1); z-index: 3;">
        About Torvic.AI
      </span>
      <span class="layer layer2 absolute top-0 left-0 w-full h-full text-transparent bg-gradient-to-r from-blue-600 to-blue-900 bg-clip-text filter drop-shadow-lg" style="transform: translate3d(0,0,15px) scale(1.05); z-index: 2;">
        About Torvic.AI
      </span>
      <span class="layer layer3 relative text-white z-10">
        About Torvic.AI
      </span>
    </h1>
  </div>
</section>


<!--- About Us Section - Modern Card Layout -->
<section class="relative min-h-screen bg-gradient-to-tr from-blue-50 to-blue-100 overflow-hidden px-6 md:px-20 py-32 select-none flex flex-col md:flex-row md:items-center md:justify-center md:gap-10">

  <!-- Abstract SVG shape behind -->
  <svg class="hidden md:block absolute -top-20 -left-40 w-[600px] h-[600px] opacity-10" viewBox="0 0 600 600" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <circle cx="300" cy="300" r="300" fill="url(#paint0_radial)" />
    <defs>
      <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(300 300) rotate(90) scale(300)">
        <stop stop-color="#3B82F6" />
        <stop offset="1" stop-color="#2563EB" stop-opacity="0" />
      </radialGradient>
    </defs>
  </svg>

  <!-- Left card -->
  <div 
    class="relative bg-white bg-opacity-90 backdrop-blur-md rounded-3xl shadow-2xl ring-1 ring-blue-300 p-12 max-w-xl md:max-w-lg -rotate-3 hover:rotate-0 hover:scale-105 transition-transform duration-700 ease-in-out cursor-pointer z-30 flex-shrink-0"
    onmousemove="tiltCard(event, this)" onmouseleave="resetTilt(this)"
  >
    <div class="flex items-center gap-5 mb-8">
      <div class="p-4 bg-gradient-to-tr from-blue-700 to-blue-400 rounded-2xl shadow-lg text-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-2.21 0-4 .895-4 2s1.79 2 4 2 4-.895 4-2-1.79-2-4-2z" />
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 14c-3.314 0-6 1.567-6 3.5V19h12v-1.5c0-1.933-2.686-3.5-6-3.5z" />
        </svg>
      </div>
      <h3 class="text-3xl md:text-4xl font-extrabold text-blue-800 tracking-wide">Our Mission</h3>
    </div>
    <p class="text-gray-900 leading-relaxed mb-6 text-base md:text-lg">
      Torvic.AI was inspired by a powerful image: flooded and overcrowded classrooms in the Philippines, where children struggled to learn under challenging conditions. Out of compassion, an idea took shape—an inspiration to create an alternative tool for learning at home when in-person learning isn’t possible.
    </p>
    <p class="text-gray-900 leading-relaxed text-base md:text-lg">
      Motivated by this vision, the Torvic.AI team developed an AI-powered platform that delivers engaging, curriculum-based math lessons, making learning accessible, interactive, and enjoyable for 5th graders everywhere. Designed to support under-resourced communities globally, Torvic.AI aims to level the educational playing field, empowering young learners to reach their full potential.
    </p>
  </div>

  <!-- Right card: switched from absolute to relative on small screens -->
  <div
    class="relative bg-gradient-to-tr from-blue-700 to-blue-500 rounded-3xl p-16 shadow-2xl ring-1 ring-blue-900 text-white -rotate-2 hover:rotate-0 hover:scale-105 transition-transform duration-700 ease-in-out cursor-default z-40 mt-20 md:mt-0 md:-ml-20 md:flex-shrink-0 md:max-w-md"
  >
    <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight drop-shadow-md leading-tight bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-pink-500 to-red-500">
      Background<br />Story<br />of Torvic.AI
    </h2>
    <div class="w-28 md:w-36 h-1 rounded-full mt-8 bg-gradient-to-r from-purple-400 via-pink-500 to-red-500"></div>
  </div>

  <!-- Floating blobs -->
  <div class="hidden md:block absolute -left-16 top-20 w-40 h-40 rounded-full bg-gradient-to-tr from-purple-300 to-pink-400 opacity-40 filter blur-3xl animate-blob"></div>
  <div class="hidden md:block absolute -right-24 bottom-10 w-32 h-32 rounded-full bg-gradient-to-br from-yellow-300 to-red-400 opacity-30 filter blur-2xl animate-blob animation-delay-2000"></div>

  <style>
    @keyframes blob {
      0%, 100% { transform: translate(0, 0) scale(1); }
      33% { transform: translate(25px, -20px) scale(1.1); }
      66% { transform: translate(-20px, 25px) scale(0.9); }
    }
    .animate-blob {
      animation: blob 8s infinite ease-in-out;
    }
    .animation-delay-2000 {
      animation-delay: 2s;
    }
  </style>

  <script>
    function tiltCard(event, element) {
      const rect = element.getBoundingClientRect();
      const x = event.clientX - rect.left;
      const y = event.clientY - rect.top;
      const centerX = rect.width / 2;
      const centerY = rect.height / 2;

      const deltaX = (x - centerX) / centerX;
      const deltaY = (y - centerY) / centerY;

      const maxRotation = 7; // degrees
      element.style.transform = `scale(1.05) rotateX(${ -deltaY * maxRotation }deg) rotateY(${ deltaX * maxRotation }deg)`;
    }
    function resetTilt(element) {
      element.style.transform = 'scale(1) rotateX(0) rotateY(0)';
    }
  </script>
</section>




<section class="relative bg-gradient-to-tr from-pink-50 via-white to-pink-100 py-24 px-6 md:px-20 overflow-hidden">
  <!-- Background glowing orb -->
  <div
    class="absolute -top-20 -left-20 w-96 h-96 bg-pink-400 rounded-full filter blur-3xl opacity-30 animate-pulse-slow pointer-events-none"
    aria-hidden="true"></div>

  <!-- Background subtle diagonal stripes -->
  <div
    class="absolute inset-0 bg-[length:60px_60px] bg-[linear-gradient(45deg,rgba(236,72,153,0.1) 25%,transparent 25%,transparent 50%,rgba(236,72,153,0.1) 50%,rgba(236,72,153,0.1) 75%,transparent 75%,transparent)]"
    aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
    <!-- Left Pink Card -->
    <div
      class="relative bg-pink-600 text-white p-16 rounded-3xl shadow-2xl max-w-xl mx-auto md:mx-0
      clip-path-polygon-[15%_0%,100%_0%,85%_100%,0%_100%]
      transform transition-transform duration-300 hover:-translate-y-2 cursor-pointer"
      style="clip-path: polygon(15% 0%, 100% 0%, 85% 100%, 0% 100%);"
    >
      <!-- Vertical accent bar -->
      <div
        class="absolute left-0 top-0 bottom-0 w-5 bg-gradient-to-b from-pink-400 via-pink-600 to-pink-800 rounded-l-3xl"></div>

      <h2 class="text-5xl font-extrabold leading-tight tracking-tight drop-shadow-lg">
        Global Education,
        <br />
        <span class="block mt-3 text-7xl font-black">Powered by AI</span>
      </h2>
    </div>

    <!-- Right Text Content -->
    <div class="max-w-xl mx-auto md:mx-0">
      <h3
        class="text-pink-600 text-5xl font-extrabold uppercase tracking-widest mb-8 font-sans drop-shadow-sm"
      >
        Our Vision
      </h3>
      <p class="text-gray-900 text-xl leading-relaxed mb-6 font-light">
        We believe every child deserves access to high-quality education,
        no matter their location or resources.
      </p>
      <p class="text-gray-900 text-xl leading-relaxed font-light">
        Our vision is to bridge educational gaps through AI, making learning
        creative, engaging, and fun for all.
      </p>
    </div>
  </div>
</section>

<style>
  @keyframes pulse-slow {
    0%, 100% {
      opacity: 0.3;
    }
    50% {
      opacity: 0.5;
    }
  }
  .animate-pulse-slow {
    animation: pulse-slow 6s ease-in-out infinite;
  }
</style>




<section class="relative bg-gradient-to-tr from-yellow-50 via-white to-yellow-100 py-28 px-6 md:px-20 overflow-hidden">
  <!-- Background glowing orb -->
  <div
    class="absolute top-0 right-0 w-96 h-96 bg-yellow-400 rounded-full filter blur-3xl opacity-30 animate-pulse-slow pointer-events-none"
    aria-hidden="true"></div>

  <!-- Background subtle diagonal stripes -->
  <div
    class="absolute inset-0 bg-[length:60px_60px] bg-[linear-gradient(45deg,rgba(202,138,4,0.1) 25%,transparent 25%,transparent 50%,rgba(202,138,4,0.1) 50%,rgba(202,138,4,0.1) 75%,transparent 75%,transparent)]"
    aria-hidden="true"></div>

  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
    <!-- Left Text Content -->
    <div class="relative max-w-xl mx-auto md:mx-0">
      <!-- Vertical accent bar -->
      <div
        class="absolute left-0 top-0 bottom-0 w-2 bg-gradient-to-b from-yellow-400 via-yellow-500 to-yellow-600 rounded"></div>

      <h2
        class="text-yellow-500 text-5xl font-extrabold mb-8 uppercase tracking-wide pl-10 font-sans drop-shadow-sm">
        Our Mission
      </h2>
      <p class="text-gray-900 text-xl leading-relaxed mb-6 pl-10 font-light">
        Torvic.AI combines AI and creativity to deliver personalized math lessons that spark curiosity and build confidence.
      </p>
      <p class="text-gray-900 text-xl leading-relaxed pl-10 font-light">
        Our goal? To help students everywhere unlock their potential and love learning.
      </p>
    </div>

    <!-- Right Yellow Card -->
    <div
      class="relative bg-yellow-400 text-white p-20 rounded-tr-[6rem] rounded-bl-[6rem] shadow-2xl min-h-[360px] flex flex-col justify-center items-center
             clip-path-polygon-[15%_0%,100%_0%,100%_100%,0%_100%] transition-transform duration-300 ease-in-out hover:scale-105 cursor-pointer"
      style="clip-path: polygon(15% 0%, 100% 0%, 100% 100%, 0% 100%);"
    >
      <p class="text-4xl font-extrabold drop-shadow-lg">Making Math Fun and</p>
      <p class="text-5xl font-extrabold mt-2 drop-shadow-xl">Accessible</p>
    </div>
  </div>
</section>

<style>
  @keyframes pulse-slow {
    0%, 100% {
      opacity: 0.3;
    }
    50% {
      opacity: 0.5;
    }
  }
  .animate-pulse-slow {
    animation: pulse-slow 6s ease-in-out infinite;
  }
</style>




<!-- Meet Our Founder - Modern Split with Circular Image -->
<section class="relative min-h-[720px] bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 min-h-[720px]">

    <!-- Left: Founder image with glow and clipped skew -->
    <div class="relative clip-skew-left bg-gradient-to-tr from-blue-600 to-blue-400 flex justify-center items-center">
      <!-- Blue glow behind image -->
      <div class="absolute -top-20 -left-20 w-96 h-96 rounded-full bg-blue-400 opacity-30 filter blur-3xl z-0"></div>

      <!-- Founder Image -->
      <img
        src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?auto=format&fit=crop&w=600&q=80"
        alt="Founder Portrait"
        class="relative z-10 rounded-xl shadow-2xl object-cover w-96 h-[560px] image-hover-zoom"
        loading="lazy"
      />
    </div>

    <!-- Right: Text content with skew clip -->
    <div class="relative clip-skew-right bg-white flex flex-col justify-center p-16 md:p-24">
      <p class="text-blue-600 uppercase tracking-widest font-semibold mb-4 text-lg">Meet Our Founder</p>

      <h2 class="text-6xl md:text-7xl font-extrabold leading-tight mb-8">
        A <span class="text-blue-600">Vision</span><br />
        to <span class="text-outline">Change</span><br />
        Education
      </h2>

      <p class="text-gray-700 text-lg leading-relaxed max-w-xl font-light mb-10">
        Inspired by the challenges in underfunded schools, I founded Torvic.AI to bring
        personalized, high-quality education to students everywhere. With a passion for
        tech and education, our vision is to make learning both effective and fun.
      </p>

      <!-- Accent horizontal line -->
      <div class="w-24 h-1 bg-blue-600 rounded-full mb-8"></div>

      <!-- Highlight badges / values -->
      <div class="flex flex-wrap gap-6 max-w-xl">
        <span class="bg-blue-100 text-blue-700 rounded-full px-5 py-2 font-semibold tracking-wide shadow">Innovation</span>
        <span class="bg-blue-100 text-blue-700 rounded-full px-5 py-2 font-semibold tracking-wide shadow">Quality</span>
        <span class="bg-blue-100 text-blue-700 rounded-full px-5 py-2 font-semibold tracking-wide shadow">Passion</span>
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

<!-- Pink Section -->
<section class="bg-pink-500 py-24 md:py-32 overflow-hidden relative">
  <div class="max-w-screen-xl mx-auto px-4 md:px-8 relative">
    <div class="flex flex-col md:flex-row items-center md:items-start justify-start">
      <!-- Video -->
      <div class="video-container rounded-xl shadow-xl max-w-[800px] w-full md:w-auto flex-shrink-0 mb-8 md:mb-0 mr-0 md:mr-8">
        <video autoplay muted loop class="rounded-xl shadow-xl w-full h-auto">
          <source src="{{ asset('video2.mp4') }}" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <div class="video-overlay absolute inset-0 bg-gradient-to-r from-pink-500 via-transparent"></div>
      </div>

      <!-- Card -->
      <div class="bg-white p-8 md:p-10 rounded-2xl shadow-2xl max-w-md z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-4">
          Ready to Help Your<br />Child Love Math?
        </h2>
        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
          Join the thousands of parents and educators who trust Torvic.AI to make math fun, engaging, and effective. Sign up today and watch your child succeed in 5th-grade math.
        </p>
        <button class="bg-pink-500 hover:bg-pink-600 text-white text-lg font-semibold py-3 px-6 rounded-full transition duration-300 w-full">
          Start Free Trial
        </button>
      </div>
    </div>
  </div>

  <!-- Background Shapes -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="shape-1 absolute top-0 left-0 -translate-x-1/2 -translate-y-1/2">
      <svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M202.5 0C304.857 0 387.5 82.6432 387.5 185C387.5 287.357 304.857 370 202.5 370C100.143 370 17.5 287.357 17.5 185C17.5 82.6432 100.143 0 202.5 0Z" fill="url(#paint0_radial)" />
        <defs>
          <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(202.5 185) rotate(90) scale(185)">
            <stop stop-color="#FEE2E2" />
            <stop offset="1" stop-color="#FEE2E2" stop-opacity="0" />
          </radialGradient>
        </defs>
      </svg>
    </div>
    <div class="shape-2 absolute bottom-0 right-0 translate-x-1/2 translate-y-1/2">
      <svg width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M202.5 0C304.857 0 387.5 82.6432 387.5 185C387.5 287.357 304.857 370 202.5 370C100.143 370 17.5 287.357 17.5 185C17.5 82.6432 100.143 0 202.5 0Z" fill="url(#paint0_radial)" />
        <defs>
          <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(202.5 185) rotate(90) scale(185)">
            <stop stop-color="#FEE2E2" />
            <stop offset="1" stop-color="#FEE2E2" stop-opacity="0" />
          </radialGradient>
        </defs>
      </svg>
    </div>
  </div>
</section>

<style>
  @media (max-width: 767px) {
    /* Remove right padding to avoid horizontal scroll */
    section.bg-pink-500 > div {
      padding-right: 1rem !important;
    }
    /* Stack video + card vertically */
    section.bg-pink-500 > div > div {
      flex-direction: column;
      max-width: 100% !important;
    }
    /* Hide video on mobile */
    section.bg-pink-500 > div > div > video {
      display: none !important;
    }
    /* Make card full width and reset margin */
    section.bg-pink-500 > div > div > div {
      width: 100% !important;
      margin-left: 0 !important;
      margin-top: 1.5rem;
    }
  }
</style>


<x-footer/>



</body>


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
 document.addEventListener("DOMContentLoaded", () => {
  const text = "About Torvic.AI";
  const container = document.getElementById("animated-title");

  container.innerHTML = "";

  [...text].forEach((char, i) => {
    const span = document.createElement("span");
    span.textContent = char;
    span.style.opacity = 0;
    span.style.display = "inline-block";
    span.style.transition = "opacity 0.3s ease";
    span.style.transitionDelay = `${i * 100}ms`;

    // Add extra margin after the space character for bigger gap
    if (char === " ") {
      span.style.marginRight = "0.8em"; // adjust spacing as needed
      span.textContent = "\u00A0"; // non-breaking space for consistent width
    }

    container.appendChild(span);

    setTimeout(() => {
      span.style.opacity = 1;
    }, 10);
  });
});

</script>

<script>
  // Parallax effect for text layers on mouse move
  const layeredTitle = document.getElementById('layered-title');
  const layers = layeredTitle.querySelectorAll('.layer');

  document.addEventListener('mousemove', e => {
    const { innerWidth, innerHeight } = window;
    const mouseX = e.clientX;
    const mouseY = e.clientY;

    // Normalize mouse position to [-1, 1]
    const xNorm = (mouseX / innerWidth) * 2 - 1;
    const yNorm = (mouseY / innerHeight) * 2 - 1;

    layers.forEach((layer, i) => {
      const depth = (layers.length - i) * 10;
      const moveX = xNorm * depth;
      const moveY = yNorm * depth;
      layer.style.transform = `translate3d(${moveX}px, ${moveY}px, 0) scale(${1 + i * 0.05})`;
    });
  });

  // Blue Starfield background animation
  const canvas = document.getElementById('starfield');
  const ctx = canvas.getContext('2d');
  let width, height;
  let stars = [];

  class Star {
    constructor() {
      this.reset();
    }
    reset() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.z = Math.random() * width;
      this.size = 1 + Math.random() * 1.5;
      this.speed = 0.5 + Math.random();
      this.color = `rgba(173, 216, 230, ${0.3 + Math.random() * 0.5})`; // light blue shades
    }
    update() {
      this.z -= this.speed;
      if (this.z <= 0) {
        this.reset();
        this.z = width;
      }
    }
    draw() {
      const sx = (this.x - width / 2) * (width / this.z) + width / 2;
      const sy = (this.y - height / 2) * (width / this.z) + height / 2;
      const radius = this.size * (width / this.z);
      ctx.beginPath();
      ctx.arc(sx, sy, radius, 0, 2 * Math.PI);
      ctx.fillStyle = this.color;
      ctx.shadowColor = 'rgba(173, 216, 230, 0.7)';
      ctx.shadowBlur = 5;
      ctx.fill();
    }
  }

  function init() {
    resize();
    stars = [];
    for (let i = 0; i < 300; i++) {
      stars.push(new Star());
    }
    animate();
  }

  function resize() {
    width = canvas.width = canvas.clientWidth;
    height = canvas.height = canvas.clientHeight;
  }

  function animate() {
    ctx.clearRect(0, 0, width, height);
    stars.forEach(star => {
      star.update();
      star.draw();
    });
    requestAnimationFrame(animate);
  }

  window.addEventListener('resize', init);
  init();
</script>


</html>
