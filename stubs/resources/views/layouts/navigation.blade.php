<nav>

    <a href="{{ route('dashboard') }}">
        <x-application-logo />
    </a>


    <!-- Navigation Links -->
    <a href="{{ route('dashboard') }}">
        {{ __('Dashboard') }}
    </a>

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">
            {{ __('Log Out') }}
        </a>
    </form>

</nav>
