<navigation :user="{{Auth::user()}}">
    <template #logo>
        <a href="{{ url('/') }}" class="navigation__logo">MVS</a>
    </template>
    @guest
        <template #links>
            @if (Route::has('login'))
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        </template>
    @else
        <template #dropdown>
            @if (Auth::user())
                <a href="{{ route('admin.index') }}">Admin</a>
            @endif
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </template>
    @endguest
</navigation>