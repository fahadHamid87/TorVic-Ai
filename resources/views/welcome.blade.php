<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Torvic.AI</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

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
<x-Header />


  <!-- Main Wrapper -->
  <main class="w-full">

<!-- Blue Section -->
<section
  class="bg-blue-500 bg-grid-blue text-white flex flex-col items-center justify-center min-h-[900px] px-4 py-16"
>
<h1
  style="
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-weight: 700;
    letter-spacing: 0.01em;
    line-height: 1.2;
    color: white;
  "
  class="text-4xl sm:text-7xl mb-6 text-center max-w-5xl"
>
  Master 5th Grade Math with <br />
  Fun,&nbsp;Personalized&nbsp;AI&nbsp;powered <br />
  Lessons
</h1>




<!-- Paragraph -->
<div class="text-center text-white/90 mt-6 mx-auto px-4 max-w-5xl">
  <span class="block max-w-full text-3xl mx-auto leading-relaxed tracking-normal">
    Torvic.AI turns math into an exciting adventure with interactive video <br />
    lessons that follow the US curriculum while adding a fun twist.
  </span>
  
  <p class="font-semibold mt-1 mb-3.5 text-2xl max-w-full text-center mx-auto">
    Let your child master math with lessons they’ll actually enjoy!
  </p>
</div>







<div
  class="mx-auto overflow-hidden rounded-lg shadow-lg flex-shrink-0"
  style="max-width: 70vw; width: 90vw;"
>
  <video
    controls
    autoplay
    muted
    class="w-full aspect-video block"
  >
    <source src="{{ asset('video.mp4') }}" type="video/mp4" />
    Your browser does not support the video tag.
  </video>
</div>



</section>

<!-- Pink Section -->
<section class="bg-pink-500 py-24 md:py-32 overflow-visible">
  <div
    class="max-w-screen-xl mx-auto px-4 md:px-8 relative overflow-visible"
    style="padding-right: 380px;"  <!-- Reserve space for card overlap -->
  
    <div class="flex items-start max-w-full overflow-visible">
      <!-- Video -->
      <video
        autoplay
        muted
        loop
        class="rounded-xl shadow-xl w-[1000px] max-w-full h-auto flex-shrink-0"
      >
        <source src="{{ asset('video2.mp4') }}" type="video/mp4" />
        Your browser does not support the video tag.
      </video>

      <!-- Card -->
      <div
        class="bg-white p-8 md:p-10 rounded-2xl shadow-2xl max-w-md w-[380px] -ml-24 flex-shrink-0 z-10"
      >
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight mb-4">
          Ready to Help Your<br />Child Love Math?
        </h2>
        <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
          Join the thousands of parents and educators who trust Torvic.AI to make math fun, engaging, and effective. Sign up today and watch your child succeed in 5th-grade math.
        </p>
        <button
          class="bg-pink-500 hover:bg-pink-600 text-white text-lg font-semibold py-3 px-6 rounded-full transition duration-300 w-full"
        >
          Start Free Trial
        </button>
      </div>
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

















<!-- What is Torvic.AI Section -->
<section class="bg-white py-20" style="min-height: 600px;">
  <div class="max-w-7xl mx-auto px-6 md:px-12 grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

    <!-- Left Column -->
    <div>
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">What is Torvic.AI?</h2>
      <p class="text-gray-800 text-base md:text-lg mb-5 leading-relaxed">
        <a href="#" class="text-blue-600 font-semibold underline">Torvic.AI</a> is a learning platform built specifically for 5th-grade math students, designed to make math engaging and effective.
      </p>
      <p class="text-gray-800 text-base md:text-lg mb-8 leading-relaxed">
        Validated by real teachers, creatives, and AI, your child will experience math like never before.
      </p>
      <button class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 px-10 rounded-full transition duration-300 text-base md:text-lg">
        Start Free Trial
      </button>
    </div>

    <!-- Right Column -->
    <div class="space-y-10">
      <!-- Feature 1 -->
      <div class="flex items-start gap-5">
        <div class="text-blue-600 text-3xl md:text-4xl font-extrabold leading-none">▞</div>
        <div>
          <h3 class="text-xl md:text-2xl font-semibold text-gray-900 leading-snug">Real Teachers & Creatives</h3>
          <p class="text-gray-700 text-sm md:text-base mt-1 leading-relaxed max-w-lg">
            Every lesson is crafted by experts to ensure it’s both accurate and entertaining.
          </p>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="flex items-start gap-5">
        <div class="text-blue-600 text-3xl md:text-4xl font-extrabold leading-none">＋</div>
        <div>
          <h3 class="text-xl md:text-2xl font-semibold text-gray-900 leading-snug">AI Integration</h3>
          <p class="text-gray-700 text-sm md:text-base mt-1 leading-relaxed max-w-lg">
            AI-powered visuals and interactive elements keep your child focused and interested.
          </p>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="flex items-start gap-5">
        <div class="text-blue-600 text-3xl md:text-4xl font-extrabold leading-none">▛</div>
        <div>
          <h3 class="text-xl md:text-2xl font-semibold text-gray-900 leading-snug">Curriculum-Based Learning</h3>
          <p class="text-gray-700 text-sm md:text-base mt-1 leading-relaxed max-w-lg">
            Our lessons follow the US 5th-grade math curriculum but with a fresh, engaging approach.
          </p>
        </div>
      </div>
    </div>

  </div>
