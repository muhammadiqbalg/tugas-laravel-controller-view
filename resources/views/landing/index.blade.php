@extends('component.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row align-items-start">
            <div class="col align-self-center">
                <h5>Hello Everyone, My name is</h5>
                <h1>Muhammad Iqbal Gobel</h1>
                <h3>I'm a Fullstack Web Developer</h3>
                <p>
                    I'm ready start my career to be Fullstack Web Developer
                </p>
                <a class="btn btn-dark mt-3 mb-3" href="{{ url('/profile') }}" role="button">About Me</a>
            </div>
            <div class="col">
                <div class="text-center">
                    <img src="{{ asset('asset\image\Hero1.jpg') }}" class="hero rounded-full h-100s w-100 overflow-hidden" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection