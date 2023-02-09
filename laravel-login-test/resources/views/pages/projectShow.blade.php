@extends('layouts.main-layouts')

@section('main')
<section id="show">
    <section class="my_background container-fluid">

        <div class="container mt-5 pt-5 text-dark d-flex justify-content-center">
            <figure class="my_card image-block">
                <h1>{{$project -> name}}</h1>
                <img src="{{$project -> project_img}}" alt="" />
                <figcaption class="rounded-top">
    
                    <h3>
                        More Info
                    </h3>
    
                    {{-- Description --}}
                    <p>{{$project -> project_description}}</p>
    
                    {{-- Delete --}}
                    @auth
                        <div class="d-flex justify-content-evenly">
                            <a class="btn btn-danger" href="{{route('project.delete', $project)}}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                            <a class="btn btn-warning" href="{{route('project.edit', $project)}}">Edit</a>
                        </div>
                    @endauth
    
                </figcaption>
            </figure>
        </div>


    </section>
</section>
@endsection