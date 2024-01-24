<nav class="main-header navbar navbar-expand navbar-{{ Auth::user()->mode }} navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" name="submit" value="Log out" class="btn btn-primary btn-sm">
                    {{-- <a :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a> --}}
                </form>
        </li>
    </ul>
</nav>
