<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  
<!-- header -->
<div class="isolate bg-white">
    <!-- svg -->
    <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]">
      <svg
        class="relative left-[calc(50%-11rem)] -z-10 h-[21.1875rem] max-w-none -translate-x-1/2 rotate-[30deg] sm:left-[calc(50%-30rem)] sm:h-[42.375rem]"
        viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill="url(#45de2b6b-92d5-4d68-a6a0-9b9b2abad533)" fill-opacity=".3"
          d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
        <defs>
          <linearGradient id="45de2b6b-92d5-4d68-a6a0-9b9b2abad533" x1="1155.49" x2="-78.208" y1=".177" y2="474.645"
            gradientUnits="userSpaceOnUse">
            <stop stop-color="#9089FC"></stop>
            <stop offset="1" stop-color="#FF80B5"></stop>
          </linearGradient>
        </defs>
      </svg>
    </div>

    <div class="mx-auto px-6 pt-6 lg:px-8 sm:px-6 lg:max-w-7xl">
      <div>
        <!-- navbar -->
        <nav class="flex h-9 items-center justify-between" id="open-menu">
          <div class="flex lg:min-w-0 lg:flex-1" aria-label="Global">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-14" src="./img/logo.png" alt="Logo">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
              onclick="openMenu()">
              <span class="sr-only">Open main menu</span>
              <!-- Heroicon name: outline/bars-3 -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-center lg:gap-x-12">
            <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Home</a>

            <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Movies</a>

            <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Feature</a>

            <a href="#" class="font-semibold text-gray-900 hover:text-gray-900">Contact Us</a>
          </div>
          <div class="hidden lg:flex lg:min-w-0 lg:flex-1 lg:justify-end">
            <a href="./src/login.html"
              class="inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Sign
              in</a>
          </div>
        </nav>

        <!-- navbar mobile -->
        <div>
          <div id="m-navbar" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden hidden">
            <div class="flex h-9 items-center justify-between">
              <div class="flex">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="sr-only">Your Company</span>
                  <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
              </div>
              <div class="flex">
                <button type="button"
                  class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                  onclick="closeMenu()">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x-mark -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a href="#"
                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Home</a>

                  <a href="#"
                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Movies</a>

                  <a href="#"
                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Feature</a>

                  <a href="#"
                    class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Contact
                    Us</a>
                </div>
                <div class="py-6">
                  <a href="#"
                    class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Sign
                    in</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- main section -->
    <main>
      <!-- hero -->
      <div class="relative px-6 lg:px-8">
        <div class="mx-auto max-w-3xl pt-20 pb-15 sm:pt-48 sm:pb-20">
          <div>
            {{-- hero text --}}
            <div>
              <h1 class="text-4xl font-bold tracking-tight sm:text-center sm:text-6xl">Let's watch your favorite movie
                now</h1>
              <p class="mt-6 text-lg leading-8 text-gray-600 sm:text-center">Lorem, ipsum dolor sit amet consectetur
                adipisicing elit. Dolore eveniet consectetur nisi eaque sint fuga distinctio molestiae temporibus
                voluptatem recusandae..</p>
              <div class="mt-8 flex gap-x-4 sm:justify-center">
                <a href="#"
                  class="inline-block rounded-lg bg-indigo-600 px-4 py-1.5 text-base font-semibold leading-7 text-white shadow-sm ring-1 ring-indigo-600 hover:bg-indigo-700 hover:ring-indigo-700">
                  Get started
                </a>
              </div>
            </div>

            <!-- svg -->
            <div
              class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
              <svg
                class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
                viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3"
                  d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                <defs>
                  <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177"
                    y2="474.645" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#9089FC"></stop>
                    <stop offset="1" stop-color="#FF80B5"></stop>
                  </linearGradient>
                </defs>
              </svg>
            </div>
          </div>
        </div>
      </div>

      <!-- movies -->
      <div class="relative px-6 lg:px-8">

        <!-- movie list -->
        <div class="max-w-2xl mx-auto py-16 my-12 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="max-w-3xl">
              <p class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Movies in Theater</p>
              <p class="mt-4 text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eaque, a voluptate
                veritatis alias optio blanditiis voluptates, deserunt labore impedit fuga mollitia ut est perferendis.</p>
            </div>
      
            <div
              class="mt-11 grid items-start grid-cols-1 gap-y-16 gap-x-6 sm:mt-16 sm:grid-cols-2 lg:grid-cols-4 lg:gap-x-8">
              <div class="flex flex-col">
                <div class="aspect-w-4 aspect-h-5 rounded-lg bg-gray-100 overflow-hidden">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-feature-08-detail-01.jpg"
                    alt="Green cardstock box containing white, beige, and brown cards." class="object-center object-cover">
                </div>
                <div class="mt-6">
                  <h3 class="text-sm font-medium text-gray-900">Three card types</h3>
                  <p class="mt-2 text-sm text-gray-500">Today, Next, and Someday cards allow you to defer your dreams into the
                    future.</p>
                </div>
                <a href="detail-movies.html"
                  class="mt-6 relative flex bg-indigo-500 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-white hover:bg-indigo-600">Booking
                  Now</a>
              </div>
      
              <div class="flex flex-col">
                <div class="aspect-w-4 aspect-h-5 rounded-lg bg-gray-100 overflow-hidden">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-feature-07-detail-01.jpg"
                    alt="Green cardstock box containing white, beige, and brown cards." class="object-center object-cover">
                </div>
                <div class="mt-6">
                  <h3 class="text-sm font-medium text-gray-900">Three card types</h3>
                  <p class="mt-2 text-sm text-gray-500">Today, Next, and Someday cards allow you to defer your dreams into the
                    future.</p>
                </div>
                <a href="#"
                  class="mt-6 relative flex bg-indigo-500 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-white hover:bg-indigo-600">Booking
                  Now</a>
              </div>
      
              <div class="flex flex-col">
                <div class="aspect-w-4 aspect-h-5 rounded-lg bg-gray-100 overflow-hidden">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-feature-04-detail-01.jpg"
                    alt="Green cardstock box containing white, beige, and brown cards." class="object-center object-cover">
                </div>
                <div class="mt-6">
                  <h3 class="text-sm font-medium text-gray-900">Three card types</h3>
                  <p class="mt-2 text-sm text-gray-500">Today, Next, and Someday cards allow you to defer your dreams into the
                    future.</p>
                </div>
                <a href="#"
                  class="mt-6 relative flex bg-indigo-500 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-white hover:bg-indigo-600">Booking
                  Now</a>
              </div>
      
              <div class="flex flex-col">
                <div class="aspect-w-4 aspect-h-5 rounded-lg bg-gray-100 overflow-hidden">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-feature-08-detail-03.jpg"
                    alt="Green cardstock box containing white, beige, and brown cards." class="object-center object-cover">
                </div>
                <div class="mt-6">
                  <h3 class="text-sm font-medium text-gray-900">Three card types</h3>
                  <p class="mt-2 text-sm text-gray-500">Today, Next, and Someday cards allow you to defer your dreams into the
                    future.</p>
                </div>
                <a href="#"
                  class="mt-6 relative flex bg-indigo-500 border border-transparent rounded-md py-2 px-8 items-center justify-center text-sm font-medium text-white hover:bg-indigo-600">Booking
                  Now</a>
              </div>
            </div>
        </div>

        <!-- svg -->
        <div
          class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
          <svg
            class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
            viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3"
              d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
            <defs>
              <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#9089FC"></stop>
                <stop offset="1" stop-color="#FF80B5"></stop>
              </linearGradient>
            </defs>
          </svg>
        </div>

      </div>

      <!-- feature -->
      <div class="bg-white">
        <!-- Header -->
        <div class="relative pb-32 bg-gray-800">
          <div class="absolute inset-0">
            <img class="w-full h-full object-cover"
              src="https://images.unsplash.com/photo-1525130413817-d45c1d127c42?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1920&q=60&&sat=-100"
              alt="">
            <div class="absolute inset-0 bg-gray-800 mix-blend-multiply" aria-hidden="true"></div>
          </div>
          <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">Feature</h1>
            <p class="mt-6 max-w-3xl text-xl text-gray-300">Varius facilisi mauris sed sit. Non sed et duis dui leo,
              vulputate id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames. Dui, amet, nec sit
              pulvinar.</p>
          </div>
        </div>
  
        <!-- Overlapping cards -->
        <section class="-mt-32 max-w-7xl mx-auto relative pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
          <h2 class="sr-only" id="contact-heading">Contact us</h2>
          <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
            <div class="flex flex-col bg-white rounded-2xl shadow-xl">
              <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                <div
                  class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
                  <!-- Heroicon name: outline/phone -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                  </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900">Sales</h3>
                <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate
                  id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
              </div>
            </div>
  
            <div class="flex flex-col bg-white rounded-2xl shadow-xl">
              <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                <div
                  class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
                  <!-- Heroicon name: outline/support -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900">Technical Support</h3>
                <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate
                  id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
              </div>
            </div>
  
            <div class="flex flex-col bg-white rounded-2xl shadow-xl">
              <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
                <div
                  class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
                  <!-- Heroicon name: outline/newspaper -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                  </svg>
                </div>
                <h3 class="text-xl font-medium text-gray-900">Media Inquiries</h3>
                <p class="mt-4 text-base text-gray-500">Varius facilisi mauris sed sit. Non sed et duis dui leo, vulputate
                  id malesuada non. Cras aliquet purus dui laoreet diam sed lacus, fames.</p>
              </div>
            </div>
          </div>
  
          <!-- svg -->
          <div
            class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
            <svg
              class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]"
              viewBox="0 0 1155 678" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3"
                d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
              <defs>
                <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645"
                  gradientUnits="userSpaceOnUse">
                  <stop stop-color="#9089FC"></stop>
                  <stop offset="1" stop-color="#FF80B5"></stop>
                </linearGradient>
              </defs>
            </svg>
          </div>
        </section>
      </div>
    </main>

