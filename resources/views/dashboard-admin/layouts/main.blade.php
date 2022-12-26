<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard Admin</title>
  @vite('resources/css/app.css')
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
  
  <div class="min-h-full" x-data="{ open: false }">
    
    @include('dashboard-admin.layouts.sidebar')

    <!-- Main column -->
    <div class="lg:pl-64 flex flex-col">
      <!-- Search header -->
      <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 lg:hidden">
        <!-- Sidebar toggle, controls the 'sidebarOpen' sidebar state. -->
        <button type="button" @click="open = true"
          class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500 lg:hidden">
          <span class="sr-only">Open sidebar</span>
          <!-- Heroicon name: outline/menu-alt-1 -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
          </svg>
        </button>

        <div class="flex-1 flex justify-between px-4 sm:px-6 lg:px-8">
          <div class="flex items-center">
          </div>
        </div>
      </div>

      <main class="flex-1">

        <!-- Page title & actions -->
        <div class="border-b border-gray-200 px-4 py-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8">
          <div class="flex-1 min-w-0">
            <h1 class="text-lg font-medium leading-6 text-gray-900 sm:truncate">Home</h1>
          </div>
          <div class="mt-4 flex sm:mt-0 sm:ml-4">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="order-1 ml-3 inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:order-0 sm:ml-0">Logout</button>
            </form>
          </div>
        </div>

        @yield('container')
      </main>
    </div>
  </div>

  <script>
    let dProfile = document.getElementById("open-profile");
    let mMenu = document.getElementById("open-menu");
    function openProfile() {
      if (dProfile.classList.contains('hidden')) {
        dProfile.classList.remove('hidden');
      } else {
        dProfile.classList.add('hidden');
      }
    }
    function openMenu() {
      if (mMenu.classList.contains('hidden')) {
        mMenu.classList.remove('hidden');
      } else {
        mMenu.classList.add('hidden');
      }
    }
    function closeMenu() {
      if (mMenu.classList.contains('hidden')) {
        mMenu.classList.remove('hidden');
      } else {
        mMenu.classList.add('hidden');
      }
    }
    window.onclick = function (event) {
      let profileDropdown = document.getElementById('profile-dropdown');
      if (!profileDropdown.contains(event.target) && !dProfile.classList.contains('hidden')) {
        dProfile.classList.add('hidden');
      }
    }
  </script>

</body>
</html>