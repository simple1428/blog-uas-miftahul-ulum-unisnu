
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
        <!-- Styles -->
        <link href="{{ asset('isAdmin/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('isAdmin/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('isAdmin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('isAdmin/css/lib/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('isAdmin/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('isAdmin/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('isAdmin/css/lib/weather-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('isAdmin/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('isAdmin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('isAdmin/css/lib/helper.css') }}" rel="stylesheet">
        <link href="{{ asset('isAdmin/css/style.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('trix.css') }}">
        <script type="text/javascript" src="{{ asset('trix.js') }}"></script>
        <style>
          trix-toolbar [data-trix-button-group="file-tools"]{
            display:none;
          }
        </style>
    </head>
    
    <body> 
        @include('admin.templates.sidebar')
        @include('admin.templates.navbar')
    @yield('content')
    @include('admin.templates.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</body>
</html>


