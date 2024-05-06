<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('note.index') }}">Dashboard</a>
    <form action="{{ route('note.search') }}" method="GET" class="col-md-8 col-lg-6 me-0 px-3">
        <div class="flex">
            <input name="search" class="form-control-dark " type="text" placeholder="Search" aria-label="Search">
            <button type="submit" class="btn btn-sm btn-outline-secondary ">Search</button>
        </div>

    </form>


    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <div class="div">

                <a class="navbar-brand col-md-3 col-lg-2 me-0 p-2" href="">{{ Auth::user()->name }}
                </a>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="route('logout')"
                    onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>




        </div>
    </div>






</header>
