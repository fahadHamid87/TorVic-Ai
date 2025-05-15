<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Torvic.AI - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
  .Header-logo{
    width: 50px;
    height: 50px;
    margin-left: 10px;
  }
</style>
<body class="min-h-screen bg-blue-600 flex flex-col items-center justify-center px-4 py-12">

  <!-- Header component inside body -->
  <x-Header/>

  <!-- Main Login Card -->
  <div class="max-w-md w-full bg-white rounded-2xl shadow-lg p-8 space-y-6 mt-8 mb-16">
    <!-- Logo & Title -->
    <div class="flex flex-col items-center">
     <img  src="{{ asset('logical-thinking.png') }}" alt="AI Learning" class="w-full h-64 object-cover Header-logo" />
      <h2 class="text-2xl font-bold text-gray-800">
        Welcome to <span class="text-pink-500">Torvic.AI</span>
      </h2>
      <p class="text-sm text-gray-500">Log in to continue your journey</p>
    </div>

    <!-- Login Form -->
    <form action="#" method="POST" class="space-y-4">
      <div>
        <label class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" name="email" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" />
      </div>
      <div>
        <label class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password" name="password" required
               class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" />
      </div>

      <div class="flex items-center justify-between text-sm">
        <label class="flex items-center space-x-2">
          <input type="checkbox" class="rounded border-gray-300 text-pink-500" />
          <span>Remember me</span>
        </label>
        <a href="#" class="text-blue-600 hover:underline">Forgot password?</a>
      </div>

      <button type="submit"
              class="w-full bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 rounded-lg transition">
        Log In
      </button>
    </form>

    <!-- Footer CTA -->
    <div class="text-center text-sm text-gray-500">
      Don't have an account?
      <a href="/register" class="text-pink-500 font-medium hover:underline">Create one</a>
    </div>
  </div>

  <!-- Footer component inside body -->
  <x-Footer />

</body>
</html>
