@extends('layouts.frontend')

@section('title')
    Login
@endsection

@section('banner')
    @include('partials.frontend.inner-banner')
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <section id="contact" class="margin-bottom-70">
                    <h4><i class="sl sl-icon-login"></i> User Login</h4>
                    @if($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="bg-danger" style="font-weight: bold;padding: 10px 20px;margin-bottom: 10px;">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif
                    <form id="contactform" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input name="email" type="email" placeholder="Email" required />
                            </div>
                            <div class="col-md-6">
                                <input name="password" type="password" placeholder="Password" required />
                            </div>
                        </div>
                        <button type="submit" class="submit button" id="submit" >Login</button>
                    </form>
                </section>
            </div>

            <div class="col-md-5">
                <div class="utf_box_widget margin-bottom-70">
                    <h3><i class="sl sl-icon-user-follow"></i> Not a Registered User?</h3>
                    <a href="{{ route('register') }}" class="submit button" >Register</a>
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
