@extends('layouts.main-layouts')

@section('main')
<section id="portfolio">
    <section class="my_background container-fluid mt-5 pt-1 pb-5">
        <div class="container d-flex flex-column align-items-center gap-4 mt-5">
    
    
            <h1>Portfolio</h1>
        
            <ul class="d-flex justify-content-around flex-wrap gap-3">
                @foreach ($projects as $project)
                    <li class="d-flex">
                        {{-- <a href=" {{ route('project.show', $project) }} " class="card" style="width: 18rem;">
                            <img src="{{$project -> project_img}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">{{$project -> project_description}}</p>
                            </div>

                            @auth
                                <a class="btn btn-danger" href="{{route('project.delete', $project)}}">x</a>

                            @endauth
                            
                        </a> --}}
                        <figure class="my_card image-block">
                            <h1>{{$project -> name}}</h1>
                            <img src="{{$project -> project_img}}" alt="" />
                            <figcaption>

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
                                @endauth

                            </figcaption>
                        </figure>
                            
                    </li>
                @endforeach
            </ul>
    
    
        </div>
    </section>
</section>
@endsection