<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RHI Build - Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen w-screen overflow-hidden flex flex-col md:flex-row text-gray-800">

  <!-- Sidebar for Mobile (Hidden by default) -->
  <aside id="sidebar-mobile" class="fixed top-0 left-0 w-64 bg-white border-r h-full flex flex-col justify-between md:hidden shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-40">
    <div>
      <div class="h-20 flex items-center justify-between px-6 border-b border-gray-100">
        <div class="flex items-center">
          <svg width="36" height="36" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-3">
            <path d="M170 70L110 20H40L0 70V160H80V110H130V160H170V70Z" fill="#173946"/>
          </svg>
          <div>
            <span class="text-[#173946] text-2xl font-bold">RHI</span>
            <span class="text-gray-400 text-2xl font-light">Build</span>
          </div>
        </div>
        <button id="close-sidebar" class="text-gray-600 hover:text-gray-900">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      
      <!-- Grid border bottom -->
      <div class="h-px w-full bg-gray-50 bg-opacity-50 border-b border-dashed border-gray-200"></div>
      
      <nav class="mt-6 flex flex-col space-y-3 px-6">
        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7m-9 5v6a2 2 0 002 2h4a2 2 0 002-2v-6m-6 0h6"></path></svg>
          <span>Dashboard</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
          <span>Kanban Board</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 9h10m-6 4h6"></path></svg>
          <span>Timeline</span>
        </a>
        <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5-2.24M9 20h6a3 3 0 003-3v-2a3 3 0 00-3-3H9a3 3 0 00-3 3v2a3 3 0 003 3z"></path></svg>
          <span>Team</span>
        </a>
      </nav>
    </div>

    <!-- User Info -->
    <div class="p-6 flex items-center space-x-3 border-t">
      <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
        AU
      </div>
      <div>
        <div class="font-semibold">Admin User</div>
        <div class="text-xs text-gray-500">Project Manager</div>
      </div>
    </div>
  </aside>

  <!-- Sidebar for Desktop (Always visible on desktop) -->
  <aside class="hidden md:flex w-64 bg-white border-r flex-col justify-between">
    <div>
      <div class="h-20 flex items-center px-6 border-b border-gray-100">
        <svg width="36" height="36" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-3">
          <path d="M170 70L110 20H40L0 70V160H80V110H130V160H170V70Z" fill="#173946"/>
        </svg>
        <div>
          <span class="text-[#173946] text-2xl font-bold">RHI</span>
          <span class="text-gray-400 text-2xl font-light">Build</span>
        </div>
      </div>
      
      <!-- Grid border bottom -->
      <div class="w-full bg-gray-100 bg-opacity-50 border-b border-dashed border-gray-200 h-px"></div>
      
      <nav class="mt-6 flex flex-col space-y-3 px-6">
        <a wire:navigate href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 12l2-2m0 0l7-7 7 7m-9 5v6a2 2 0 002 2h4a2 2 0 002-2v-6m-6 0h6"></path></svg>
          <span>Dashboard</span>
        </a>
        <a wire:navigate href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
          <span>Kanban Board</span>
        </a>
        <a wire:navigate href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 9h10m-6 4h6"></path></svg>
          <span>Timeline</span>
        </a>
        <a wire:navigate href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-blue-50 transition-all">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 20h5v-2a3 3 0 00-5-2.24M9 20h6a3 3 0 003-3v-2a3 3 0 00-3-3H9a3 3 0 00-3 3v2a3 3 0 003 3z"></path></svg>
          <span>Team</span>
        </a>
      </nav>
    </div>

    <!-- User Info -->
    <div class="p-6 flex items-center space-x-3 border-t">
      <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">
        AU
      </div>
      <div>
        <div class="font-semibold">Admin User</div>
        <div class="text-xs text-gray-500">Project Manager</div>
      </div>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col bg-gray-100 h-screen overflow-hidden">
    <!-- Topbar -->
    <header class="h-20 bg-white border-b flex items-center justify-between px-6 shadow-sm">
      <!-- Hamburger Menu for Mobile -->
      <div class="flex items-center md:hidden">
        <button class="text-gray-800 mr-3" id="hamburger-btn">
          <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
        <div class="flex items-center">
          <svg width="36" height="36" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-3">
            <path d="M170 70L110 20H40L0 70V160H80V110H130V160H170V70Z" fill="#173946"/>
          </svg>
          <div>
            <span class="text-[#173946] text-2xl font-bold">RHI</span>
            <span class="text-gray-400 text-2xl font-light">Build</span>
          </div>
        </div>
      </div>
      
      <!-- Title - Only visible on desktop -->
      <div class="text-2xl font-bold hidden md:block">Project Management</div>
      
      <!-- Search and New Project Button -->
      <div class="flex items-center space-x-3">
        <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 w-32 md:w-52 hidden sm:block" />
        <!-- New Project Button -->
        <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-lg shadow transition-all">
          + New Project
        </button>
      </div>
    </header>

    <!-- Page Content -->
    <main class="flex-1 p-6 overflow-y-auto">
      <h1 class="text-2xl font-bold mb-4">Dashboard Content</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
        <!-- Project Card 1 -->
        <div class="bg-white p-5 rounded-lg shadow">
          <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg">Residential Project</h3>
            <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Active</span>
          </div>
          <p class="text-gray-600 text-sm mb-4">Modern residential complex with 24 units.</p>
          <div class="flex justify-between text-sm text-gray-500">
            <span>Progress: 65%</span>
            <span>Due: 30 May</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5 mt-3">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 65%"></div>
          </div>
        </div>
        
        <!-- Project Card 2 -->
        <div class="bg-white p-5 rounded-lg shadow">
          <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg">Commercial Tower</h3>
            <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded-full">Planning</span>
          </div>
          <p class="text-gray-600 text-sm mb-4">15-story office building in downtown area.</p>
          <div class="flex justify-between text-sm text-gray-500">
            <span>Progress: 25%</span>
            <span>Due: 15 Aug</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5 mt-3">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 25%"></div>
          </div>
        </div>
        
        <!-- Project Card 3 -->
        <div class="bg-white p-5 rounded-lg shadow">
          <div class="flex justify-between items-center mb-4">
            <h3 class="font-bold text-lg">Public Park</h3>
            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Review</span>
          </div>
          <p class="text-gray-600 text-sm mb-4">Renovation of central city park with new amenities.</p>
          <div class="flex justify-between text-sm text-gray-500">
            <span>Progress: 80%</span>
            <span>Due: 10 Jun</span>
          </div>
          <div class="w-full bg-gray-200 rounded-full h-2.5 mt-3">
            <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    // Function to toggle sidebar visibility for mobile
    document.getElementById('hamburger-btn').addEventListener('click', function() {
      const sidebarMobile = document.getElementById('sidebar-mobile');
      sidebarMobile.classList.remove('-translate-x-full');
    });
    
    // Function to close sidebar
    document.getElementById('close-sidebar').addEventListener('click', function() {
      const sidebarMobile = document.getElementById('sidebar-mobile');
      sidebarMobile.classList.add('-translate-x-full');
    });
    
    // Close sidebar when clicking outside (optional)
    document.addEventListener('click', function(event) {
      const sidebarMobile = document.getElementById('sidebar-mobile');
      const hamburgerBtn = document.getElementById('hamburger-btn');
      
      if (!sidebarMobile.contains(event.target) && 
          !hamburgerBtn.contains(event.target) && 
          !sidebarMobile.classList.contains('-translate-x-full')) {
        sidebarMobile.classList.add('-translate-x-full');
      }
    });
  </script>

</body>
</html>