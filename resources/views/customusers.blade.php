@extends('layouts.auth')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        Hi there, normal user 
                        @auth
                   {{ Auth::user()->name }}
                   @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection