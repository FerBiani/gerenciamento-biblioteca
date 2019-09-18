<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biblioteca</title>

    <!-- STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    @yield('styles')
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-flex align-items-center" href="#">
            <a href="{{url('/')}}" class="ml-2"><b>Biblioteca</b></a>
        </a>

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mt-2 mt-lg-0 ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('clientes')}}">Clientes</a>
            </li>
        </div>
    </nav>

    <div class="row">
        @if (Session::has('success'))
            <script>
                window.onload = function() {
                    alertMsg('{{Session::get("success")}}', 'success')
                }
            </script>
        @endif

        @if (Session::has('warning'))
            <script>
                window.onload = function() {
                    alertMsg('{{Session::get("warning")}}', 'warning')
                }
            </script>
        @endif

        @if (Session::has('error'))
            <script>
                window.onload = function() {
                    alertMsg('{{Session::get("error")}}', 'error')
                }
            </script>
        @endif
    </div>

    <div class="container my-4">
        @yield('content')
    </div>

    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mask.min.js')}}"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });

        function alertMsg(msg, type) {
            Toast.fire({
                type: type,
                title: msg
            })
        }

        //mascaras
        $('.data').mask('99/99/9999');
        $('.cpf').mask('999.999.999-99')
    </script>
    @yield('scripts')
</body>
</html>