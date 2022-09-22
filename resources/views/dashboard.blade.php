<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div>
                    {{-- <a href="{{ route('accueil') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Accueil</a>
                    <a href="{{ Route('articles') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Articles</a> --}}
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                       {{Auth::user()->name}} You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
