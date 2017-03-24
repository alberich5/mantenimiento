<div class="tablita">
    <table class="table table-bordered table-striped">
        <thead>
                <th>#</th>
                <th>Nombre</th>
                <th>Folio</th>
                <th>Operaciones</th>
        </thead>
        @foreach($local as $localidad)
            <tbody>
                <form >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <td><input type="text" value="{{{$localidad->cve_local}}}" name="id" style="width:80px" readonly="readonly"></td>
                    <td><input type="text" value="{{{$localidad->nom_local}}}" name="nombre"></td>
                    <td><input type="text" value="{{$localidad->Folio}}" name="folio"></td>
                    <td>
                       <input type="submit" value="Eliminar" class="btn btn-primary">
                    </td>
                </form>
            </tbody>
        @endforeach
    </table>

        <script type="text/javascript">
        $(document).ready(function(){
    $('form').submit(function(e){
        e.preventDefault();

        var data = $(this).serializeArray();
        data.push({name: 'tag', value: 'login'});

        $.ajax({
            url: '{{ asset('/php/actulizarLocal.php') }}',
            type: 'post',
            dataType: 'json',
            data:data,
            beforeSend: function(){
                $('.fa').css('display','inline');
            }
            
        })
        .done(function(){
            alert("falso");
        })
        .fail(function(){
            swal("Bien Hecho!", "Actualizado", "success");
        })
        .always(function(){
            $('.fa').hide();
        });
    })
});

    </script>

</div>
