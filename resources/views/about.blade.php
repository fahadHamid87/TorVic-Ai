<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

<x-Header/>

<!-- About Hero Section -->
<section class="bg-blue-500 bg-grid-blue py-24 px-6 md:px-16">
  <div class="max-w-7xl mx-auto">
    <h1 class="text-white text-5xl md:text-6xl font-bold">About Torvic.AI</h1>
  </div>
</section>

<!-- About Background Story Section -->
<section class="bg-[#EDF5FF] py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-start">

    <!-- Left: Story Text -->
    <div class="text-gray-800 text-lg leading-relaxed">
      <p>
        Torvic.AI was inspired by a powerful image: flooded and overcrowded classrooms in the Philippines, where children struggled to learn under challenging conditions. Out of compassion, an idea took shape—an inspiration to create an alternative tool for learning at home when in-person learning isn’t possible.
      </p>
      <p class="mt-6">
        Motivated by this vision, the Torvic.AI team developed an AI-powered platform that delivers engaging, curriculum-based math lessons, making learning accessible, interactive, and enjoyable for 5th graders everywhere. Designed to support under-resourced communities globally, Torvic.AI aims to level the educational playing field, empowering young learners to reach their full potential.
      </p>
    </div>

    <!-- Right: Side Heading -->
    <div class="text-blue-600 font-bold text-3xl md:text-4xl leading-tight">
      <h2>Background Story</h2>
      <h2 class="mt-2">of Torvic.AI</h2>
    </div>
  </div>
</section>

<!-- Our Vision Section -->
<section class="bg-white py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    
    <!-- Left: Vision Text -->
    <div>
      <h2 class="text-pink-600 text-3xl md:text-4xl font-extrabold mb-6">Our Vision</h2>
      <p class="text-gray-800 text-lg mb-6">
        We believe every child deserves access to high-quality education, no matter their location or resources.
      </p>
      <p class="text-gray-800 text-lg">
        Our vision is to bridge educational gaps through AI, making learning creative, engaging, and fun for all.
      </p>
    </div>

    <!-- Right: Pink Highlight Box -->
    <div class="bg-pink-500 text-white text-3xl md:text-4xl font-bold p-10 rounded-lg">
      <p>Global Education,</p>
      <p class="mt-2">Powered by AI</p>
    </div>
  </div>
</section>

<!-- Our Mission Section -->
<section class="bg-white py-20 px-6 md:px-16">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
    
    <!-- Left: Mission Text -->
    <div>
      <h2 class="text-yellow-400 text-3xl md:text-4xl font-extrabold mb-6">Our Mission</h2>
      <p class="text-gray-800 text-lg mb-6">
        Torvic.AI combines AI and creativity to deliver personalized math lessons that spark curiosity and build confidence.
      </p>
      <p class="text-gray-800 text-lg">
        Our goal? To help students everywhere unlock their potential and love learning.
      </p>
    </div>

    <!-- Right: Yellow Highlight Box -->
    <div class="bg-yellow-400 text-white text-3xl md:text-4xl font-bold p-10 rounded-lg">
      <p>Making Math Fun and</p>
      <p class="mt-2">Accessible</p>
    </div>
  </div>
</section>

 <!-- Meet Our Founder -->
<section class="bg-white text-black">
  <div class="grid grid-cols-1 md:grid-cols-2">
    <!-- Left Side (Blue Background, could be image later) -->
    <div class="bg-blue-500 h-full w-full min-h-[500px]"></div>

    <!-- Right Side (Text Content) -->
    <div class="p-10 flex flex-col justify-center">
      <p class="text-blue-500 font-bold text-lg tracking-wide uppercase mb-2">
        Meet Our Founder
      </p>
      <h2 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
        A Vision to<br />Change Education
      </h2>
      <p class="text-lg text-gray-700 leading-relaxed">
        Inspired by the challenges in underfunded schools, I founded Torvic.AI to bring 
        personalized, high-quality education to students everywhere. With a passion for 
        tech and education, our vision is to make learning both effective and fun.
      </p>
    </div>
  </div>
</section>


