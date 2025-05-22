<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Torvic.AI Header</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet"
  />
  <style>
    /* Logo size from screenshot */
    .header-logo {
      width: 36px;
      height: auto;
      margin-left: 4px;
    }
  </style>
  <style>
        .navbar-gradient {
            background: linear-gradient(135deg, #1278e6 0%, #0d5cb5 50%, #094a99 100%);
        }
        
        .logo-glow {
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
        }
        
        .nav-link {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: linear-gradient(90deg, #60a5fa, #ffffff);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-link:hover {
            transform: translateY(-2px);
            color: #e0f2fe;
        }
        
        .login-btn {
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.2));
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .login-btn:hover {
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.3));
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }
        
        .mobile-menu-slide {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        
        .mobile-nav-link {
            transition: all 0.3s ease;
        }
        
        .mobile-nav-link:hover {
            background: linear-gradient(45deg, #1278e6, #0d5cb5);
            color: white;
            transform: translateX(10px);
        }
        
        .brand-text {
            background: linear-gradient(45deg, #ffffff, #e0f2fe);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hamburger-line {
            transition: all 0.3s ease;
        }
        
        .hamburger:hover .hamburger-line {
            stroke: #e0f2fe;
        }
    </style>

</head>
<body>
 <!-- Enhanced Navbar -->
    <header class="sticky top-0 z-50 navbar-gradient shadow-lg">
        <div class="w-full flex justify-between items-center py-4 px-6">
            <!-- Enhanced Logo Section -->
            <div class="flex items-center ml-4">
                <div class="relative">
                    <img
                        src="{{ asset('logical-thinking.png') }}"
                        alt="Torvic.AI Logo"
                        class="w-10 h-10 logo-glow rounded-lg"
                    />
                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-white rounded-full animate-pulse"></div>
                </div>
                <span class="brand-text font-semibold tracking-wider text-2xl ml-3 font-mono">
                    Torvic.AI
                </span>
            </div>

            <!-- Enhanced Navigation Links -->
            <nav class="hidden md:flex items-center text-white">
                <!-- Navigation Links with modern styling -->
                <div class="flex space-x-8 mr-8">
                    <a href="/" class="nav-link text-lg font-medium py-2 px-1">
                        <i class="fas fa-home mr-2 text-sm"></i>Home
                    </a>
                    <a href="/about" class="nav-link text-lg font-medium py-2 px-1">
                        <i class="fas fa-info-circle mr-2 text-sm"></i>About
                    </a>
                    <a href="/blog" class="nav-link text-lg font-medium py-2 px-1">
                        <i class="fas fa-blog mr-2 text-sm"></i>Blog
                    </a>
                    <a href="/MathQuiz" class="nav-link text-lg font-medium py-2 px-1">
                        <i class="fas fa-calculator mr-2 text-sm"></i>Math Quiz
                    </a>
                </div>

                <!-- Enhanced Login Button -->
                <div class="ml-8 mr-4">
                    <a href="/login" class="login-btn flex items-center gap-2 px-6 py-3 rounded-full font-medium text-lg">
                        <i class="fas fa-user-circle text-lg"></i>
                        <span>Log In</span>
                        <i class="fas fa-arrow-right text-sm ml-1"></i>
                    </a>
                </div>
            </nav>

            <!-- Enhanced Mobile Toggle -->
            <div class="md:hidden flex items-center gap-4 text-white">
                <a href="/login" class="login-btn p-3 rounded-full">
                    <i class="fas fa-user-circle text-xl"></i>
                </a>
                <button onclick="toggleMenu()" class="hamburger focus:outline-none p-2 rounded-lg hover:bg-white/10 transition-colors">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path class="hamburger-line" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Subtle bottom border for depth -->
        <div class="h-px bg-gradient-to-r from-transparent via-white/20 to-transparent"></div>
    </header>

    <!-- Enhanced Slide-out Mobile Menu -->
    <div id="mobileMenu" class="fixed inset-0 z-50 mobile-menu-slide transform translate-x-full transition-transform duration-300 ease-in-out">
        <!-- Header with close button -->
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
            <div class="flex items-center">
                <img src="/api/placeholder/32/32" alt="Torvic.AI" class="w-8 h-8 rounded-lg">
                <span class="text-gray-800 font-semibold text-lg ml-2">Torvic.AI</span>
            </div>
            <button onclick="toggleMenu()" class="text-gray-600 hover:text-gray-800 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
        <!-- Enhanced Mobile Navigation -->
        <nav class="flex flex-col p-6 space-y-2">
            <a href="/" class="mobile-nav-link flex items-center gap-3 text-gray-700 font-medium text-lg py-4 px-4 rounded-xl">
                <i class="fas fa-home text-blue-600 w-5"></i>
                <span>Home</span>
            </a>
            <a href="/about" class="mobile-nav-link flex items-center gap-3 text-gray-700 font-medium text-lg py-4 px-4 rounded-xl">
                <i class="fas fa-info-circle text-blue-600 w-5"></i>
                <span>About</span>
            </a>
            <a href="/blog" class="mobile-nav-link flex items-center gap-3 text-gray-700 font-medium text-lg py-4 px-4 rounded-xl">
                <i class="fas fa-blog text-blue-600 w-5"></i>
                <span>Blog</span>
            </a>
            <a href="/MathQuiz" class="mobile-nav-link flex items-center gap-3 text-gray-700 font-medium text-lg py-4 px-4 rounded-xl">
                <i class="fas fa-calculator text-blue-600 w-5"></i>
                <span>Math Quiz for Adults</span>
            </a>
        </nav>
        
        <!-- Mobile Login Section -->
        <div class="absolute bottom-6 left-6 right-6">
            <a href="/login" class="flex items-center justify-center gap-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-medium text-lg py-4 px-6 rounded-xl shadow-lg">
                <i class="fas fa-user-circle"></i>
                <span>Log In</span>
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>
    </div>

  <script>
    function toggleMenu() {
      const menu = document.getElementById("mobileMenu");
      menu.classList.toggle("translate-x-0");
      menu.classList.toggle("translate-x-full");
    }
  </script>
</body>
</html>
