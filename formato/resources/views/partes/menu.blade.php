<div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ url('/') }}">
                        Styde Inicio <span class="glyphicon glyphicon-home" aria-hidden="true">
                    </a>
                </li>
                

                
                <li id="fondocolor">
                    <a href="{{ url('/auth/logout') }}" >Cerrar Sesion de  {{ Auth::user()->name }}</a>
                </li>
            </ul>
        </div>

        