<!-- Win-Win Section -->
<section class="bg-[#f1f8ff] py-20">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <!-- Heading -->
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-14">
      A Win-Win for Parents, Teachers, and Students Alike
    </h2>

    <!-- Card Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 text-left">
      
      <!-- Card 1 -->
      <div>
        <div class="overflow-hidden rounded-lg mb-4">
          <div class="bg-pink-500 p-1">
          <img src="{{ asset('1.avif') }}" alt="Parent and child" class="w-full h-full object-cover " />

          </div>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">For Parents</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          Looking for a way to boost your child's math skills while keeping it fun? Torvic.AI is the perfect solution to make learning math enjoyable and effective.
        </p>
      </div>

      <!-- Card 2 -->
      <div>
        <div class="overflow-hidden rounded-lg mb-4">
          <div class="bg-blue-500 p-1">
            <img src="{{ asset('2.avif') }}" alt="Parent and child" class="w-full h-full object-cover " />
          </div>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">For Educators</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          Torvic.AI supplements your classroom with engaging, curriculum-based lessons that provide the personalized support students need to excel.
        </p>
      </div>

      <!-- Card 3 -->
      <div>
        <div class="overflow-hidden rounded-lg mb-4">
          <div class="bg-yellow-400 p-1">
            <img src="{{ asset('3.avif') }}" alt="Parent and child" class="w-full h-full object-cover " />
          </div>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">For Students</h3>
        <p class="text-gray-700 text-sm leading-relaxed">
          Whether they need extra help or crave a challenge, students thrive in our interactive, gamified environment, learning at their own pace and having fun along the way.
        </p>
      </div>

    </div>
  </div>
</section>

<!-- Testimonial Section -->
<section class="bg-[#f1f8ff] py-20">
  <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center md:items-center gap-8">

    <!-- Testimonial Slider (Left) -->
    <div class="flex-1 max-w-4xl" id="testimonialSliderWrapper">
      <div id="testimonialSlider" class="overflow-hidden">
        <div class="flex transition-transform duration-500" style="width: 300%;">
          <!-- Slide 1 -->
          <div class="w-full flex-shrink-0" style="width: 100%;">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-gradient-to-br from-purple-200 to-yellow-100 rounded-full"></div>
              <div>
                <p class="font-medium text-gray-800">Mark T.</p>
                <p class="text-xs text-gray-600 uppercase">Teacher</p>
              </div>
            </div>
            <p class="text-2xl text-gray-900 mt-6">
              My students are more engaged and motivated with Torvic.AI.<br />
              It’s made teaching math so much easier.
            </p>
          </div>

          <!-- Slide 2 -->
          <div class="w-full flex-shrink-0 hidden" style="width: 100%;">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-gradient-to-br from-pink-200 to-purple-100 rounded-full"></div>
              <div>
                <p class="font-medium text-gray-800">Sarah M.</p>
                <p class="text-xs text-gray-600 uppercase">Parent</p>
              </div>
            </div>
            <p class="text-2xl text-gray-900 mt-6">
              Torvic.AI turned math time into something my daughter looks forward to. Her confidence has skyrocketed!
            </p>
          </div>

          <!-- Slide 3 -->
          <div class="w-full flex-shrink-0 hidden" style="width: 100%;">
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 bg-gradient-to-br from-blue-200 to-green-100 rounded-full"></div>
              <div>
                <p class="font-medium text-gray-800">James L.</p>
                <p class="text-xs text-gray-600 uppercase">Student</p>
              </div>
            </div>
            <p class="text-2xl text-gray-900 mt-6">
              It’s actually fun to learn with Torvic.AI. The quizzes, animations, and videos make math feel like a game!
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Arrows (Right, Vertically Centered) -->
    <div class="flex gap-6 text-2xl pt-6 md:pt-12">
      <button onclick="prevTestimonial()" class="hover:text-gray-700 transition">&larr;</button>
      <button onclick="nextTestimonial()" class="hover:text-gray-700 transition">&rarr;</button>
    </div>

  </div>
</section>

<!-- Pink Section -->
<section class="bg-pink-500 py-24 md:py-32">
  <div class="max-w-7xl mx-auto px-4 md:px-8">
    <div class="relative flex justify-center items-center">
      <!-- Background Video or Image -->
      <video autoplay muted loop class="w-full max-w-6xl rounded-xl shadow-xl object-cover aspect-video">
        <source src="{{ asset('video2.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <!-- Floating Card -->
      <div class="absolute right-0 md:right-16 lg:right-24 bg-white p-8 md:p-10 rounded-2xl shadow-2xl max-w-md w-full z-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-4">
          Ready to Help Your<br>Child Love Math?
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
</section>



<x-Footer/>



</body>


<script>
  const slider = document.getElementById("testimonialSlider").firstElementChild;
  let index = 0;
  const totalSlides = slider.children.length;

  function showSlide(i) {
    index = (i + totalSlides) % totalSlides;
    slider.style.transform = `translateX(-${index * 100}%)`;
  }

  function nextTestimonial() {
    showSlide(index + 1);
  }

  function prevTestimonial() {
    showSlide(index - 1);
  }
</script>
</html>
