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
</head>
<body>
  <!-- Navbar -->
<header class="sticky top-0 z-50" style="background-color: #1278e6;">
  <div class="w-full flex justify-between items-center py-3 px-4">
    <!-- Logo on left with some margin-left -->
    <div class="flex items-center ml-8">
      <img
        src="{{ asset('logical-thinking.png') }}"
        alt="Torvic.AI Logo"
        class="header-logo"
        style="margin-left: 0;"
      />
      <span
        class="text-white font-light tracking-wider text-xl ml-1"
        style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;"
        >Torvic.AI</span
      >
    </div>

    <!-- Navigation links and login with gap -->
    <nav class="hidden md:flex items-center text-white text-sm font-normal">
      <!-- First group of nav links -->
      <div class="flex space-x-6 mr-12">
        <a href="/" class="hover:underline text-lg">Home</a>
        <a href="/about" class="hover:underline text-lg">About</a>
        <a href="/blog" class="hover:underline text-lg">Blog</a>
        <a href="/MathQuiz" class="hover:underline text-lg">Math Quiz for Adults</a>
      </div>

      <!-- Big gap between nav links and login -->
      <div class="ml-12 mr-4 text-xl">
        <a href="/login" class="flex items-center gap-1 hover:underline font-normal">
          <i class="fas fa-user-circle text-lg"></i>
          Log In
        </a>
      </div>
    </nav>

    <!-- Mobile Toggle -->
    <div class="md:hidden flex items-center gap-4 text-white">
      <a href="/login">
        <i class="fas fa-user-circle text-xl"></i>
      </a>
      <button onclick="toggleMenu()" class="focus:outline-none">
        <svg
          class="w-8 h-6"
          fill="none"
          stroke="white"
          stroke-width="2"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M4 6h16M4 12h16M4 18h16"
          ></path>
        </svg>
      </button>
    </div>
  </div>
</header>



  <!-- Slide-out Mobile Menu -->
  <div
    id="mobileMenu"
    class="fixed inset-0 z-50 bg-white transform translate-x-full transition-transform duration-300 ease-in-out"
  >
    <div class="flex justify-end p-6">
      <button onclick="toggleMenu()" class="text-black">
        <svg
          class="h-6 w-6"
          fill="none"
          stroke="black"
          stroke-width="2"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 18L18 6M6 6l12 12"
          ></path>
        </svg>
      </button>
    </div>
    <nav
      class="flex flex-col items-center justify-center space-y-6 text-lg font-medium text-black"
    >
      <a href="/" class="text-blue-600">Home</a>
      <a href="/about">About</a>
      <a href="/blog">Blog</a>
      <a href="/MathQuiz">Math Quiz for Adults</a>
    </nav>
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
