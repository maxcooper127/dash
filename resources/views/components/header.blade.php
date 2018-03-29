<nav class="navbar navbar-expand navbar-dark mai-top-header">
    <div class="container"><a href="{{ route('index') }}" class="navbar-brand"></a>


        <!--User Menu-->
        <ul class="nav navbar-nav float-lg-right mai-user-nav">
            <li class="dropdown nav-item"><a href="index.html#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle nav-link"><span class="user-name">  {{ Auth::user()->name }}</span><span class="angle-down s7-angle-down"></span></a>
                <div role="menu" class="dropdown-menu">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                        <span class="icon s7-power"> </span>Log Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                </div>
            </li>


        </ul>
    </div>
</nav>
