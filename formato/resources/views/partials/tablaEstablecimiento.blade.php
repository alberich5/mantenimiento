<div class="tablita">
    
    <table class="table table-bordered table-striped">
        <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Id localidad</th>
                <th>Categoria</th>
                <th>Ctos. Registrados</th>
                <th>Status</th>
                <th>Operaciones</th>
        </thead>
        @foreach($estable as $establecimiento)
            <tbody>
                    <form >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <td><input type="text" value="{{{$establecimiento->ID}}}" name="id" style="width:80px" readonly="readonly"></td>
                        <td><input type="text" value="{{{$establecimiento->Nombre}}}" name="nombre"></td>
                        <td>{{$establecimiento->Cve_Local}}</td>
                        <td><input type="text" value="{{$establecimiento->Categoria}}" name="categoria" style="width:80px"></td>
                        <td><input type="text" value="{{$establecimiento->CuartosReg}}" name="regis" style="width:80px"></td>
                        <td><input type="text" value="{{$establecimiento->status}}" name="status" style="width:80px"></td>
                        <td>
                        <input type="submit" value="actualizar" class="btn btn-primary">
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
            url: '{{ asset('/php/actulizar.php') }}',
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

