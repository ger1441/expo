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
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url  : "{{route('getInfo')}}",
                type : "post",
                data : {"local" : local}
            }).done(function(data){
                if(data.info.company.logo!="") $("#contentImage").html('<img src="{{asset('storage/companies/logos')}}/'+data.info.company.logo+'"  alt="'+data.info.company.name+'" class="img-thumbnail img-company">');
                else $("#contentImage").html('');
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
            $("#local").val(local);
            $("#formReserve")[0].reset();
            $("#contentLogo").addClass('d-none');
            $("#result").html("");
            $("#modalReserve").modal("show");
        });

        /* Mostrar/Ocultar carga de logo */
        $("#uploadLogo").on('click',function(){
            if($(this).is(':checked')) $("#contentLogo").removeClass('d-none');
            else{
                $("#contentLogo").addClass('d-none');
                $("#logo").val("");
            }
        });

        /* Reservación */
        $("#formReserve").on('submit',function(e){
            e.preventDefault();
            var start = $("#start_date").val();
            var end   = $("#end_date").val();

            if(new Date(start).getTime() >= new Date(end).getTime()){
                $("#result").html('<p class="alert alert-info text-center">Por favor corrobore las fechas.</p>');
                return false;
            }

            if($("#uploadLogo").is(':checked')){
                if($("#logo").val()==""){
                    $("#result").html('<p class="alert alert-info text-center">Por favor adjunte su imagen.</p>');
                    return false;
                }
            }

            $("#result").html('<p class="alert alert-info text-center">Por favor espere...</p>');
            $("#btnRegister").prop('disabled',true);
            var formData = new FormData($("#formReserve")[0]);
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url  : "{{route('register')}}",
                type : "post",
                data : formData,
                contentType: false,
                processData: false
            }).done(function(data){
                if(data.res=="success"){
                    $("#result").html('<p class="alert alert-success text-center"><strong>¡Registro exitoso!</strong><br>Se envío un correo de confirmación</p>');
                    setTimeout(function(){ window.location.href = "{{route('home')}}" }, 1500);
                }else{
                    $("#result").html('<p class="alert alert-danger text-center">Por favor intente nuevamente.</p>');
                    $("#btnRegister").prop('disabled',false);
                }
            }).fail(function(msg){
                console.log(msg);
                $("#result").html('<p class="alert alert-danger text-center">Servicio no disponible, por favor intente más tarde.</p>');
                $("#btnRegister").prop('disabled',false);
            });

        });

    });
</script>
@endpush
