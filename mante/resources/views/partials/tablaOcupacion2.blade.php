<div class="tablita">

        <div class="form-group">
             {!! Form::label('Fecha:') !!}
             {!! Form::date('fecha', \Carbon\Carbon::now(),['class'=>'fecha']) !!}
        </div>

        <table class="table table-bordered table-striped" id="listaF">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ctos. Registrados</th>
                <th>Ctos. Ocupados</th>
                        
                       
            </thead>
            @foreach($estable as $establecimiento)
                <tr>
                    <td id="td_id">{{{$establecimiento->ID}}}</td>
                    <td id="nomb">{{{$establecimiento->Nombre}}}</td>
                    <td id="registra">{{$establecimiento->CuartosReg}}</td>
                    <td id="ocupa"><input type="number" id="text_12" value="0" min="0" max="{{$establecimiento->CuartosReg}}"  style="width:100px"></td>
                            
                </tr>
            @endforeach

        </table>
        <div class="form-group">
            <input type="button"  onclick="grabaTodoTabla('listaF');" value="Guardar" class="btn btn-primary">
       </div>

</div>


<script type="text/javascript">
// Actualiza de manera masiva todos los archivos cargados en la tercera pestaña.
function grabaTodoTabla(TABLAID){

    //tenemos 2 variables, la primera será el Array principal donde estarán nuestros datos y la segunda es el objeto tabla
    var DATA    = [];
    var TABLA   = $("#"+TABLAID+" tbody > tr");
 
    //una vez que tenemos la tabla recorremos esta misma recorriendo cada TR y por cada uno de estos se ejecuta el siguiente codigo
    TABLA.each(function(){
        //por cada fila o TR que encuentra rescatamos 3 datos, el ID de cada fila, la Descripción que tiene asociada en el input text, y el valor seleccionado en un select
        var ID      = $(this).find("td[id='td_id']").text(),
            NOM     = $(this).find("td[id='nomb']").text(),
            REGIS   = $(this).find("td[id='registra']").text(),
            OCUPA   = $(this).find("input[id*='text_']").val();
            FECHA   = $(".fecha").val();
        $(this).css("background-color", "#89e7f5");
        //entonces declaramos un array para guardar estos datos, lo declaramos dentro del each para así reemplazarlo y cada vez
        item = {};
        //si miramos el HTML vamos a ver un par de TR vacios y otros con el titulo de la tabla, por lo que le decimos a la función que solo se ejecute y guarde estos datos cuando exista la variable ID, si no la tiene entonces que no anexe esos datos.
        if(ID !== ''){
            item ["id"]             = ID;
            item ["ocupado"]        = OCUPA;
            item ['registrados']    = REGIS;
            item ['nombre']         = NOM;
            item ['fecha']          = FECHA;
            //una vez agregados los datos al array "item" declarado anteriormente hacemos un .push() para agregarlos a nuestro array principal "DATA".
            DATA.push(item);
        }
    });
    console.log(DATA);
 
    //eventualmente se lo vamos a enviar por PHP por ajax de una forma bastante simple y además convertiremos el array en json para evitar cualquier incidente con compativilidades.
    INFO    = new FormData();
    aInfo   = JSON.stringify(DATA);
 
    INFO.append('data', aInfo);
 
    $.ajax({
        data: INFO,
        type: 'POST',
        url : '{{ asset('/php/funciones_upload.php') }}',
        processData: false, 
        contentType: false,
        success: function(r){
            //Una vez que se haya ejecutado de forma exitosa hacer el código para que muestre esto mismo.
            swal("¡Bien Hecho!", "Has Guardado Toda la informacìon :)", "success");
           
        }
    });
}


</script>