@extends('layouts.main-layouts')

@section('main')
<section id="portfolio">
    <section class="my_background container-fluid mt-5 pt-1 pb-5">
        <div class="d-flex flex-column align-items-center gap-4 mt-5">
    
    
            <h1>Portfolio</h1>
        
            <ul class="container-lg container-md container-sm d-flex justify-content-around flex-wrap row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1">
                @foreach ($projects as $project)
                    <li class="d-flex">

                        <figure class="my_card image-block">
                            <h5 class="my_name_card">{{$project -> code_type}}</h5>
                            <img src="{{ asset('storage/' . $project -> project_img) }}" alt="" />
                            <figcaption class="rounded-top text-center">

                                <h3 class="my_more_info_title">
                                    More Info
                                </h3>

                                {{-- Description --}}
                                <p>{{$project -> project_description}}</p>

                                <div class="d-flex justify-content-evenly">
                                    {{-- Show --}}
                                    <a class="btn btn-success" href="{{ route('project.show', $project) }}">
                                        Info
                                    </a>
                                    {{-- Repo Link --}}
                                    <a class="btn btn-info" href="{{$project -> repo_link}}">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                    {{-- Delete --}}
                                    @auth
                                        <a class="btn btn-danger" href="{{route('project.delete', $project)}}">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                        <a class="btn btn-warning" href="{{ route('project.edit', $project) }}">Edit</a>
                                    @endauth
                                </div>

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