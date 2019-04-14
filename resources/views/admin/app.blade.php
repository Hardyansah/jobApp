<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer-navbar/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->

    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

    <!-- Panggil Fungsi -->
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
 $('.table-paginate').dataTable();
 } );
    </script>
</head>

<body class="d-flex flex-column h-100">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color:rgb(0, 0, 61);">
            <a class=" navbar-brand " href="# ">JobAPP</a>
            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarCollapse
            " aria-controls="navbarCollapse " aria-expanded="false " aria-label="Toggle navigation ">
      <span class="navbar-toggler-icon "></span>
    </button>
            <div class="collapse navbar-collapse " id="navbarCollapse ">
                <ul class="navbar-nav mr-auto ">

                </ul>


                <div class="nav navbar-nav navbar-right ">
                    <!-- Authentication Links -->
                    @guest
                    <a href="{{ route( 'login') }} " class="btn btn-primary ">Login</a>
                    <p> </p>
                    <a href="{{ route( 'register') }} " class="btn btn-secondary ">Register</a> @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"
                            v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
                </div>


            </div>
        </nav>
    </header>
    <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:5" id="mySidebar">
        <br/>
        <br/>
        <br/>
        <button class="w3-bar-item w3-button w3-large" onclick="w3_close()">JobAPP &times;</button>
        <a href="{{route('admin.index')}}" class="w3-bar-item w3-button">Dashboard</a>
        <a href="{{route('admin.create')}}" class="w3-bar-item w3-button">Kelola User</a>
        <a href="{{route('cv.index')}}" class="w3-bar-item w3-button">Kelola CV</a>

    </div>

    <!-- Begin page content -->
    <main role="main " class="flex-shrink-0 ">
        <div class="container ">
            @if ($errors->any())
            <div class="alert alert-danger ">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-3 ">
        <div class="container ">
            <span class="text-muted "><i class="fa fa-copyright" ></i>Hardyansah Suwandi</span>
        </div>
    </footer>


    <script>
        function w3_open() {
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function w3_close() {
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("myOverlay").style.display = "none";
        }
    </script>
    <script src="{{ asset( 'js/app.js') }} "></script>
    <script src="{{ asset( 'js/custom.js') }} "></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js "><\//script>')
    </script>
    <script src="js/bootstrap.bundle.min.js "></script>
</body>

</html>