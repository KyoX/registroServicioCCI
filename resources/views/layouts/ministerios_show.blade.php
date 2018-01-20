@extends ('layouts.app')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/ministerios.css') }}" type="text/css" />
@endsection

@section('content')
    <div class="container ingreso_datos">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form method="POST" action="/ministerios">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" id="ministerio_id" aria-describedby="ministerio id" placeholder="ministerio_id"
                                name="ministerio_id" value="{{$ministerio->ministerio_id}}">

                        <label for="correo">Nombre Ministerio</label>

                        <input type="text" class="form-control" id="nombre_ministerio" aria-describedby="Nombre Ministerio" placeholder="Nombre Ministerio"
                                name="nombre_ministerio" value="{{$ministerio->nombre_ministerio}}" required>

                        @if ($errors->has('nombre_ministerio'))
                            <div class="alert alert-danger" role="alert">
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre_ministerio') }}</strong>
                                </span>
                            </div>
                        @endif

                    </div>
                    @unless ($ministerio->ministerio_id == null)
                    <button type="button" id="botonEliminar" class="btn btn-danger">Eliminar</button>
                    @endunless
                    <button type="submit" class="btn btn-dark">Guardar</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>

    @include('layouts.modal')

@endsection

@section('javascript')
    <script src="{{ asset('js/ministerios.js') }}"></script>
@endsection