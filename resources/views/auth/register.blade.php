@extends('layout.app')
@section('title','Register')
@section('content')
<!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -100px;
        backdrop-filter: blur(30px);">
        <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-5">Register Now</h2>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="name"/>
                        <label class="form-label" for="form3Example1">Your name</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                        <input type="email" id="form3Example2" class="form-control" name="email" />
                        <label class="form-label" for="form3Example2">Email address</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example3" class="form-control" name="password"/>
                <label class="form-label" for="form3Example3">Password</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control" name="password_confirmation" />
                <label class="form-label" for="form3Example4">Confirm Password</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-3 ">
            <input type="file" id="image" name="image" class="form-control">
            <label for="image">Profile Photo</label>
            </div>


            <!-- Submit button -->
            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                Login
            </button>
            </form>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection