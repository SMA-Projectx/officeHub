@extends('layouts.frontend')

@section('title')
    Register
@endsection

@section('banner')
    @include('partials.frontend.inner-banner')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <section id="contact" class="margin-bottom-70">
                    <h4><i class="sl sl-icon-user-follow"></i> Register</h4>
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="bg-danger" style="font-weight: bold;padding: 10px 20px;margin-bottom: 10px;">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <form id="contactform" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username</label>
                                <input name="username" type="text" placeholder="Username" required />
                            </div>
                            <div class="col-md-6">
                                <label>Email Address</label>
                                <input name="email" type="email" placeholder="Email" required />
                            </div>
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input name="first_name" type="text" placeholder="First Name" required />
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input name="last_name" type="text" placeholder="Last Name" required />
                            </div>
                            <div class="col-md-6">
                                <label>Password</label>
                                <input name="password" type="password" placeholder="Password" required />
                            </div>
                            <div class="col-md-6">
                                <label>Re-Password</label>
                                <input name="password_confirmation" type="password" placeholder="Re Password" required />
                            </div>

                            <div class="col-md-4">
                                <label>Gender</label>
                                <select class="utf_chosen_select" name="gender">
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Register As a</label>
                                <select class="utf_chosen_select" name="role_id">
                                    <option value="3">User</option>
                                    <option value="2">Seller</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="submit button" id="submit" style="margin-top: 20px;">Register</button>
                    </form>
                </section>
            </div>

            <div class="col-md-5">
                <div class="utf_box_widget margin-bottom-70">
                    <h3><i class="sl sl-icon-login"></i> Already a User?</h3>
                    <a href="{{ route('login') }}" class="submit button" >Login</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')

@endsection

@section('js')

@endsection

@section('styles')

@endsection

@section('script')

@endsection
