@extends('layouts.main-layouts')

@section('main')
    <section class="container-fluid">
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

                    <a href="#" class="btn btn-primary rounded-pill">
                        Here Me
                    </a>
                </div>
    
                <div class="d-flex justify-content-center w-25">
                    <img class="shadow rounded-circle" src="https://www.w3schools.com/howto/img_avatar.png" alt="profile img">
                </div>

            </div>


        </div>
    </section>
@endsection