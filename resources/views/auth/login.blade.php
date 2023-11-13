<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <meta name="description" content="The login page allows a user to gain access to an application by entering their username and password or by authenticating using a social media login.">
    <title>Login | Nifty - Admin Template</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/nifty.min.css')}}">
</head>
<body class="">
    <div id="root" class="root front-container">

        <section id="content" class="content">
            <div class="content__boxed w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
                <div class="content__wrap">
                    <div class="card shadow-lg">
                        <div class="card-body">

                            <div class="text-center">
                                <h1 class="h3">Cuenta</h1>
                                <p>Inicia sesion</p>
                            </div>

                            <form class="mt-4" action="{{route('post.login')}}" method="POST">
                            @CSRF

                                <div class="mb-3">
                                    <input type="text" name="user" class="form-control" placeholder="Usuario" autofocus>
                                </div>

                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                                </div>

                                <div class="d-grid mt-3">
                                    <button class="btn btn-primary btn-lg" type="submit">Iniciar</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</body>

</html>