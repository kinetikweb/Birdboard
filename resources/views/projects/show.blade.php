@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-gray-700 text-sm font-normal">
                <a href="/projects">My Projects</a> / {{ $project->title }}
            </p>

            <a href="{{ $project->path().'/edit' }}" class="button">Edit Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-gray-700 font-normal mb-3">Tasks</h2>
                    {{-- Tasks --}}
                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form class="" action="{{ $task->path() }}" method="POST">
                                @method('PATCH')
                                @csrf

                                <div class="flex">
                                    <input type="text" name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-gray-500' : '' }}">
                                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach

                    <div class="card mb-3">
                        <form class="" action="{{ $project->path() . '/tasks' }}" method="POST">
                            @csrf

                            <input name="body" class="w-full" placeholder="Add a new task...">
                        </form>
                    </div>
                </div>

                <div class="mb-8">
                    <h2 class="text-lg text-gray-700 font-normal mb-3">General Notes</h2>
                    {{-- General Notes --}}
                    <form class="" action="{{ $project->path() }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <textarea
                            name="notes"
                            class="card w-full mb-4"
                            style="min-height: 200px"
                            placeholder="Anything special that you want to make a note of?"
                        >{{ $project->notes }}</textarea>

                        <button type="submit" class="button">Save</button>
                    </form>
                </div>
            </div>
            <div class="lg:w-1/4 px-3">
                @include('projects.card')
            </div>
        </div>
    </main>
@endsection
