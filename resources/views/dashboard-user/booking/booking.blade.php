@extends('dashboard-user.layouts.main')

@section('container')
<main class="flex-1 overflow-y-auto">
  <div class="pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <section class="mt-8 pb-16">
      <div class=" divide-y divide-gray-200">
        <div class="py-6 sm:py-10">
          <h2 class="text-center font-medium">Screen</h2>
          <div class="mt-3 w-72 rounded-full border-t p-4 border-indigo-600 mx-auto blur-[0.7px]"></div>

          <div class="mt-10 grid grid-cols-10 gap-y-3">
            @foreach ($seats as $seat)
            <div class="mx-auto text-center">
              <div data-id="{{ $seat->id }}" data-name="{{ $seat->name }}" data-price="{{ $booking->price }}" class="{{ $selected->contains($seat->name) ? 'cursor-not-allowed w-8 h-8 border-solid border-2 border-indigo-600 rounded-md flex items-center justify-center' : 'seat cursor-pointer w-8 h-8 border-solid border-2 border-gray-400 rounded-md flex items-center justify-center' }}">
                <small class="text-gray-500">{{ $seat->name }}</small>
              </div>
                {{-- <svg data-id="{{ $seat->id }}" data-name="{{ $seat->name }}" data-price="{{ $booking->price }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1"
                  stroke="currentColor" class="{{ $selected->contains($seat->name) ? 'selected cursor-not-allowed w-12 h-12 text-indigo-600 -mt-3' : 'seat cursor-pointer w-12 h-12 text-gray-400 hover:text-gray-500 -mt-3' }}">
                  <path stroke-linecap="round" stroke-linejoin="round"
                  d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                </svg> --}}
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
  </div>
</main>

<!-- Details booking -->
<aside class="hidden w-96 bg-white p-8 border-l border-gray-200 overflow-y-auto lg:block">
  <form id="booking-form" class="pb-16 space-y-6" method="post">
    @csrf
    {{-- <input type="hidden" name="seat_id" value="" id="value-seat-id"> --}}
    <input type="hidden" name="seat_name" value="" id="value-seat-name">
    <input type="hidden" name="total_price" value="0" id="value-total-price">
    <div>
      <div class="block w-full aspect-w-4 aspect-h-5 rounded-lg overflow-hidden">
        <img id="movie-image" src="{{ asset('storage/' . $booking->movie->poster) }}" alt="" class="object-cover transition ease-in-out hover:scale-110 duration-150">
      </div>
    </div>
    <div>
      <h3 class="font-medium text-gray-900">Detail Information</h3>
      <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Movie Name</dt>
          <dd class="text-gray-900" id="movie-name">{{ $booking->movie->name }}</dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Release Date</dt>
          <dd class="text-gray-900" id="start-date">{{ $booking->start_date }}</dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Studio</dt>
          <dd class="text-gray-900" id="studio">{{ $booking->studio->name }}</dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Sub Price</dt>
          <dd class="text-gray-900" id="price">Rp. {{ $booking->price }}</dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Seats</dt>
          <dd class="text-gray-900" id="seats-name">---</dd>
          <input type="hidden" name="schedule_id" value="{{ $booking->id }}">
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Total Price</dt>
          <dd class="text-gray-900" id="total-price">---</dd>
        </div>
      </dl>
    </div>
    <div>
      <h3 class="font-medium text-gray-900">Synopsis</h3>
      <div class="mt-2 flex items-center justify-between">
        <p id="movie-synopsis" class="text-sm text-gray-500">{{ $booking->movie->synopsis }}</p>
      </div>
    </div>
    <div class="flex">
      <button id="btn-booking" type="submit" class="text-center flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Booking</button>
      <a id="movie-trailer" href="{{ route('dashboard-user.movies') }}" type="button" class="text-center flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</a>
    </div>
  </form>
</aside>

<script>
  // Bind event listeners to each seat div
  var seats = document.querySelectorAll('.seat');
  var bookingBtn = document.getElementById('btn-booking');
  
  for (var i = 0; i < seats.length; i++) {
    seats[i].addEventListener('click', function() {
      // Toggle the selected class on the seat
      this.classList.toggle('selected');

      // Create an array to hold the selected seats
      var selectedSeats = [];
      var totalPrice = 0;

      // Loop through all the seats again
      for (var j = 0; j < seats.length; j++) {
        // If the seat has the selected class, add its name to the array
        if (seats[j].classList.contains('selected')) {
          selectedSeats.push(seats[j].dataset.name);
          totalPrice += parseInt(seats[j].dataset.price);
        }
      }

      // Update the HTML page with the selected seats
      document.getElementById('seats-name').innerHTML = selectedSeats.join(', ');
      document.getElementById('value-seat-name').value = selectedSeats.join(',');
      document.getElementById('total-price').innerHTML = 'Rp. ' + formatPrice(totalPrice);
      document.getElementById('value-total-price').value = totalPrice;
    });
  }



  // format price
  function formatPrice(price) {
    // Convert the price to a string
    var priceString = price.toString();

    // Insert a dot every three digits from the right
    var formattedPrice = '';
    for (var i = 0; i < priceString.length; i++) {
        formattedPrice = priceString[priceString.length - 1 - i] + formattedPrice;
        if ((i + 1) % 3 === 0 && i !== priceString.length - 1) {
            formattedPrice = '.' + formattedPrice;
        }
    }

    return formattedPrice;
  }

</script>
@endsection