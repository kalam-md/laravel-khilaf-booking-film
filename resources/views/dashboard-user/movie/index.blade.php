@extends('dashboard-user.layouts.main')

@section('container')
<main class="flex-1 overflow-y-auto">
  <div class="pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex">
      <h1 class="flex-1 text-2xl font-bold text-gray-900">Movie List</h1>
    </div>

    <!-- Movies -->
    <section class="mt-8 pb-16">
      <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 md:grid-cols-4 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach ($schedules as $schedule)
        <li class="relative" onclick="detailMovies({{ $schedule->id }})">
          <!-- Current: "ring-2 ring-offset-2 ring-indigo-500", Default: "focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500" -->
          <div class="group block w-full aspect-w-4 aspect-h-5 rounded-lg bg-gray-100 overflow-hidden">
            <!-- Current: "", Default: "group-hover:opacity-75" -->
            <img src="{{ asset('storage/' . $schedule->movie->poster) }}" alt="{{ $schedule->movie->name }}" class="object-cover pointer-events-none transition ease-in-out group-hover:scale-110 duration-150">
          </div>
          <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{ $schedule->movie->name }}</p>
        </li>
        @endforeach
      </ul>
    </section>
  </div>
</main>

<!-- Details movies -->
<aside class="hidden w-96 bg-white p-8 border-l border-gray-200 overflow-y-auto lg:block">
  <div class="pb-16 space-y-6">
    <div>
      <div class="block w-full aspect-w-4 aspect-h-5 rounded-lg overflow-hidden">
        <img id="movie-image" src="{{ asset('storage/movie-images/no-img.png') }}" alt="" class="object-cover transition ease-in-out hover:scale-110 duration-150">
      </div>
    </div>
    <div>
      <h3 class="font-medium text-gray-900">Detail Information</h3>
      <dl class="mt-2 border-t border-b border-gray-200 divide-y divide-gray-200">
        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Movie Name</dt>
          <dd class="text-gray-900" id="movie-name"></dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Release Date</dt>
          <dd class="text-gray-900" id="release-date"></dd>
        </div>

        <div class="py-3 flex justify-between text-sm font-medium">
          <dt class="text-gray-500">Studio</dt>
          <dd class="text-gray-900" id="studio"></dd>
        </div>
      </dl>
    </div>
    <div>
      <h3 class="font-medium text-gray-900">Synopsis</h3>
      <div class="mt-2 flex items-center justify-between">
        <p id="movie-synopsis" class="text-sm text-gray-500"></p>
        <button type="button" class="bg-white rounded-full h-8 w-8 flex items-center justify-center text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500"></button>
        </button>
      </div>
    </div>
    <div class="flex">
      <a id="booking" href="#" class="text-center flex-1 bg-indigo-600 py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"> booking</a>
      <a id="movie-trailer" href="#" type="button" class="text-center flex-1 ml-3 bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Trailer</a>
    </div>
  </div>
</aside>

<script>
  function detailMovies(movieId) {
    $.ajax({
        url: '/dashboard-user/movies/' + movieId,
        type: 'GET',
        success: function(data) {
          document.getElementById('movie-image').src = 'http://localhost:8000/storage/' + data.movie.poster;
          document.getElementById('movie-name').innerHTML = data.movie.name
          document.getElementById('movie-synopsis').innerHTML = data.movie.synopsis
          document.getElementById('movie-trailer').href = data.movie.trailer
          document.getElementById('release-date').innerHTML = data.start_date
          document.getElementById('studio').innerHTML = data.studio.name
          document.getElementById('booking').href = data.id
        }
    });
  }
</script>
@endsection