</div>

<!-- footer -->
<footer class="bg-gray-800" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>

    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Solutions</h3>
                    <ul role="list" class="mt-4 space-y-4">
                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Marketing </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Analytics </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Commerce </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Insights </a>
                    </li>
                    </ul>
                </div>
                <div class="mt-12 md:mt-0">
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Support</h3>
                    <ul role="list" class="mt-4 space-y-4">
                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Pricing </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Documentation </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Guides </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> API Status </a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                    <ul role="list" class="mt-4 space-y-4">
                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> About </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Blog </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Jobs </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Press </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Partners </a>
                    </li>
                    </ul>
                </div>
                <div class="mt-12 md:mt-0">
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Legal</h3>
                    <ul role="list" class="mt-4 space-y-4">
                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Claim </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Privacy </a>
                    </li>

                    <li>
                        <a href="#" class="text-base text-gray-300 hover:text-white"> Terms </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="mt-8 xl:mt-0">
                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Subscribe to our newsletter</h3>
                <p class="mt-4 text-base text-gray-300">The latest news, articles, and resources, sent to your inbox weekly.
                </p>
                <form class="mt-4 sm:flex sm:max-w-md">
                <label for="email-address" class="sr-only">Email address</label>
                <input type="email" name="email-address" id="email-address" autocomplete="email" required
                    class="appearance-none min-w-0 w-full bg-white border border-transparent rounded-md py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-white focus:placeholder-gray-400"
                    placeholder="Enter your email">
                <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                    <button type="submit"
                    class="w-full bg-indigo-500 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">Subscribe</button>
                </div>
                </form>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
            <div class="flex space-x-6 md:order-2">
                <a href="#" class="text-gray-400 hover:text-gray-300">
                <span class="sr-only">Facebook</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                    clip-rule="evenodd" />
                </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-300">
                <span class="sr-only">Instagram</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                    clip-rule="evenodd" />
                </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-300">
                <span class="sr-only">Twitter</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path
                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
                </a>

                <a href="#" class="text-gray-400 hover:text-gray-300">
                <span class="sr-only">GitHub</span>
                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                    clip-rule="evenodd" />
                </svg>
                </a>
            </div>
            <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">&copy; 2022 Team Khilaf, Universitas Pasundan.</p>
        </div>
    </div>
</footer>

{{-- js --}}
<script>
let mNavbar = document.getElementById("m-navbar");

function openMenu() {
    if (mNavbar.classList.contains('hidden')) {
    mNavbar.classList.remove('hidden');
    } else {
    mNavbar.classList.add('hidden');
    }
}

function closeMenu() {
    if (mNavbar.classList.contains('hidden')) {
    mNavbar.classList.remove('hidden');
    } else {
    mNavbar.classList.add('hidden');
    }
}
</script>

</body>
</html>