<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
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



<footer class="relative bg-gradient-to-br from-[#1f88e4] via-[#2563eb] to-[#1d4ed8] text-white overflow-hidden">
  <!-- Interactive Particles Background -->
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute top-10 left-10 w-32 h-32 bg-white/5 rounded-full blur-2xl animate-[float_20s_ease-in-out_infinite]"></div>
    <div class="absolute top-32 right-20 w-24 h-24 bg-cyan-300/10 rounded-lg rotate-45 animate-[float2_15s_ease-in-out_infinite_1s]"></div>
    <div class="absolute bottom-20 left-1/4 w-60 h-60 bg-purple-400/5 rounded-full blur-3xl animate-[float3_25s_ease-in-out_infinite_2s]"></div>
    <div class="absolute bottom-40 right-1/3 w-40 h-40 bg-blue-300/10 rotate-12 rounded-3xl animate-[float4_18s_ease-in-out_infinite_3s]"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
    <div class="absolute inset-0 opacity-5">
      <div class="w-full h-full bg-[url('data:image/svg+xml,%3Csvg width="60" height="60"...')]"></div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="relative z-10 pt-16 pb-8 px-6">
    <div class="max-w-7xl mx-auto">

      <!-- Hero Section -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center mb-12">
        <div class="space-y-6 max-w-2xl">
          <div class="space-y-3">
            <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-gradient-to-r from-white/20 to-white/5 backdrop-blur-md border border-white/20 text-sm font-medium shadow-lg transform hover:scale-105 transition-all duration-300">
              <span class="flex">
                <span class="animate-ping absolute h-2.5 w-2.5 rounded-full bg-green-400 opacity-75"></span>
                <span class="relative rounded-full h-2.5 w-2.5 bg-green-500"></span>
              </span>
              <span class="ml-2">AI-Powered Education</span>
            </div>
            <h2 class="text-4xl lg:text-5xl font-black leading-tight">
              <span class="inline-block transform hover:translate-x-1 hover:-translate-y-1 transition-transform duration-300 ease-out">
                Build the Future of <br> Learning with 
              </span>
              <span class="block mt-1 text-transparent bg-gradient-to-r from-cyan-300 via-white to-purple-300 bg-clip-text drop-shadow-lg transform hover:scale-[1.02] transition-all duration-300">
                Torvic.AI
              </span>
            </h2>
          </div>
          <p class="text-lg text-blue-100 leading-relaxed tracking-wide">
            We're reshaping math education using AI — precise, personal, powerful. 
            <span class="font-semibold">Ready to join the revolution?</span>
          </p>
        </div>

        <!-- Navigation Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach([
            ['title' => 'Explore', 'icon' => 'compass', 'links' => ['Home', 'Features', 'Pricing', 'Integrations']],
            ['title' => 'Company', 'icon' => 'building', 'links' => ['About', 'Blog', 'Careers', 'Press Kit']],
            ['title' => 'Support', 'icon' => 'life-buoy', 'links' => ['Help Center', 'Contact', 'Privacy Policy', 'Terms of Service']],
          ] as $section)
          <div class="group perspective-1000">
            <div class="transform transition-transform duration-500 group-hover:scale-105">
              <div class="flex items-center mb-6 space-x-2">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-white/30 to-white/5 flex items-center justify-center backdrop-blur-sm">
                  <i class="fas fa-{{ $section['icon'] }} text-sm"></i>
                </div>
                <h4 class="font-black text-white text-sm uppercase tracking-[0.2em] relative">
                  {{ $section['title'] }}
                  <div class="absolute -bottom-2 left-0 w-8 h-0.5 bg-gradient-to-r from-cyan-300 to-purple-300 group-hover:w-full transition-all duration-500"></div>
                </h4>
              </div>
              <ul class="space-y-3">
                @foreach($section['links'] as $link)
                <li>
                  <a href="#" class="group/link flex items-center text-blue-100 hover:text-white transition-all duration-300">
                    <span class="w-0 h-0.5 bg-gradient-to-r from-cyan-300 to-transparent group-hover/link:w-3 mr-0 group-hover/link:mr-2 transition-all duration-300"></span>
                    {{ $link }}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- Bottom Bar -->
      <div class="flex flex-col lg:flex-row justify-between items-center gap-8">
        <div class="flex flex-col sm:flex-row items-center gap-6 text-blue-100">
          <p class="text-sm">© {{ date('Y') }} Torvic.AI. All rights reserved.</p>
          <div class="flex gap-6 text-sm">
            @foreach(['Privacy', 'Terms', 'Cookies'] as $link)
            <a href="#" class="relative group">
              <span class="text-blue-200 group-hover:text-white transition-colors duration-300">{{ $link }}</span>
              <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-cyan-300 group-hover:w-full transition-all duration-300"></span>
            </a>
            @endforeach
          </div>
        </div>

        <div class="flex gap-4">
          @foreach([
            ['icon' => 'instagram', 'gradient' => 'from-pink-500 to-purple-500', 'label' => 'Follow on Instagram'],
            ['icon' => 'facebook', 'gradient' => 'from-blue-600 to-blue-700', 'label' => 'Like on Facebook'],
            ['icon' => 'twitter', 'gradient' => 'from-cyan-400 to-blue-500', 'label' => 'Follow on Twitter'],
            ['icon' => 'linkedin', 'gradient' => 'from-blue-500 to-blue-700', 'label' => 'Connect on LinkedIn'],
          ] as $social)
          <a href="#" class="group relative w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center overflow-hidden" aria-label="{{ $social['label'] }}">
            <div class="absolute inset-0 bg-gradient-to-br {{ $social['gradient'] }} opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            <i class="fab fa-{{ $social['icon'] }} text-lg relative z-10 text-blue-100 group-hover:text-white transition-colors duration-300"></i>
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 rounded-xl shadow-[0_0_15px_rgba(255,255,255,0.3)] transition-opacity duration-300"></div>
          </a>
          @endforeach
        </div>
      </div>

      <!-- Optional Stats or Additional Row -->
      <div class="mt-8 pt-6 border-t border-white/10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center text-sm text-blue-100">
          <!-- Optional stats or items here -->
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Required Font Awesome for social icons -->
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
  /* Custom Animation Keyframes */
  @keyframes float {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(5deg); }
  }
  
  @keyframes float2 {
    0%, 100% { transform: translateY(0) rotate(45deg); }
    50% { transform: translateY(20px) rotate(30deg); }
  }
  
  @keyframes float3 {
    0%, 100% { transform: translateX(0) translateY(0); }
    25% { transform: translateX(10px) translateY(-10px); }
    50% { transform: translateX(15px) translateY(5px); }
    75% { transform: translateX(-5px) translateY(10px); }
  }
  
  @keyframes float4 {
    0%, 100% { transform: translateY(0) rotate(12deg); }
    50% { transform: translateY(-15px) rotate(22deg); }
  }
  
  .perspective-1000 {
    perspective: 1000px;
  }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize particles.js for floating effect
    if (typeof particlesJS !== 'undefined') {
      particlesJS("particles-js", {
        "particles": {
          "number": { "value": 15, "density": { "enable": true, "value_area": 800 } },
          "color": { "value": "#ffffff" },
          "shape": {
            "type": "circle",
            "stroke": { "width": 0, "color": "#000000" },
          },
          "opacity": {
            "value": 0.1,
            "random": true,
            "anim": { "enable": true, "speed": 1, "opacity_min": 0.05, "sync": false }
          },
          "size": {
            "value": 5,
            "random": true,
            "anim": { "enable": true, "speed": 2, "size_min": 1, "sync": false }
          },
          "line_linked": { "enable": false },
          "move": {
            "enable": true, "speed": 0.5, "direction": "none",
            "random": true, "straight": false, "out_mode": "out",
            "bounce": false
          }
        },
        "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": false }, "onclick": { "enable": false }, "resize": true } },
        "retina_detect": true
      });
    }
  });
</script>
@endpush








</body>
</html>