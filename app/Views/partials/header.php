  <header class="container mx-auto px-4 py-6">
    <div class="flex justify-between items-center">
      <div class="flex items-center">
        <div class="h-8 w-8 rounded-full bg-white flex items-center justify-center p-1">
			<img src="/images/logo.png" class="h-full w-full object-cover">
		</div>
        <span class="ml-2 text-xl font-bold"><?= $appName ?></span>
      </div>
      <nav class="hidden md:flex space-x-8">
        <a href="https://github.com/fitri-hy/php-native" target="_blank" class="hover:text-indigo-300 transition-colors duration-200">How to use?</a>
      </nav>
      <div class="md:hidden">
        <button class="text-white focus:outline-none">
          <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>