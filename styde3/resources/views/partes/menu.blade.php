<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                        Styde Inicio <span class="glyphicon glyphicon-home" aria-hidden="true">
                    </a>
                </li>
                <li id="mostrar">
                    CAPTURA DE INFORMACION
                </li>
                <li>
                    <a href="{{ url('/ocupacion/create?local=0&cate=0') }}">Hotelero<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                </li>
                
               @if (Auth::user()->name == 'Admin')
                   <li>
                        <a href="{{ url('/localidad/create') }}">Localidad<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    </li>
                    <li>
                        <a href="{{ url('/establecimiento/create') }}">Establecimiento<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    </li>
                    <li>
                        <a href="{{ url('/precio/create') }}">Precio<span class="glyphicon glyphicon-pencil" aria-hidden="true"></a>
                    </li>
               @endif
               
               
                
                <li id="mostrar">
                    CONSULTAS
                </li>
                
                <li>
                    <a href="{{ url('/establecimiento?local=1') }}">Establecimientos<span class="glyphicon glyphicon-search" aria-hidden="true"></a>
                </li>
                <li >
                    <a href="{{ url('/localidad') }}" >Localidades<span class="glyphicon glyphicon-search" aria-hidden="true"></a>
                </li>
                <li >
                    <a href="{{ url('/ocupacion') }}" >Ocupacion<span class="glyphicon glyphicon-search" aria-hidden="true"></a>
                </li>
                 <li id="mostrar">
                    REPORTES
                </li>
                <li >
                    <a href="{{ url('/reporte') }}" >Reportes<span class="glyphicon glyphicon-search" aria-hidden="true"></a>
                </li>
                
                
                <li id="mostrar">
                    Salir
                </li>
                
                
                <li id="fondocolor">
                    <a href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a>
                </li>
            </ul>
        </div>