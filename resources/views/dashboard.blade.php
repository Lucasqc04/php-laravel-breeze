<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="text-xl font-bold">
                            {{ __("Welcome to your Dashboard!") }}
                        </div>
                        <div class="text-gray-500 dark:text-gray-400">
                            {{ now()->format('l, F j, Y') }}
                        </div>
                    </div>
                    <div class="border-t border-gray-200 dark:border-gray-700 py-4">
                        <p class="text-lg">
                            {{ __("You're logged in and ready to go.") }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
