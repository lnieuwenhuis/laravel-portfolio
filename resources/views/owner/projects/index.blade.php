<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Projects') }}
            </h2>
            <a href="{{ route('projects.create') }}"
                class="btn btn-primary font-semibold text-xl text-gray-800 leading-tight ml-auto">{{ __('Create New') }}</a>
        </div>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-row justify-between text-lg font-bold">
                        <h1>Title</h1>
                        <h1>Description</h1>
                        <h1>Status</h1>
                        <h1>URL</h1>
                        <h1>Github</h1>
                        <h1>Actions</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-1">
                        @if ($projects->isEmpty())
                            <p>There are no projects yet.</p>
                        @else
                            @foreach ($projects as $project)
                                <div class="grid grid-cols-6 gap-1 border-b-gray-200 border-b">
                                    <h1 class="">{{ $project->name }}</h1>

                                    <script>
                                        function toggleDescription(id) {
                                            var x = document.getElementById("description-" + id);
                                            if (x.style.display === "none") {
                                                x.style.display = "block";
                                                x.style.position = "absolute";
                                            } else {
                                                x.style.display = "none";
                                            }
                                        }
                                    </script>

                                    <button class=" -ml-16" onclick="toggleDescription({{ $project->id }})">Show
                                        Description</button>
                                    <div id="description-{{ $project->id }}" style="display: none;"
                                        class=" bg-gray-200 w-4/12 h-1/4 rounded-lg shadow-lg border-black box-border mx-auto my-auto">
                                        <div class="flex flex-row m-2">
                                            <h1 class="text-lg font-bold">Description</h1>
                                            <button
                                                class="ml-auto bg-red-500 w-6 h-6 -m-1 text-gray-200 font-bold text-lg rounded-full"
                                                onclick="toggleDescription({{ $project->id }})">X</button>
                                        </div>
                                        <p class="m-2">{{ $project->description }}</p>

                                    </div>


                                    <h1 class="mx-auto">{{ $project->status }}</h1>
                                    <h1 class="text-center">{{ $project->url }}</h1>
                                    <a class="ml-auto mr-7"
                                        @if (!$project->github) href="#" disabled 
                                @else 
                                href="{{ $project->github }}" @endif>{{ $project->name }}</a>
                                    <div class="ml-auto">
                                        <a href="{{ route('projects.edit', $project->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                onclick="return confirm(`Weet je zeker dat je het project '{{ $project->name }}' wilt verwijderen?`)"
                                                class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

        </div>
</x-app-layout>
