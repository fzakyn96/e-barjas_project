<header id="page-topbar" class="ishorizontal-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/images/logo-sm.svg') }}" alt="" height="22">
                        {{-- <span class="logo-txt">E-Barjas</span> --}}
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('assets/images/logo-sm.svg') }}" alt="" height="22"> <span
                            class="logo-txt">E-Barjas</span>
                    </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item" data-bs-toggle="collapse"
                data-bs-target="#topnav-menu-content">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <div class="topnav">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-tachometer'></i>
                                    <span data-key="t-dashboards">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-file'></i>
                                    <span data-key="t-dashboards">Surat Permintaan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-comment'></i>
                                    <span data-key="t-dashboards">Berita Acara</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-transfer'></i>
                                    <span data-key="t-dashboards">Nota Dinas</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-check-shield'></i>
                                    <span data-key="t-dashboards">SPJ</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dropdown-toggle arrow-none" href="index.html" id="topnav-dashboard"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-list-ul'></i>
                                    <span data-key="t-dashboards">Log</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                    <i class='bx bx-cog'></i>
                                    <span data-key="t-pengaturan">Pengaturan</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-more">
                                    <div class="dropdown">
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                            role="button">
                                            <i class="bx bx-minus"></i>
                                            <span data-key="t-pengguna">Pengguna</span>
                                        </a>
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                            role="button">
                                            <i class="bx bx-minus"></i>
                                            <span data-key="t-role">Role</span>
                                        </a>
                                        <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                            role="button">
                                            <i class="bx bx-minus"></i>
                                            <span data-key="t-permission">Permission</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-feather="bell" ></i>
                    <span class="noti-dot bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notifications </h5>
                            </div>
                            <div class="col-auto">
                                <a href="javascript:void(0);" class="small"> Mark all as read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="bx bx-shopping-bag"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">New order has been placed</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Open the order confirmation or shipment
                                            confirmation.</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i
                                                class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-decoration-underline fw-bold text-center"
                            href="javascript:void(0)">
                            <span>View All <i class='bx bx-right-arrow-alt'></i></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <a class="dropdown-item" href="contacts-profile.html"><i
                            class='bx bx-user-circle text-muted font-size-18 align-middle me-1'></i> <span
                            class="align-middle">My Account</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="auth-lock-screen.html"><i
                            class='bx bx-lock text-muted font-size-18 align-middle me-1'></i> <span
                            class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="auth-logout.html"><i
                            class='bx bx-log-out text-muted font-size-18 align-middle me-1'></i> <span
                            class="align-middle">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>