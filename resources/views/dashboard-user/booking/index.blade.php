@extends('dashboard-user.layouts.main')

@section('container')
<main class="flex-1 overflow-y-auto">
  <div class="pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex-auto">
      <h1 class="text-2xl font-bold text-gray-900">Booking History</h1>
      <p class="mt-5 text-sm text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio sapiente cum sint, aperiam fuga repudiandae quaerat officia odit mollitia porro.</p>
    </div>

    <!-- History Booking -->
    {{-- <section class="mt-8 pb-16">
      <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:-mx-6 md:mx-0 md:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Username</th>
              <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Movie Name</th>
              <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Date</th>
              <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Studio</th>
              <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Seat Name</th>
              <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                <span class="sr-only">See</span>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($bookings as $booking)
            @if (Auth::id() == $booking->user->id)
            <tr>
              <td class="relative py-4 pl-4 sm:pl-6 pr-3 text-sm border-gray-300">
                <div class="font-medium text-gray-900">
                  {{ $booking->user->name }}
                </div>
                <div class="absolute right-0 left-6 -top-px h-px bg-gray-200"></div>
              </td>
              <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell border-t border-gray-200">{{ $booking->schedule->movie->name }}</td>
              <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell border-t border-gray-200">{{ $booking->schedule->start_date }}</td>
              <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell border-t border-gray-200">Studio #1</td>
              <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell border-t border-gray-200">{{ $booking->seat_name }}</td>
              <td class="px-3 py-3.5 text-sm text-gray-500 border-t border-gray-200">
                <span>Rp.</span> {{ $booking->total_price }}
              </td>
              <td class="relative py-3.5 pl-3 pr-4 sm:pr-6 text-right text-sm font-medium border-t border-transparent">
                <button type="button" class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-30">See Ticket<span class="sr-only"></span></button>
    
                <div class="absolute right-6 left-0 -top-px h-px bg-gray-200"></div>
              </td>
            </tr>
            @endif
            @endforeach 
          </tbody>
        </table>
      </div>
    </section> --}}

  </div>
</main>

@endsection