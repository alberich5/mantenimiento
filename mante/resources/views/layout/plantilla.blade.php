<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mantenimiento</title>
  
    {!!Html::style('css/bootstrap.css')!!}
    {!!Html::style('css/simple-sidebar.css')!!}
    {!!Html::style('css/contenido.css')!!}
    {!!Html::style('js/lib/sweetalert.css')!!}

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/lib/sweetalert.min.js')!!}
    
 
</head>

<body>

    <div id="wrapper">

        <!-- Menu lateral -->
       


        <!-- Contenido del boton -->
        @include('partes.boton') 
       



        @yield('content')

    </div>
    <!-- fin del wrapper -->

    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    <script src="{{ asset('/assets/js/jquery.ripples.js') }}"></script>
    <script src="{{ asset('/assets/js/agua.js') }}"></script>

     

    <!-- scrip de lazamiento del boton -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
