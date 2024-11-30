<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Manajemen Persuratan</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                @auth
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{ Str::limit(Auth::user()->name, 10, '...') }}</a></li>
                @endauth
                    {{-- <li><a href="#"><span class="glyphicon glyphicon-globe"></span></a></li> --}}
                    <li>
                    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
