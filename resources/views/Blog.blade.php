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
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Blog Card 1 -->
      <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col h-full">
        <img src="{{ asset('slide1.jpg') }}" alt="Parent and child" class="w-full h-64 object-cover" />
        <div class="bg-blue-500 text-white p-6 flex flex-col flex-grow">
          <p class="text-sm mb-2">Nov 27, 2024 • 1 min read</p>
          <h3 class="text-xl font-bold leading-snug mb-2">Enhancing Student Experiences: AI-Powered Math Education Platform</h3>
          <p class="text-sm mb-6 leading-relaxed flex-grow">With the rise of technology in education, AI-powered platforms have become increasingly popular...</p>
          <div class="flex items-center justify-between border-t border-blue-300 pt-4 text-sm">
            <div class="flex gap-4">
              <span class="flex items-center gap-1"><i class="fas fa-eye"></i> 30</span>
              <span class="flex items-center gap-1"><i class="fas fa-comment"></i> 0</span>
            </div>
            <i class="far fa-heart"></i>
          </div>
        </div>
      </div>

      <!-- Blog Card 2 -->
      <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col h-full">
        <img src="{{ asset('slide2.jpg') }}" alt="AI Learning" class="w-full h-64 object-cover" />
        <div class="bg-blue-500 text-white p-6 flex flex-col flex-grow">
          <p class="text-sm mb-2">Nov 21, 2024 • 1 min read</p>
          <h3 class="text-xl font-bold leading-snug mb-2">Optimize Learning with Personalized AI Math Education Platform</h3>
          <p class="text-sm mb-6 leading-relaxed flex-grow">In today’s digital age, personalized education platforms are revolutionizing the way students...</p>
          <div class="flex items-center justify-between border-t border-blue-300 pt-4 text-sm">
            <div class="flex gap-4">
              <span class="flex items-center gap-1"><i class="fas fa-eye"></i> 5</span>
              <span class="flex items-center gap-1"><i class="fas fa-comment"></i> 0</span>
            </div>
            <i class="far fa-heart"></i>
          </div>
        </div>
      </div>

      <!-- Blog Card 3 -->
      <div class="bg-white rounded-lg overflow-hidden shadow-md flex flex-col h-full">
        <img src="{{ asset('slide3.jpg') }}" alt="Interactive Math Tools" class="w-full h-64 object-cover" />
        <div class="bg-blue-500 text-white p-6 flex flex-col flex-grow">
          <p class="text-sm mb-2">Nov 21, 2024 • 1 min read</p>
          <h3 class="text-xl font-bold leading-snug mb-2">Engage Grade School Students with Interactive Math Learning Tools</h3>
          <p class="text-sm mb-6 leading-relaxed flex-grow">Engage Grade School Students with Interactive Math Learning Tools. In the digital age, traditional methods...</p>
          <div class="flex items-center justify-between border-t border-blue-300 pt-4 text-sm">
            <div class="flex gap-4">
              <span class="flex items-center gap-1"><i class="fas fa-eye"></i> 5</span>
              <span class="flex items-center gap-1"><i class="fas fa-comment"></i> 0</span>
            </div>
            <i class="far fa-heart"></i>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<x-footer/>
</body>
<script src="https://cdn.tailwindcss.com"></script>
</html>