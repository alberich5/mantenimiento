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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>  
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/lib/sweetalert.min.js')!!}
    
 <script type="text/javascript">
    function mostrar(id) {
        
        
        if (id == "autonomo") {
            $("#autonomo").show();
        }
        if (id == "preventivo") {
            $("#autonomo").hide();
        }
       if (id == "correctivo") {
            $("#autonomo").hide();
        }
    }
</script>
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

     

   

</body>

</html>
