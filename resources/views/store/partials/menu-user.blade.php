@if(Auth::check())
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> {{Auth::user()->name}} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="{{ url('/logout') }}" 
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  Finalizar sesión
              </a>
              <form id="logout-form" 
                    action="{{ url('/logout') }}" 
                    method="POST" 
                    style="display: none;">
                    {{ csrf_field() }}
              </form>
            </li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
@else
  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/login">Iniciar sesión</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="/register">Registro</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
@endif