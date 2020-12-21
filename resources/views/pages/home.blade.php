@extends('layouts.default',['title' => 'Home'])

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @guest
                    <h1 class="text-center">Map here!!!!!!</h1>
                @else
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in!
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
@stop
