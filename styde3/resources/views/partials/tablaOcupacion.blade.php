<div class="tablita">
    <table class="table table-bordered table-striped">
        <thead>
                <th>#</th>
                <th>Fecha</th>
                <th>Disponibles</th>
                <th>Ocupados</th>
        </thead>
        @foreach($ocupa as $ocupacion)
            <tbody>
                    <td>{{{$ocupacion->id_est}}}</td>
                    <td>{{{$ocupacion->Fecha}}}</td>
                    <td>{{$ocupacion->CtosDisp}}</td>
                   <td>{{$ocupacion->CtosOcup}}</td>
            </tbody>
        @endforeach
    </table>
</div>