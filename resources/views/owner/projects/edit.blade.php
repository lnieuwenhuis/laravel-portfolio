<x-app-layout>
    <div class="container">
        <h1>Edit Project</h1>
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $project->name }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="nonpublic" {{ $project->stutus }}>Non-Public</option>
                    <option value="prerelease" {{ $project->status }}>Pre-Release</option>
                    <option value="released" {{ $project->status }}>Released</option>
                </select>
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" id="url" value="{{ $project->url }}">
            </div>

            <div class="form-group">
                <label for="github">GitHub</label>
                <input type="text" name="github" id="github" value="{{ $project->github }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-app-layout>
