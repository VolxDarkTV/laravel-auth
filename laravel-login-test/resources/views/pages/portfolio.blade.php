@extends('layouts.main-layouts')

@section('main')
<section id="portfolio">
    <section class="my_background container-fluid mt-5 pt-1 pb-5">
        <div class="container d-flex flex-column align-items-center gap-4 mt-5">
    
    
            <h1>Portfolio</h1>
        
            <ul class="d-flex justify-content-around flex-wrap row row-cols-4">
                @foreach ($projects as $project)
                    <li class="d-flex">

                        <figure class="my_card image-block">
                            <h1>{{$project -> name}}</h1>
                            <img src="{{$project -> project_img}}" alt="" />
                            <figcaption class="rounded-top">

                                <h3>
                                    More Info
                                </h3>

                                {{-- Description --}}
                                <p>{{$project -> project_description}}</p>

                                {{-- Show --}}
                                <a class="btn btn-success" href="{{ route('project.show', $project) }}">
                                    More Info
                                </a>

                                {{-- Delete --}}
                                @auth
                                    <a class="btn btn-danger" href="{{route('project.delete', $project)}}">x</a>
                                    <a class="btn btn-warning" href="{{ route('project.edit', $project) }}">Edit</a>
                                @endauth

                            </figcaption>
                        </figure>

                        {{-- <a href=" {{ route('project.show', $project) }} " class="card" style="width: 18rem;">
                            <img src="{{$project -> project_img}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">{{$project -> project_description}}</p>
                            </div>

                            @auth
                                <a class="btn btn-danger" href="{{route('project.delete', $project)}}">x</a>

                            @endauth
                            
                        </a> --}}
                        
                            
                    </li>
                @endforeach
            </ul>
    
    
        </div>
    </section>
</section>
@endsection