@extends('layouts.main-layouts')

@section('main')
<section class="container-fluid">
    <section class="container mt-5 pt-5 text-dark d-flex justify-content-center">


        <div class="card" style="width: 18rem;">
            <img src="{{$project -> project_img}}" class="card-img-top" alt="...">
            <div class="card-body">
                <span class="fw-bold">{{$project -> name}}</span>
                <p class="card-text">{{$project -> project_description}}</p>
            </div>
        </div>


    </section>
</section>
@endsection