</section>




<!-- Win-Win Section -->
<section class="bg-[#f1f8ff] py-20">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <!-- Heading -->
    <h2 class="text-3xl md:text-5xl font-bold text-gray-900 mb-14">
      A Win-Win for Parents, Teachers, and <br> Students Alike
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

<!-- 3 Simple Steps Section -->
<section class="bg-white py-20">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <!-- Main Heading -->
  <h2 class="w-full text-center text-6xl md:text-6xl font-semibold text-gray-900 mb-16">
  <span class="block">
    Transform Your Child into a Math Pro <br class="hidden md:block" />
    in Just 3 Simple Steps
  </span>
</h2>


    <!-- STEP 1 -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center text-left mb-16">
      <!-- Image -->
      <div>
       <img src="{{ asset('Unit 9.avif') }}" alt="Parent and child" class="w-full h-full object-cover " />
      </div>
      <!-- Text -->
      <div>
        <h4 class="text-pink-500 font-semibold text-xl uppercase mb-2">Step 1</h4>
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
          Explore and Preview the Program
        </h3>
        <p class="text-gray-700 text-base leading-relaxed">
          Check out our fun, interactive math lessons and see how much easier and more enjoyable learning math can be.
        </p>
      </div>
    </div>

    <!-- STEP 2 -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center text-left mb-16">
      <!-- Image -->
      <div>
        <img src="{{ asset('Unit 7.avif') }}" alt="Parent and child" class="w-full h-full object-cover " />
      </div>
      <!-- Text -->
      <div>
        <h4 class="text-pink-500 font-semibold text-xl uppercase mb-2">Step 2</h4>
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
          Start your Free Trial
        </h3>
        <p class="text-gray-700 text-base leading-relaxed">
          Ready to dive in? Start your Free Trial to access all the lessons and interactive features your child will love.
        </p>
      </div>
    </div>

    <!-- STEP 3 -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center text-left">
      <!-- Image -->
      <div>
       <img src="{{ asset('Unit 8.avif') }}" alt="Parent and child" class="w-full h-full object-cover " />
      </div>
      <!-- Text -->
      <div>
        <h4 class="text-pink-500 font-bold text-xl uppercase mb-2">Step 3</h4>
        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
          Watch Your Child Grow
        </h3>
        <p class="text-gray-700 text-base leading-relaxed">
          Track their progress through real-time quizzes and assessments as their math skills and confidence soar.
        </p>
      </div>
    </div>

  </div>
</section>

