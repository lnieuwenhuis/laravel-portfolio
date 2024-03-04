<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Project') }}
            </h2>
        </div>

    </x-slot>
    <div class="container">
        <h1>Create Project</h1>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Name</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Project Name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control resize-none" placeholder="Project Description"></textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="nonpublic">Non-Public</option>
                    <option value="prerelease">Pre-Release</option>
                    <option value="released">Released</option>
                </select>
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" id="url" placeholder="URL">
            </div>

            <div class="form-group">
                <label for="github">GitHub</label>
                <input type="text" name="github" id="github" placeholder="GitHub Repo">
            </div>

            <button type="submit" class="btn btn-primary">Store</button>
        </form>
    </div>
</x-app-layout>
