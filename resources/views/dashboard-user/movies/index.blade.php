@extends('dashboard-user.layouts.main')
@section('container')
    <div class="max-w-2xl mx-auto py-12 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
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
@endsection