<section class="bg-[#f1f8ff] py-20">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-x-4 items-center">
    
    <!-- Left: Image with overlayed text -->
    <div class="relative overflow-hidden rounded-xl">
      <img src="{{ asset('FFBF42.avif') }}" alt="Parent and child" class="w-full h-full object-cover " />
      <div class="absolute bottom-0 left-0 w-full h-1/2 bg-blue-500 clip-triangle z-10"></div>
      <div class="absolute bottom-0 left-0 p-6 md:p-8 z-20 text-white max-w-md">
        <h2 class="text-2xl md:text-3xl font-bold mb-4 leading-snug">
          Don’t Let Your Child <br /> Struggle with Math!
        </h2>
        <p class="text-sm md:text-base leading-relaxed mb-4">
          In a busy classroom, it’s easy for children to fall behind. With Torvic.AI, your child gets engaging lessons tailored to their needs, helping them build confidence and excel in math.
        </p>
        <button class="bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-5 rounded-full text-sm transition">
          Start Free Trial
        </button>
      </div>
    </div>

    <!-- Right: 2x2 grid features -->
    <div class="w-full h-full grid grid-cols-1 sm:grid-cols-2 gap-4">
      <!-- Feature 1 -->
      <div class="bg-blue-500 text-white flex flex-col p-6 h-full rounded-md">
        <div class="text-yellow-400 text-2xl mb-4">▲</div>
        <h3 class="font-semibold text-lg mb-2">Engaging Video Lessons</h3>
        <p class="text-sm">Fun, interactive lessons that keep your child interested and motivated.</p>
      </div>

      <!-- Feature 2 -->
      <div class="bg-blue-500 text-white flex flex-col p-6 h-full rounded-md">
        <div class="text-yellow-400 text-2xl mb-4">❘</div>
        <h3 class="font-semibold text-lg mb-2">Flexible Learning</h3>
        <p class="text-sm">Learn anytime, anywhere—whether at home or on the go.</p>
      </div>

      <!-- Feature 3 -->
      <div class="bg-blue-500 text-white flex flex-col p-6 h-full rounded-md">
        <div class="text-yellow-400 text-2xl mb-4">⟳</div>
        <h3 class="font-semibold text-lg mb-2">Real-Time Progress Tracking</h3>
        <p class="text-sm">Stay in the loop with detailed performance reports and celebrate each success.</p>
      </div>

      <!-- Feature 4 -->
      <div class="bg-blue-500 text-white flex flex-col p-6 h-full rounded-md">
        <div class="text-yellow-400 text-2xl mb-4">★</div>
        <h3 class="font-semibold text-lg mb-2">Quizzes and Assessments</h3>
        <p class="text-sm">Measure your child’s improvement and reinforce learning with fun, interactive quizzes.</p>
      </div>
    </div>
  </div>
</section>




<!-- Signup Announcement Section -->
<section class="bg-[#e9f1f9] py-20">
  <div class="w-full flex flex-col md:flex-row">

 <!-- Left Side: constrained max width, padded, pushed a bit right -->
<div class="flex-1 max-w-4xl px-6 md:px-12 flex flex-col justify-center ml-8 md:ml-16">
  <h2 class="text-4xl md:text-5xl font-semibold text-gray-900 mb-8 flex items-center gap-3">
    <span>🛠️</span>
    <span>Torvic.AI is in <br class="md:block hidden" /> Development Mode</span>
  </h2>

  <p class="text-gray-800 text-lg mb-6">
    We're currently building something amazing at Torvic.AI. While we finish up, sign up for our email list to be the first to know when we go live! 📅
  </p>
  <p class="text-gray-800 text-lg">
    Get exclusive early access, updates, and special offers. Stay tuned—big things are coming!
  </p>
</div>



    <!-- Right Side: Pink background flush right, increased height -->
    <div class="flex-1 bg-pink-500 flex items-center justify-center rounded-tl-xl rounded-bl-xl min-h-[800px] py-16">
      <div class="bg-white w-full max-w-md rounded-lg p-6 md:p-10 shadow-lg">
        <h3 class="text-xl md:text-2xl font-bold text-center mb-2">Be the First to Experience</h3>
        <p class="text-blue-600 text-center font-medium underline mb-4"><a href="#">Torvic.ai</a></p>
        <p class="text-center text-gray-800 font-semibold mb-6">Sign up now!</p>

        <form action="#" method="POST" class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">First name</label>
            <input type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Last name</label>
            <input type="text" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" />
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-pink-400" />
          </div>
          <div class="flex items-start gap-2">
            <input type="checkbox" class="mt-1" required />
            <label class="text-sm text-gray-600">
              I agree to receive updates, newsletters, and promotional content from Torvic.ai. I understand I can unsubscribe at any time.
            </label>
          </div>
          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-md transition">
            Submit
          </button>
        </form>
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














 <x-Footer/>


  </main>

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

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('translate-x-0');
    menu.classList.toggle('translate-x-full');
  }
</script>
</html>




