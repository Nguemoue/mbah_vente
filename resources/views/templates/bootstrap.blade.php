
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <title>{{config('app.name')}}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    {{-- fa icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    {{-- best police font --}}
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    {{-- custom styles --}}
    @stack('styles')
    <!-- Custom styles for this template -->
    <link href="{{asset('css/templates/starter-template.css')}}" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto ml-2">
            <li @class(["nav-item","active"=>request()->routeIs('home')])>
                <a class="nav-link" href="{{route('home')}}">
                    {{--icon--}}
                    <i class="fas fa-home"></i>
                    Home
                    @if(request()->routeIs('home'))
                        <span class="sr-only">(current)</span>
                    @endif

                </a>
            </li>
            <li @class(["nav-item","active"=>request()->routeIs('certificate.create')])>
                <a class="nav-link" href="{{route('certificate.create')}}">
                    {{--icon--}}
                    <i class="fas fa-plus"></i>
                    New Certificate
                    {{--if current route is certificate.create--}}
                    @if(request()->routeIs('certificate.create'))
                        <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>
            <li @class(["nav-item","active"=>request()->routeIs('certificate.index')])>
                <a class="nav-link" href="{{route('certificate.index')}}">
                    {{--icon--}}
                    <i class="fas fa-list"></i> Certificates List
                    {{--if current route is certificate.index--}}
                    @if(request()->routeIs('certificate.index'))
                        <span class="sr-only">(current)</span>
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.personal_data')}}">
                    {{--icon--}}
                    <i class="fas fa-user"></i>
                    My Personal data

                    <span class="sr-only">(current)</span></a>
            </li>

            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}}</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Dashboard</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            @endauth
        </ul>
        <div class="my-2 my-lg-0">
            <a href="{{route('dashboard')}}" class="btn btn-outline-success my-2 my-sm-0" type="submit">Dashboard</a>
        </div>
    </div>
</nav>

<main role="main" class="container-fluid">
    @yield('content')

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@stack('scripts')
</body>
</html>
