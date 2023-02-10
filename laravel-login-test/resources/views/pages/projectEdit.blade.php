@extends('layouts.main-layouts')

@section('main')
    <section class="container">
            
        <div class="d-flex flex-column align-items-center">
            
            <h3 class="rounded bg-success p-2 mb-3">CREATE</h3>
        
            @include('components.errors')
        
            <form method="POST" action="{{ route('project.update', $project) }}">
                @csrf
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="{{ $project -> name }}">
                <br>
                <label for="code_type">Code Type</label>
                <input id="code_type" type="text" name="code_type" value="{{ $project -> code_type }}">
                <br>
                <label for="date">Date</label>
                <input id="date" type="date" name="date" value="{{ $project -> date }}">
                <br>
                <label for="project_img">Link Img</label>
                <input id="project_img" type="text" name="project_img" value="{{ $project -> project_img }}">
                <br>
                <label for="project_description">Description</label>
                <textarea type="text" name="project_description" placeholder="not request">{{ $project -> project_description }}</textarea>
                <br>
                <label for="repo_link">Link Repo</label>
                <input id="repo_link" type="text" name="repo_link" value="{{ $project -> repo_link }}">
                <br>
                <input id="project_description" type="submit" value="EDIT">
            </form>
        </div>

    </section>
@endsection