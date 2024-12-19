@extends('theme.master')
@section('title', 'Login')

@section('content')
@include('theme.partials.hero', ['title' => 'Login'])

<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="{{ route('login.store') }}" class="form-contact contact_form" method="post" novalidate="novalidate">
                    @csrf

                    <!-- Email -->
                    <div class="form-group">
                        <input class="form-control border" name="email" type="email"
                            placeholder="Enter email address" value="{{ old('email') }}">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <input class="form-control border" name="password" type="password"
                            placeholder="Enter your password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="{{ route('register') }}" class="mr-2">You don't have an account?</a>
                        <div class="form-group text-center text-md-right mt-3">
                            <button type="submit" class="button button--active button-contactForm">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
@endsection