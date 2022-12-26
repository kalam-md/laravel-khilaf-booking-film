<!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
  <div class="fixed inset-0 flex z-40 lg:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>
    <div class="relative max-w-xs w-full bg-white shadow-xl pb-12 flex flex-col overflow-y-auto">
      <div class="px-4 pt-5 pb-2 flex">
        <button type="button" class="-m-2 p-2 rounded-md inline-flex items-center justify-center text-gray-400">
          <span class="sr-only">Close menu</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="border-t border-gray-200 py-6 px-4 space-y-6">
        <div class="flow-root">
          <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Company</a>
        </div>

        <div class="flow-root">
          <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Stores</a>
        </div>
      </div>

      <div class="border-t border-gray-200 py-6 px-4 space-y-6">
        <div class="flow-root">
          <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Create an account</a>
        </div>
        <div class="flow-root">
          <a href="#" class="-m-2 p-2 block font-medium text-gray-900">Sign in</a>
        </div>
      </div>
    </div>
  </div>

  <header class="relative">
    <nav aria-label="Top">
      <!-- Secondary navigation -->
      <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="border-b border-gray-200">
            <div class="h-16 flex items-center justify-between">
              <!-- Logo (lg+) -->
              <div class="hidden lg:flex lg:items-center">
                <a href="#">
                  <span class="sr-only">Workflow</span>
                  <img class="h-8 w-auto"
                    src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                </a>
              </div>

              <div class="hidden h-full lg:flex">
                <!-- Mega menus -->
                <div class="ml-8">
                  <div class="h-full flex justify-center space-x-8">
                    <a href="#"
                      class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Home</a>

                    <a href="#"
                      class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Movies</a>
                  </div>
                </div>
              </div>

              <!-- Logo (lg-) -->
              <a href="#" class="lg:hidden">
                <span class="sr-only">Workflow</span>
                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt=""
                  class="h-8 w-auto">
              </a>

              <div class="flex-1 flex items-center justify-end">
                <div class="flex items-center lg:ml-8">
                  <div class="flex space-x-8">
                    <div class="flex">
                      <a href="#" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Account</span>
                        <!-- Heroicon name: outline/user -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                      </a>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                    </div>
                  </div>

                  <span class="mx-4 h-6 w-px bg-gray-200 lg:mx-6" aria-hidden="true"></span>

                  <div class="flow-root">
                    <a href="#" class="group -m-2 p-2 flex items-center">
                      <!-- Heroicon name: outline/shopping-cart -->
                      <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                      </svg>
                      <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                      <span class="sr-only">items in cart, view bag</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>