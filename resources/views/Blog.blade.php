<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <x-header />

    <section class="bg-[#f5f9ff] py-16">
  <div class="max-w-7xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

      <!-- Unique Blog Card -->
      <div
        class="relative bg-white rounded-tl-[40px] rounded-br-[40px] shadow-xl hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-4 cursor-pointer flex flex-col h-full overflow-hidden"
      >
        <!-- Image with diagonal clip -->
        <div
          class="relative h-64 overflow-hidden"
          style="clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);"
        >
          <img
            src="{{ asset('slide1.jpg') }}"
            alt="Parent and child"
            class="w-full h-full object-cover transition-transform duration-700 hover:scale-110"
          />
          <!-- Gradient overlay -->
          <div
            class="absolute inset-0 bg-gradient-to-tr from-blue-700 via-transparent to-indigo-700 opacity-50"
          ></div>

          <!-- Date badge -->
          <div
            class="absolute top-4 left-4 bg-gradient-to-br from-indigo-600 to-blue-500 px-4 py-1 rounded-full text-white font-semibold text-xs drop-shadow-lg"
            style="backdrop-filter: blur(8px);"
          >
            Nov 27, 2024 • 1 min read
          </div>
        </div>

        <!-- Text content with layered shadow -->
        <div class="p-6 flex flex-col flex-grow relative z-10 bg-white">
          <h3
            class="text-2xl font-extrabold text-indigo-900 mb-3 leading-tight drop-shadow-md"
          >
            Enhancing Student Experiences: AI-Powered Math Education Platform
          </h3>
          <p class="text-gray-600 mb-6 flex-grow leading-relaxed">
            With the rise of technology in education, AI-powered platforms have
            become increasingly popular...
          </p>

          <!-- Footer with icons -->
          <div
            class="flex items-center justify-between text-gray-600 text-sm select-none space-x-6"
          >
            <div class="flex gap-6">
              <button
                type="button"
                aria-label="Views"
                class="flex items-center gap-2 hover:text-indigo-600 transition"
                title="Views"
              >
                <i class="fas fa-eye"></i> 30
              </button>
              <button
                type="button"
                aria-label="Comments"
                class="flex items-center gap-2 hover:text-indigo-600 transition"
                title="Comments"
              >
                <i class="fas fa-comment"></i> 0
              </button>
            </div>
            <button
              type="button"
              aria-label="Favorite"
              class="text-gray-400 hover:text-red-600 transition"
              title="Add to favorites"
            >
              <i class="far fa-heart"></i>
            </button>
          </div>
        </div>

        <!-- Decorative accent shape -->
        <div
          class="absolute bottom-0 right-0 w-16 h-16 bg-indigo-600 rounded-tl-[50px] pointer-events-none"
          style="clip-path: polygon(0 0, 100% 0, 100% 100%);"
        ></div>
      </div>

      <!-- Repeat for other two cards with different gradient overlays -->

      <div
        class="relative bg-white rounded-tl-[40px] rounded-br-[40px] shadow-xl hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-4 cursor-pointer flex flex-col h-full overflow-hidden"
      >
        <div
          class="relative h-64 overflow-hidden"
          style="clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);"
        >
          <img
            src="{{ asset('slide2.jpg') }}"
            alt="AI Learning"
            class="w-full h-full object-cover transition-transform duration-700 hover:scale-110"
          />
          <div
            class="absolute inset-0 bg-gradient-to-tr from-purple-700 via-transparent to-pink-700 opacity-50"
          ></div>
          <div
            class="absolute top-4 left-4 bg-gradient-to-br from-pink-600 to-purple-500 px-4 py-1 rounded-full text-white font-semibold text-xs drop-shadow-lg"
            style="backdrop-filter: blur(8px);"
          >
            Nov 21, 2024 • 1 min read
          </div>
        </div>

        <div class="p-6 flex flex-col flex-grow relative z-10 bg-white">
          <h3
            class="text-2xl font-extrabold text-purple-900 mb-3 leading-tight drop-shadow-md"
          >
            Optimize Learning with Personalized AI Math Education Platform
          </h3>
          <p class="text-gray-600 mb-6 flex-grow leading-relaxed">
            In today’s digital age, personalized education platforms are
            revolutionizing the way students...
          </p>

          <div
            class="flex items-center justify-between text-gray-600 text-sm select-none space-x-6"
          >
            <div class="flex gap-6">
              <button
                type="button"
                aria-label="Views"
                class="flex items-center gap-2 hover:text-purple-600 transition"
                title="Views"
              >
                <i class="fas fa-eye"></i> 5
              </button>
              <button
                type="button"
                aria-label="Comments"
                class="flex items-center gap-2 hover:text-purple-600 transition"
                title="Comments"
              >
                <i class="fas fa-comment"></i> 0
              </button>
            </div>
            <button
              type="button"
              aria-label="Favorite"
              class="text-gray-400 hover:text-red-600 transition"
              title="Add to favorites"
            >
              <i class="far fa-heart"></i>
            </button>
          </div>
        </div>

        <div
          class="absolute bottom-0 right-0 w-16 h-16 bg-purple-600 rounded-tl-[50px] pointer-events-none"
          style="clip-path: polygon(0 0, 100% 0, 100% 100%);"
        ></div>
      </div>

      <div
        class="relative bg-white rounded-tl-[40px] rounded-br-[40px] shadow-xl hover:shadow-2xl transition-shadow duration-500 transform hover:-translate-y-4 cursor-pointer flex flex-col h-full overflow-hidden"
      >
        <div
          class="relative h-64 overflow-hidden"
          style="clip-path: polygon(0 0, 100% 0, 100% 85%, 0% 100%);"
        >
          <img
            src="{{ asset('slide3.jpg') }}"
            alt="Interactive Math Tools"
            class="w-full h-full object-cover transition-transform duration-700 hover:scale-110"
          />
          <div
            class="absolute inset-0 bg-gradient-to-tr from-teal-700 via-transparent to-cyan-700 opacity-50"
          ></div>
          <div
            class="absolute top-4 left-4 bg-gradient-to-br from-cyan-600 to-teal-500 px-4 py-1 rounded-full text-white font-semibold text-xs drop-shadow-lg"
            style="backdrop-filter: blur(8px);"
          >
            Nov 21, 2024 • 1 min read
          </div>
        </div>

        <div class="p-6 flex flex-col flex-grow relative z-10 bg-white">
          <h3
            class="text-2xl font-extrabold text-teal-900 mb-3 leading-tight drop-shadow-md"
          >
            Engage Grade School Students with Interactive Math Learning Tools
          </h3>
          <p class="text-gray-600 mb-6 flex-grow leading-relaxed">
            Engage Grade School Students with Interactive Math Learning Tools. In
            the digital age, traditional methods...
          </p>

          <div
            class="flex items-center justify-between text-gray-600 text-sm select-none space-x-6"
          >
            <div class="flex gap-6">
              <button
                type="button"
                aria-label="Views"
                class="flex items-center gap-2 hover:text-teal-600 transition"
                title="Views"
              >
                <i class="fas fa-eye"></i> 5
              </button>
              <button
                type="button"
                aria-label="Comments"
                class="flex items-center gap-2 hover:text-teal-600 transition"
                title="Comments"
              >
                <i class="fas fa-comment"></i> 0
              </button>
            </div>
            <button
              type="button"
              aria-label="Favorite"
              class="text-gray-400 hover:text-red-600 transition"
              title="Add to favorites"
            >
              <i class="far fa-heart"></i>
            </button>
          </div>
        </div>

        <div
          class="absolute bottom-0 right-0 w-16 h-16 bg-teal-600 rounded-tl-[50px] pointer-events-none"
          style="clip-path: polygon(0 0, 100% 0, 100% 100%);"
        ></div>
      </div>

    </div>
  </div>
</section>



<x-footer/>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>