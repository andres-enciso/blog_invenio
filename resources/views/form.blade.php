@extends('layout.base')

@section('title', 'Formulario')

@section('style')
@parent
<link rel="stylesheet" href="{{asset('vendors/tagin/tagin.min.css')}}">
<link rel="stylesheet" href="{{asset('vendors/bootstrap5-tags/bootstrap5-tags.min.css')}}">
@endsection
@section('container')

<section id="content" class="content">
    <div class="content__header content__boxed overlapping">
        <div class="content__wrap">
            <h1 class="page-title mb-0 mt-2">Blog</h1>
            <p class="lead">
                Crear Articulo
            </p>
            <div class="d-md-flex align-items-baseline mt-3">
                <a href="{{route('index')}}">
                    <button type="button" class="btn btn-light hstack gap-2 mb-3">
                        <i class="demo-psi-add fs-4"></i>
                        <span class="vr"></span>
                        Regresar
                    </button>
                </a>
            </div>
        </div>  
    </div>
    <div class="content__boxed">
        <div class="content__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Formulario</h5>
                            @if(isset($entrada))
                            <form class="row g-3" action="{{route('update.entrada')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="{{$entrada->id}}" name="id">
                                @else
                                <form class="row g-3" action="{{route('post.entrada')}}" method="POST" enctype="multipart/form-data">
                                    @endif
                                    @CSRF
                                    <div class="col-md-8">
                                        <label class="form-label">Título</label>
                                        <input type="text" name="titulo" @isset($entrada) value="{{ $entrada->titulo}}" @endisset class="form-control" placeholder="enuncia el contenido de la entrada." required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Tipo</label>
                                        <select class="form-select" name="tipo[]" multiple data-allow-new="true" data-allow-clear="true" required>
                                            <option value="news" @isset($entrada) @if(in_array('news', json_decode($entrada->tipo))) selected @endif @endisset>News</option>
                                            <option value="social" @isset($entrada) @if(in_array('social', json_decode($entrada->tipo))) selected @endif @endisset>Social</option>
                                            <option value="music" @isset($entrada) @if(in_array('music', json_decode($entrada->tipo))) selected @endif @endisset>Music</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" name="contenido" placeholder="Contenido" rows="14" required>@isset($entrada){{$entrada->contenido}}@endisset</textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@parent

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js" type="module"></script>

<script src="https://cdn.jsdelivr.net/gh/lekoala/bootstrap5-tags@master/tags.js" type="module"></script>

<script src="{{asset('js/forms-tags.js')}}" defer></script>
<script>
    $(document).ready(function() {

    });
</script>
@endsection