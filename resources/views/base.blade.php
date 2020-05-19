<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="frontend">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ФГИС «Меркурий»</title>

    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"/>
</head>
<body>

<div class="preloader" style="display: none"><span></span></div>

<div class="container-full">

    <header class="row">
        <nav class="navbar navbar-default" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="/">
                    ФГИС «Меркурий»
                </a>

            </div>

        </nav>
    </header>

    @yield('content')

</div>

<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootbox/bootbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/angular/angular.min.js')}}"></script>
<script src="{{asset('assets/vendor/angular-sanitize/angular-sanitize.min.js')}}"></script>
<script src="{{asset('assets/js/ui-bootstrap-tpls-2.5.0.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/listcontroller.js')}}"></script>
<script src="{{asset('assets/js/formcontroller.js')}}"></script>
<script src="{{asset('js/laroute.js')}}"></script>

</body>
</html>