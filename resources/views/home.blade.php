@extends('layout.expo')

@section('content')
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Expo Locales!
        </a>
    </nav>
    <div class="container">
        <div class="row text-center mt-4">
            @foreach($locales as $local)
                <div class="col-sm-6 col-md-4 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Local {{$local->number}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                @if($local->status==0)
                                    <p class="text-success">Libre</p>
                                @else
                                    <p class="text-danger">Ocupado</p>
                                @endif
                            </h6>
                            @if($local->status==0)
                                <button class="btn btn-success" data-toggle="modal" data-target="#modalReserve">¡Reservar!</button>
                            @else
                                <button class="btn btn-info" data-toggle="modal" data-target="#modalDetails">Detalles</button>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('partials.formDetails')
    @include('partials.formReserve')
@endsection

