@extends('layout.expo')

@section('content')
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            Expo Locales
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
                                @if($local->status==0) <p class="text-success">Libre</p>
                                @else <p class="text-danger">Ocupado</p>
                                @endif
                            </h6>
                            @if($local->status==0) <button class="btn btn-success btn-reservation" data-local="{{$local->id}}">¡Reservar!</button>
                            @else <button class="btn btn-info btn-details" data-local="{{$local->id}}">Detalles</button>
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

@push('scripts')
<script>
    $(function(){

        /* Consultar los detalles de la reservación */
        $(".btn-details").on('click',function(){
            var local = $(this).data('local');
            $(".localNumber").html(local);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url  : "{{route('getInfo')}}",
                type : "post",
                data : {"local" : local}
            }).done(function(data){
                $("#contentImage").html('<img src="{{asset('storage/companies/logos')}}/'+data.info.company.logo+'"  alt="'+data.info.company.name+'" class="img-thumbnail img-company">');
                $("#detailCompany").val(data.info.company.name);
                $("#detailRFC").val(data.info.company.rfc);
                $("#detailStartDate").val(data.info.start_date);
                $("#detailEndDate").val(data.info.end_date);
                $("#detailDescription").val(data.info.company.description);
                $("#modalDetails").modal("show");
            }).fail(function(msg){
                alert("Por el momento el servicio no está disponible, intente más tarde. Disculpe las molestias.");
            });
        });

        /* Lanzar modal para reservación */
        $(".btn-reservation").on('click',function(){
            var local = $(this).data('local');
            $(".localNumber").html(local);
            $("#modalReserve").modal("show");
        });

        /* Mostrar/Ocultar carga de logo */
        $("#uploadLogo").on('click',function(){
            if($(this).is(':checked')) $("#contentLogo").removeClass('d-none');
            else $("#contentLogo").addClass('d-none');
        });

    });
</script>
@endpush
