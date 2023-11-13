@extends('layout.base')

@section('title', 'Dashboard')

@section('container')

<section id="content" class="content">
    <div class="content__header content__boxed overlapping">
        <div class="content__wrap">
            <h1 class="page-title mb-0 mt-2">Blog</h1>
            <p class="lead">
                Entradas
            </p>
            <div class="d-md-flex align-items-baseline mt-3">
                <a href="{{route('form', ['any' => 'nuevo'])}}"> <button type="button" class="btn btn-info hstack gap-2 mb-3">
                        <i class="demo-psi-add fs-4"></i>
                        <span class="vr"></span>
                        Agregar Articulo
                    </button>
                </a>
                <div class="d-flex align-items-center gap-1 text-nowrap ms-auto mb-3">
                    <form action="{{ route('buscar.entradas') }}" method="GET" class="d-flex align-items-center gap-1 text-nowrap ms-auto mb-3">
                        <span class="d-none d-md-inline-block me-2">Buscar por:</span>
                        <input class="form-control" type="text" name="busqueda" placeholder="Buscar...">
                        <button type="submit" class="btn btn-light">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="content__boxed">
        <div class="content__wrap">
            <div class="row">
                @foreach($entradas as $entrada)
                <div class="col-3" style="margin-left: 7px;">
                    <div class="row">
                        <div class="card mb-3">
                            <div class="card-body">
                                <a href="{{route('detalle', ['any' => $entrada->id])}}" class="d-inline-block h5 btn-link text-truncate mb-2">{{$entrada->titulo}}</a>
                                <p>{!! \Illuminate\Support\Str::limit($entrada->contenido, 70, '...') !!}</p>
                                <div class="mt-4 pt-3 border-top d-flex align-items-center gap-1">
                                    @foreach(json_decode($entrada->tipo) as $tipo)
                                    @if($tipo === 'News')
                                    <div class="badge bg-secondary">{{ $tipo }}</div>
                                    @elseif($tipo === 'social')
                                    <div class="badge bg-warning">{{ $tipo }}</div>
                                    @elseif($tipo === 'music')
                                    <div class="badge bg-success">{{ $tipo }}</div>
                                    @else
                                    <div class="badge bg-info">{{ $tipo }}</div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="mt-2 pt-3 d-flex align-items-center">
                                    <p><small class="">{{$entrada->autor}} / {{$entrada->fecha_publicacion}}</small></p>
                                    <div class="d-flex g-2 ms-auto">
                                        <a href="{{route('form', ['any' => $entrada->id])}}" class="btn btn-icon btn-sm btn-link text-head px-2 py-0">
                                            <i class="demo-pli-speech-bubble-5 fs-5 me-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@parent

<script>
    $(document).ready(function() {

    });
</script>
@endsection