@extends('layout.base')

@section('title', 'Detalle')

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
                {{$entrada->titulo}}
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
            <div class="card my-3">
                <div class="card-body flex-grow-0">
                    <div class="d-flex align-items-start justify-content-between mb-3">
                        <h2 class="m-0 pe-4">{{$entrada->titulo}}</h2>
                    </div>
                    <article class="lh-lg">
                        <p class="mb-3">{{$entrada->contenido}}</p>
                        <div class="bg-light bg-opacity-50 p-3 rounded">
                            <h5>Categoria:</h5>
                            <nav class="nav">
                                @foreach(json_decode($entrada->tipo) as $tipo)
                                <div class="nav-link p-0 btn-link text-primary text-decoration-underline">{{$tipo}}</div>
                                @endforeach
                            </nav>
                        </div>
                    </article>
                    <div class="mt-1 pt-3 border-top d-flex align-items-center">
                        <div class="position-relative">
                            <small class="d-block text-muted me-2">Posted by</small>
                            <a href="#" class="h6 btn-link stretched-link text-decoration-underline text-truncate">{{$entrada->autor}}</a>
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

<script>
    $(document).ready(function() {

    });
</script>
@endsection