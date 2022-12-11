@extends('dashboard-admin.layouts.main')

@section('container')
    <div class="px-4 sm:px-6 lg:px-8 py-6">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="max-w-2xl">
    <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">Movie Information</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and application.</p>
    </div>
    <div class="mt-5 border-t border-gray-200">
        <dl class="sm:divide-y sm:divide-gray-200">
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-sm font-medium text-gray-500">Movie Name</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $movie->name }}</dd>
        </div>
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-sm font-medium text-gray-500">Category Name</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $movie->category->name }}</dd>
        </div>
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-sm font-medium text-gray-500">Trailer</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $movie->trailer }}</dd>
        </div>
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-sm font-medium text-gray-500">Synopsis</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">{{ $movie->synopsis }}</dd>
        </div>
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4">
            <dt class="text-sm font-medium text-gray-500">Poster</dt>
            <dd class="mt-1 text-sm text-gray-900 sm:mt-0">
            @if ($movie->poster)
            <img class="rounded-md" src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->name }}">
            @else
                <img src="https://source.unsplash.com/400x500?{{ $movie->category->name }}" class="rounded-md" alt="{{ $movie->category->name }}">
            @endif
            </dd>
        </div>
        </dl>
    </div>
    </div>

    </div>

@endsection