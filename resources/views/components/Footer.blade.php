<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!-- FontAwesome -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet"
  />
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Footer Example</title>
</head>
<body>

<!-- Glassy Footer -->
<footer class="relative bg-[#1f81e6] text-white pt-24 pb-16 px-6 overflow-hidden z-10">
  <!-- Blurred Pink Blobs -->
  <div class="absolute top-[-120px] left-[-100px] w-[500px] h-[500px] bg-pink-500 rounded-full filter blur-[180px] opacity-30 animate-[blobMove1_10s_infinite]"></div>
  <div class="absolute bottom-[-100px] right-[-120px] w-[500px] h-[500px] bg-pink-400 rounded-full filter blur-[150px] opacity-25 animate-[blobMove2_14s_infinite]"></div>

  <!-- Frosted Glass Layer -->
  <div class="relative z-10 backdrop-blur-3xl bg-white/5 rounded-3xl p-10 lg:p-16 shadow-xl border border-white/10">

    <!-- Grid Layout -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">

      <!-- Left Branding + CTA -->
      <div class="lg:col-span-5 flex flex-col justify-between gap-6" data-aos="fade-up">
        <div>
          <h2 class="text-4xl font-extrabold uppercase tracking-tight leading-tight">
            Torvic.AI
          </h2>
          <p class="text-white/80 mt-4 text-sm leading-relaxed max-w-md">
            Personalized math learning for bright, curious minds. Built with AI. Designed with love.
          </p>
        </div>
        <a href="#" class="relative inline-block group mt-6 animate-[pulseGlow_3s_ease-in-out_infinite]">
          <span class="relative z-10 inline-block bg-pink-500 text-white font-semibold py-3 px-6 rounded-full shadow-lg transition-all duration-300 group-hover:scale-105">
            Start Free Trial
          </span>
        </a>
      </div>

      <!-- Right Info Cards -->
      <div class="lg:col-span-7 grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up" data-aos-delay="200">

        <!-- Explore -->
        <div class="bg-white/10 rounded-xl p-6 backdrop-blur-md border border-white/10 hover:shadow-pink-300/20 transition">
          <h3 class="font-bold text-white text-lg mb-4 uppercase tracking-wide">Explore</h3>
          <ul class="space-y-3 text-base">
            <li><a href="#" class="flex items-center gap-2 hover:underline transition"><i class="fas fa-home text-white/80"></i> Home</a></li>
            <li><a href="#" class="flex items-center gap-2 hover:underline transition"><i class="fas fa-user text-white/80"></i> About</a></li>
            <li><a href="#" class="flex items-center gap-2 hover:underline transition"><i class="fas fa-envelope text-white/80"></i> Contact</a></li>
          </ul>
        </div>

        <!-- Contact -->
        <div class="bg-white/10 rounded-xl p-6 backdrop-blur-md border border-white/10 hover:shadow-pink-300/20 transition">
          <h3 class="font-bold text-white text-lg mb-4 uppercase tracking-wide">Contact</h3>
          <p><a href="mailto:info@torvic.ai" class="hover:underline">info@torvic.ai</a></p>
          <p class="mt-2 text-white/80 text-sm"></p>
        </div>

        <!-- Social -->
        <div class="bg-white/10 rounded-xl p-6 backdrop-blur-md border border-white/10 hover:shadow-pink-300/20 transition">
          <h3 class="font-bold text-white text-lg mb-4 uppercase tracking-wide">Follow Us</h3>
          <div class="flex gap-4">
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md hover:bg-pink-500 transition" aria-label="Instagram">
              <i class="fab fa-instagram text-lg"></i>
            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md hover:bg-pink-500 transition" aria-label="Facebook">
              <i class="fab fa-facebook-f text-lg"></i>
            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md hover:bg-pink-500 transition" aria-label="Twitter">
              <i class="fab fa-twitter text-lg"></i>
            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/20 backdrop-blur-md hover:bg-pink-500 transition" aria-label="LinkedIn">
              <i class="fab fa-linkedin-in text-lg"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bottom Divider -->
    <div class="mt-16 h-1 bg-gradient-to-r from-pink-500 via-white/20 to-pink-500 rounded-full"></div>

    <!-- Copyright -->
    <div class="mt-6 text-center text-sm text-white/70" data-aos="fade-up" data-aos-delay="400">
      &copy; 2035 Torvic.AI — All Rights Reserved
    </div>
  </div>
</footer>




<style>
  /* Blobs */
  @keyframes blobMove1 {
    0% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(30px, -20px) scale(1.1); }
    100% { transform: translate(0, 0) scale(1); }
  }
  @keyframes blobMove2 {
    0% { transform: translate(0, 0) scale(1); }
    50% { transform: translate(-40px, 30px) scale(0.95); }
    100% { transform: translate(0, 0) scale(1); }
  }

  @keyframes pulseGlow {
    0%, 100% { box-shadow: 0 0 0px rgba(236, 72, 153, 0.3); }
    50% { box-shadow: 0 0 25px rgba(236, 72, 153, 0.7); }
  }
</style>
<script>
  AOS.init();
</script>
  
</body>
</html>
