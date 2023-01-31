<nav style="margin-left: 15px; margin-top: 10px; border-radius: 1em;" id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('resepsionis') ? 'active' : '' }}" aria-current="page" href="/resepsionis">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('resepsionis/kode-booking*') ? 'active' : '' }}"
                    href="/resepsionis/kode-booking">
                    <span data-feather="list" class="align-text-bottom"></span>
                    Kode Booking
                </a>
            </li>
        </ul>

        {{-- @can('admin')
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1">
            <span>Administrator</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" aria-current="page"
                    href="#">
                    <span data-feather="grid" class="align-text-bottom"></span>
                    Post Categories
                </a>
            </li>
        </ul>
        @endcan  --}}
    </div>
</nav>