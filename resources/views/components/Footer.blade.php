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
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <title>Footer Example</title>
</head>
<body>

<!-- Footer Section -->
<footer class="bg-[#1f81e6] text-white py-16 px-6">
  <div class="max-w-7xl mx-auto">

    <!-- Top Section: CTA -->
    <div class="flex flex-col md:flex-row justify-between items-center mb-10">
      <h2 class="text-[24px] md:text-[28px] font-extrabold uppercase tracking-tight mb-6 md:mb-0 leading-tight">
        DISCOVER THE FUTURE OF MATH
      </h2>
      <a href="#" class="bg-pink-500 hover:bg-pink-600 text-white font-medium py-3 px-8 rounded-full transition duration-300 ease-in-out whitespace-nowrap">
        Start Free Trial
      </a>
    </div>

    <!-- Underline -->
    <hr class="border-white border-opacity-30 mb-2" />

    <!-- Middle Section -->
    <div class="flex flex-col md:flex-row justify-between items-center gap-6 text-sm">

      <!-- Left side: Email and links close horizontally -->
      <div class="flex items-start gap-[100px] md:gap-[200px]">

        <!-- Email -->
        <div>
          <a href="mailto:info@torvic.ai" class="underline hover:text-gray-100 whitespace-nowrap">
            info@torvic.ai
          </a>
        </div>

        <!-- Links vertical stack -->
        <div class="flex flex-col space-y-1 text-left">
          <a href="#" class="hover:underline">Home</a>
          <a href="#" class="hover:underline">About</a>
          <a href="#" class="hover:underline">Contact</a>
        </div>

      </div>

      <!-- Social Icons far right -->
      <div class="ml-auto flex items-center gap-5 text-xl">
        <a href="#" aria-label="Instagram" class="hover:text-gray-200">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" aria-label="Facebook" class="hover:text-gray-200">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" aria-label="Twitter" class="hover:text-gray-200">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" aria-label="LinkedIn" class="hover:text-gray-200">
          <i class="fab fa-linkedin-in font-bold"></i>
        </a>
      </div>
    </div>

    <!-- Bottom Section: Copyright -->
    <div class="mt-10 text-right text-sm opacity-80">
      &copy; 2035 Torvic.AI
    </div>
  </div>
</footer>

</body>
</html>
