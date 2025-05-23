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
    <!-- Dynamic Floating Elements -->
    <div class="absolute top-10 left-10 w-32 h-32 bg-white/5 rounded-full blur-2xl animate-[float_20s_ease-in-out_infinite]"></div>
    <div class="absolute top-32 right-20 w-24 h-24 bg-cyan-300/10 rounded-lg rotate-45 animate-[float2_15s_ease-in-out_infinite_1s]"></div>
    <div class="absolute bottom-20 left-1/4 w-60 h-60 bg-purple-400/5 rounded-full blur-3xl animate-[float3_25s_ease-in-out_infinite_2s]"></div>
    <div class="absolute bottom-40 right-1/3 w-40 h-40 bg-blue-300/10 rotate-12 rounded-3xl animate-[float4_18s_ease-in-out_infinite_3s]"></div>
    
    <!-- Radial Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
    
    <!-- Honeycomb Pattern -->
    <div class="absolute inset-0 opacity-5">
      <div class="w-full h-full bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="white" fill-opacity="1"%3E%3Cpath d="M30 0l30 17.32v34.64L30 60 0 51.96V17.32L30 0zm0 10l-20 11.55v23.1L30 50l20-5.35V21.55L30 10z" fill="none" stroke="white"/%3E%3C/g%3E%3C/svg%3E')]"></div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="relative z-10 pt-32 pb-16 px-6">
    <div class="max-w-7xl mx-auto">
      
      <!-- Hero Section -->
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">
        <!-- Left: Enhanced Hero Text with 3D Effect -->
        <div class="space-y-8 max-w-2xl">
          <div class="space-y-4">
            <div class="inline-flex items-center px-3 py-1.5 rounded-full bg-gradient-to-r from-white/20 to-white/5 backdrop-blur-md border border-white/20 text-sm font-medium shadow-lg transform hover:scale-105 transition-all duration-300">
              <span class="flex">
                <span class="animate-ping absolute h-2.5 w-2.5 rounded-full bg-green-400 opacity-75"></span>
                <span class="relative rounded-full h-2.5 w-2.5 bg-green-500"></span>
              </span>
              <span class="ml-2">AI-Powered Education</span>
            </div>
            <h2 class="text-5xl lg:text-6xl font-black leading-tight">
              <span class="inline-block transform hover:translate-x-1 hover:-translate-y-1 transition-transform duration-300 ease-out">
                Build the Future of Learning with 
              </span>
              <span class="block mt-1 text-transparent bg-gradient-to-r from-cyan-300 via-white to-purple-300 bg-clip-text drop-shadow-lg transform hover:scale-[1.02] transition-all duration-300">
                Torvic.AI
              </span>
            </h2>
          </div>
          <p class="text-xl text-blue-100 leading-relaxed tracking-wide">
            We're reshaping math education using AI — precise, personal, powerful. 
            <span class="font-semibold">Ready to join the revolution?</span>
          </p>
          
          <!-- Interactive CTA Buttons -->
          <div class="flex flex-col sm:flex-row gap-4">
            <a href="#" class="group relative inline-flex items-center justify-center px-8 py-4 bg-white overflow-hidden rounded-2xl text-lg font-bold transition-all duration-300">
              <!-- Button Gradient Background -->
              <span class="absolute inset-0 bg-gradient-to-r from-cyan-200 to-blue-100 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></span>
              
              <!-- Button Shadow & Glowing Effect -->
              <span class="absolute inset-0 rounded-2xl group-hover:shadow-[0_0_20px_rgba(56,189,248,0.5)] transition-shadow duration-500"></span>
              
              <!-- Button Text with Animation -->
              <span class="relative flex items-center text-[#1f88e4] group-hover:text-blue-700 transition-colors duration-300">
                <span>Start Free Trial</span>
                <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                </svg>
              </span>
            </a>
            
            <a href="#" class="group relative inline-flex items-center justify-center px-8 py-4 border-2 border-white/30 text-white rounded-2xl text-lg font-bold overflow-hidden transition-all duration-300">
              <!-- Hover Backdrop -->
              <span class="absolute inset-0 bg-white/10 backdrop-blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
              
              <!-- Button Text with Icon Animation -->
              <span class="relative flex items-center">
                <svg class="w-5 h-5 mr-2 transform group-hover:rotate-[360deg] transition-transform duration-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                Watch Demo
              </span>
            </a>
          </div>
        </div>

        <!-- Right: Enhanced Interactive Navigation Grid -->
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-8">
          @foreach([
            [
              'title' => 'Explore', 
              'icon' => 'compass', 
              'links' => ['Home', 'Features', 'Pricing', 'Integrations']
            ],
            [
              'title' => 'Company', 
              'icon' => 'building', 
              'links' => ['About', 'Blog', 'Careers', 'Press Kit']
            ],
            [
              'title' => 'Support', 
              'icon' => 'life-buoy', 
              'links' => ['Help Center', 'Contact', 'Privacy Policy', 'Terms of Service']
            ],
          ] as $section)
          <div class="group perspective-1000">
            <div class="transform transition-transform duration-500 group-hover:scale-105">
              <!-- Section Header with Icon -->
              <div class="flex items-center mb-6 space-x-2">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-white/30 to-white/5 flex items-center justify-center backdrop-blur-sm">
                  <i class="fas fa-{{ $section['icon'] }} text-sm"></i>
                </div>
                <h4 class="font-black text-white text-sm uppercase tracking-[0.2em] relative">
                  {{ $section['title'] }}
                  <div class="absolute -bottom-2 left-0 w-8 h-0.5 bg-gradient-to-r from-cyan-300 to-purple-300 group-hover:w-full transition-all duration-500"></div>
                </h4>
              </div>
              
              <!-- Interactive Links -->
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

      <!-- Newsletter Subscription with Floating Card Design -->
      <div class="mb-16">
        <div class="max-w-4xl mx-auto">
          <div class="relative overflow-hidden rounded-3xl transform hover:-translate-y-1 transition-all duration-500">
            <!-- Card Gradient Background with Animated Border -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-700 via-blue-600 to-blue-800 rounded-3xl"></div>
            
            <!-- Animated Glowing Border -->
            <div class="absolute inset-0 rounded-3xl bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 opacity-0 hover:opacity-100 transition-opacity duration-1000"></div>
            
            <!-- Inner Background with Blur -->
            <div class="absolute inset-[1px] bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 rounded-[calc(1.5rem-1px)] backdrop-blur-xl"></div>
            
            <!-- Card Content -->
            <div class="relative p-10 lg:p-12 text-center">
              <div class="inline-flex items-center px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 text-sm font-medium mb-6">
                <i class="fas fa-envelope-open-text mr-2"></i>
                Stay Updated
              </div>
              
              <h3 class="text-3xl font-bold mb-4 text-white">Join Our Community</h3>
              <p class="text-blue-100 mb-8 text-lg max-w-lg mx-auto">
                Get the latest updates on AI education, new features, and exclusive content delivered to your inbox.
              </p>
              
              <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <div class="relative flex-1">
                  <input type="email" placeholder="Enter your email" 
                         class="w-full px-6 py-4 bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-transparent transition-all duration-300">
                  <div class="absolute inset-0 rounded-xl opacity-0 group-focus-within:opacity-100 shadow-[0_0_15px_rgba(56,189,248,0.5)] pointer-events-none transition-opacity duration-500"></div>
                </div>
                <button class="relative px-8 py-4 bg-gradient-to-r from-cyan-400 to-blue-500 hover:from-cyan-500 hover:to-blue-600 text-white font-bold rounded-xl overflow-hidden group transition-all duration-300 hover:shadow-[0_0_20px_rgba(56,189,248,0.6)]">
                  <span class="absolute inset-0 bg-gradient-to-r from-cyan-200/20 to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-700"></span>
                  <span class="relative flex items-center">
                    Subscribe
                    <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-300"></i>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Decorative Divider with Pulsing Effect -->
      <div class="relative mb-12">
        <div class="h-px bg-gradient-to-r from-transparent via-white/30 to-transparent w-full"></div>
        <div class="absolute inset-0 flex justify-center">
          <div class="w-14 h-14 bg-gradient-to-br from-cyan-400 to-purple-400 rounded-full flex items-center justify-center -mt-7 shadow-[0_0_15px_rgba(56,189,248,0.5)]">
            <div class="absolute w-14 h-14 rounded-full bg-cyan-400 animate-ping opacity-20"></div>
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
          </div>
        </div>
      </div>

      <!-- Bottom Bar with Interactive Elements -->
      <div class="flex flex-col lg:flex-row justify-between items-center gap-8">
        <!-- Left: Copyright & Links with Hover Effects -->
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

        <!-- Right: Enhanced Interactive Social Links -->
        <div class="flex gap-4">
          @foreach([
            ['icon' => 'instagram', 'gradient' => 'from-pink-500 to-purple-500', 'label' => 'Follow on Instagram'],
            ['icon' => 'facebook', 'gradient' => 'from-blue-600 to-blue-700', 'label' => 'Like on Facebook'],
            ['icon' => 'twitter', 'gradient' => 'from-cyan-400 to-blue-500', 'label' => 'Follow on Twitter'],
            ['icon' => 'linkedin', 'gradient' => 'from-blue-500 to-blue-700', 'label' => 'Connect on LinkedIn'],
          ] as $social)
          <a href="#" class="group relative w-12 h-12 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 flex items-center justify-center overflow-hidden" aria-label="{{ $social['label'] }}">
            <!-- Hover Background Effect -->
            <div class="absolute inset-0 bg-gradient-to-br {{ $social['gradient'] }} opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            
            <!-- Icon -->
            <i class="fab fa-{{ $social['icon'] }} text-lg relative z-10 text-blue-100 group-hover:text-white transition-colors duration-300"></i>
            
            <!-- Hover Glow Effect -->
            <div class="absolute inset-0 opacity-0 group-hover:opacity-100 rounded-xl shadow-[0_0_15px_rgba(255,255,255,0.3)] transition-opacity duration-300"></div>
          </a>
          @endforeach
        </div>
      </div>
      
      <!-- Stats Bar (New Addition) -->
      <div class="mt-16 pt-10 border-t border-white/10">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
       
         
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Glow Effect -->
  <div class="absolute bottom-0 inset-x-0 h-40 bg-gradient-to-t from-blue-900/30 to-transparent pointer-events-none"></div>
  
  <!-- Floating Particles Effect -->
  <div id="particles-js" class="absolute inset-0 pointer-events-none"></div>
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