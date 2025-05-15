<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
  .Header-logo{
    width: 50px;
    height: 50px;
    margin-left: 10px;
  }
</style>
<body>
     <!-- Navbar -->
<header class="bg-blue-500 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

    <!-- Logo -->
    <div class="flex items-center space-x-2">
     <img class = "Header-logo" src="{{ asset('logical-thinking.png') }}" alt="Parent and child" class="w-full h-64 object-cover" />
      <span class="text-xl font-bold text-white">Torvic.AI</span>
    </div>

    <!-- Desktop Navigation -->
    <nav class="hidden md:flex items-center space-x-8 text-sm text-white">
      <a href="/" class="hover:underline">Home</a>
      <a href="/about" class="hover:underline">About</a>
      <a href="/blog" class="hover:underline">Blog</a>
      <a href="/MathQuiz" class="hover:underline">Math Quiz for Adults</a>
      <a href="/login" class="flex items-center gap-2 hover:underline">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-6 2.69-6 6h2c0-2.21 1.79-4 4-4s4 1.79 4 4h2c0-3.31-2.69-6-6-6z"/>
        </svg>
        Log In
      </a>
    </nav>

    <!-- Mobile Toggle -->
    <div class="md:hidden flex items-center gap-4 text-white">
      <a href="/login">
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-6 2.69-6 6h2c0-2.21 1.79-4 4-4s4 1.79 4 4h2c0-3.31-2.69-6-6-6z"/>
        </svg>
      </a>
      <button onclick="toggleMenu()" class="focus:outline-none">
        <svg class="w-8 h-6" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>
</header>

<!-- Slide-out Mobile Menu -->
<div id="mobileMenu" class="fixed inset-0 z-50 bg-white transform translate-x-full transition-transform duration-300 ease-in-out">
  <div class="flex justify-end p-6">
    <button onclick="toggleMenu()" class="text-black">
      <svg class="h-6 w-6" fill="none" stroke="black" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
  </div>
  <nav class="flex flex-col items-center justify-center space-y-6 text-lg font-medium text-black">
    <a href="/" class="text-blue-600">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/MathQuiz">Math Quiz for Adults</a>
  </nav>
</div>
</body>

<script>
  function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('translate-x-0');
    menu.classList.toggle('translate-x-full');
  }
</script>
</html>