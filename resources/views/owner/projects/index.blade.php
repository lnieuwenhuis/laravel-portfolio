<x-app-layout>
    <div class="container">
        <h1>Projects</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</x-app-layout>
