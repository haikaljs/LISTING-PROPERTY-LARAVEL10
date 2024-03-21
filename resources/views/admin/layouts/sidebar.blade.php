<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">

            <li class="menu-header">Starter</li>
            <li class="{{ setSidebarActive(['admin.dashboard.index']) }}"><a class="nav-link"
                    href="{{ route('admin.dashboard.index') }}"><i class="far fa-square"></i>
                    <span>Dashboard</span></a></li>

            <li class="dropdown {{ setSidebarActive(['admin.hero.index']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Sections</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.hero.index']) }}"><a class="nav-link"
                            href="{{ route('admin.hero.index') }}">Hero</a></li>

                </ul>
            </li>

            <li class="dropdown {{ setSidebarActive(['admin.category.index']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Listings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setSidebarActive(['admin.category.index']) }}"><a class="nav-link"
                            href="{{ route('admin.category.index') }}">Categories</a></li>

                </ul>
            </li>



        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="{{ route('home') }}" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Frontend
            </a>
        </div>
    </aside>
</div>
