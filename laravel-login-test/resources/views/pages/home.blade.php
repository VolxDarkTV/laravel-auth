@extends('layouts.main-layouts')

@section('main')
<section id="about_me">
    <section class="my_background container-fluid mt-5 text-light">
        <div class="container">
            {{-- Title --}}
            <div class="d-flex flex-column align-items-center mt-3 p-4">
                <h2>My Work</h2>
                <span class="text-muted" style="font-size: 0.9rem;">
                    In this 6 months
                </span>
            </div>

            {{-- Illustrate --}}
            <div class="container d-flex align-items-center justify-content-around">

                <div class="p-4 w-25">
                    <span>Hello</span>
                    <h2 class="py-3 fw-bold">I'm Vincenzo</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora fugiat optio excepturi consectetur deleniti nihil aperiam non, eligendi amet accusantium voluptates modi voluptatum minus consequatur nemo temporibus architecto commodi beatae.</p>

                    <a href="{{route('project')}}" class="btn btn-primary rounded-pill">
                        My Projects
                    </a>
                </div>
                
                <div class="d-flex flex-column align-items-center">
                    <a href="https://www.linkedin.com/in/vincenzo-foti-aa5b1a263/" class="d-flex justify-content-center rounded-circle border border-white border-3">
                        <img class="shadow rounded-circle" src="https://media.licdn.com/dms/image/D4E03AQFGJ00qcxpDTw/profile-displayphoto-shrink_200_200/0/1674861315171?e=1681344000&v=beta&t=oJcUpZl6rv3860njAAk5_bh23d0H4tX6y15NecXSkxU" alt="profile img">
                    </a>
                    <a href="https://www.linkedin.com/in/vincenzo-foti-aa5b1a263/" class="text-primary fs-3"><i class="fa-brands fa-linkedin"></i></a>
                </div>

            </div>


        </div>
    </section>
</section>
@endsection