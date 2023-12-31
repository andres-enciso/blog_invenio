<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>@section('title') @show</title>
    @section('style')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nifty.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo-purpose/demo-settings.min.css')}}">
    @show
</head>

<body class="jumping">
    <div id="root" class="root mn--max hd--expanded">
        <section id="content" class="content">
            @section('container')
            @show
            <footer class="mt-auto">
                <div class="content__boxed">
                    <div class="content__wrap py-3 py-md-1 d-flex flex-column flex-md-row align-items-md-center">
                        <div class="text-nowrap mb-4 mb-md-0">Andres Enciso Hernandez<a href="https://github.com/andres-enciso/blog_invenio" class="ms-1 btn-link fw-bold">Prueba tecnica</a></div>
                        <nav class="nav flex-column gap-1 flex-md-row gap-md-3 ms-md-auto" style="row-gap: 0 !important;">
                            <a class="nav-link px-0" href="#">Invenio Talento</a>
                        </nav>
                    </div>
                </div>
            </footer>
        </section>
    </div>

    @section('script')
    <script src="{{asset('vendors/popperjs/popper.min.js')}}" defer></script>
    <script src="{{asset('vendors/bootstrap/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('js/nifty.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @show
</body>

</html>