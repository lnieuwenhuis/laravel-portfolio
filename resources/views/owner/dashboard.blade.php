<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8 ">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <div class="flex flex-col md:grid md:grid-cols-2 md:gap-3 mt-8 m-8 xl:mx-auto mb-0 max-w-7xl">
            <div class="mb-2 md:mb-0">
                <a href="{{ route('projects.index') }}">
                    <div class=" bg-white overflow-hidden rounded-lg h-36 shadow-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center mt-9 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 absolute opacity-10 -ml-6 -mt-12"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z" />
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z" />
                            </svg>
                            Projecten
                        </div>
                    </div>
                </a>
            </div>
            <div class="mt-2 md:mt-0">
                <a href="#">
                    <div class=" bg-white overflow-hidden shadow-lg rounded-lg h-36">
                        <div class="p-6 text-gray-900 dark:text-gray-100 text-center mt-9 text-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 absolute opacity-10 -ml-6 -mt-12"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4z" />
                                <path fill-rule="evenodd"
                                    d="M3 8h14v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8zm5 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                            Contact Formulieren
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
