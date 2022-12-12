@extends('dashboard-admin.layouts.main')

@section('container')
<div class="px-4 sm:px-6 lg:px-8">
  <div class="max-w-2xl">
    <form class="space-y-8"  action="/dashboard-admin/studios/{{ $studio->id }}" method="post">
      @method('put')
      @csrf
      <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
        <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
          <div>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Studio Edit</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore, fugit.</p>
          </div>
          <div class="space-y-6 sm:space-y-5">

            <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
              <label for="name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Studio Name </label>
              <div class="mt-1 sm:mt-0 sm:col-span-2">
                <input type="text" name="name" id="name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-lg sm:text-sm border-gray-300 rounded-md @error('name') is-invalid @enderror" required value="{{ old('name', $studio->name) }}">

                @error('name')
                    <p class="invalid-feedback ml-1 my-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="pt-5">
        <div class="flex justify-end">
          <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection