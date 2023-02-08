@extends('layouts.main-layouts')

@section('main')
<section id="portfolio">
    <section class="my_background container-fluid mt-5 pt-1 pb-5">
        <div class="container d-flex flex-column align-items-center gap-4 mt-5">
    
    
            <h1>Portfolio</h1>
        
            <ul class="d-flex justify-content-around flex-wrap gap-3">
                @foreach ($projects as $project)
                    <li class="d-flex">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$project -> project_img}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">{{$project -> project_description}}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
    
    
        </div>
    </section>
</section>
@endsection