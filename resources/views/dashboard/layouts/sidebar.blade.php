<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/portofolio*') ? 'active' : '' }}" href="/dashboard/portofolio">
                    <span data-feather="file-text" class="align-text-bottom"></span>
                    Portofolio
                </a>
            </li>
        </ul>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/blog*') ? 'active' : '' }}"
                    href="/dashboard/categories">
                    <span data-feather="grid" class="align-text-bottom"></span>
                    Blog
                </a>
            </li>
        </ul>

        <h6 class="sidebar-header d-flex justify-content-between align-items-center px-3 mt-4 mb text-muted">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link"
                    href="/">
                    <span data-feather="grid" class="align-text-bottom"></span>
                    Back to Home
                </a>
            </li>
        </ul>

    </div>
</nav>
