@extends('layouts.main-layouts')

@section('main')
    <h1>Portfolio</h1>

    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project -> name }}
            </li>
        @endforeach
    </ul>
@endsection