<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <section class="sidebar">
        <a href="{{ route('home') }}" class="brand-link">
            <!-- <img src="https://assets.infyom.com/logo/blue_logo_150x150.png"
                alt="{{ config('app.name') }} Logo"
                class="brand-image img-circle elevation-3"> -->
            <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
        </a>

        <ul class="sidebar-menu" data-widget="tree" >
            <nav class="mt-3">
                <li>
                    <a href="{{url("/home")}}"><i class="fa fa-home"></i> Home</a>
                </li>
            </nav>
            <nav class="mt-3">
                <li>
                    <a href="{{url("/create")}}"><i class="fa fa-plus"></i> New Form Create</a>
                </li>
            </nav>
            <div class="dropdown-divider"></div>
            <nav class="mt-3">
                @yield("menu")
            </nav>
        </ul>
            <!-- <nav class="mt-2">
                <li>
                    <a href="{{url("/home")}}"><i class="fa fa-home"></i>  Home</a>
                </li>
            </nav>

            <nav class="mt-2">
                <li>
                    <a href="{{url("/create")}}"><i class="fa fa-plus"></i>  New Form Create</a>
                </li>
            </nav>
            
            <div class="dropdown-divider"></div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    @include('layouts.menu')
                </ul>
            </nav> -->
    </section>
</aside>
