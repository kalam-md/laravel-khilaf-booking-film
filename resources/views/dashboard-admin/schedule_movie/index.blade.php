@extends('dashboard-admin.layouts.main')

@section('container')
  <div class="mt-10 sm:hidden">
    <div class="px-4 sm:px-6">
      <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Projects</h2>
    </div>
    <ul role="list" class="mt-3 border-t border-gray-200 divide-y divide-gray-100">
      <li>
        <a href="#" class="group flex items-center justify-between px-4 py-4 hover:bg-gray-50 sm:px-6">
          <span class="flex items-center truncate space-x-3">
            <span class="w-2.5 h-2.5 flex-shrink-0 rounded-full bg-pink-600" aria-hidden="true"></span>
            <span class="font-medium truncate text-sm leading-6">
              GraphQL API
              <span class="truncate font-normal text-gray-500">in Engineering</span>
            </span>
          </span>
          <!-- Heroicon name: solid/chevron-right -->
          <svg class="ml-4 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
              clip-rule="evenodd" />
          </svg>
        </a>
      </li>
    </ul>
  </div>


  <div class="hidden mt-8 sm:block">
    <div class="px-4 sm:px-6 lg:px-8">
      <div class="sm:flex flex-col">
        <div class="sm:flex-auto">
          <h1 class="text-xl font-semibold text-gray-900">Schedule Movie List</h1>
          <p class="mt-2 text-sm text-gray-700">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit,
            architecto.</p>
        </div>
        <div class="mt-4 sm:mt-0">
          <a href="schedule-movies/create">
            <button type="button"
            class="mt-4 inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add
            Schedule Movie</button>
          </a>
        </div>
      </div>
      <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block w-3/4 py-2 align-middle md:px-6 lg:px-8">
            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
              <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col"
                      class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                      Schedule Movie ID</th>
                    <th scope="col"
                      class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Start Date
                    </th>
                    <th scope="col"
                      class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Movie Name
                    </th>
                    <th scope="col"
                      class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Studio Name
                    </th>
                    <th scope="col"
                      class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Price
                    </th>
                    <th scope="col" class="relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-6">
                      <span class="sr-only">See</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                  @foreach ($schedules as $schedule)
                  <tr>
                    <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6">{{ $loop->iteration }}</td>
                    <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">{{ $schedule->start_date }}</td>
                    <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">{{ $schedule->movie->name }}</td>
                    <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900">{{ $schedule->studio->name }}</td>
                    <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900"><span>Rp. </span>{{ $schedule->price }}</td>
                    <td class="relative whitespace-nowrap py-2 text-right text-sm font-medium flex">
                      <a href="/dashboard-admin/schedules/{{ $schedule->id }}/edit" class="text-gray-400 hover:text-gray-500 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                          stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                      </a>

                      <form action="/dashboard-admin/schedules/{{ $schedule->id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-gray-500" onclick="return confirm('Are you sure?')">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                              d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                          </svg>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection