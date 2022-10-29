<header class="app-header">
    <div class="container-fluid">
        <div class="row gutters">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                    <i class="icon-chevron-thin-left"></i>
                </a>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">
                <a href="/" class="logo">
                    <img src="{{ asset('assets/img/brand_logo.svg') }}" alt="Wise" />
                </a>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                <ul class="header-actions">
                    <li class="dropdown">
                        <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                            <i class="icon-notifications_none"></i>
                            <span class="count-label"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
                            <ul class="imp-notify">
                                <li>
                                    <div class="icon">W</div>
                                    <div class="details">
                                        <p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">J</div>
                                    <div class="details">
                                        <p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon secondary">R</div>
                                    <div class="details">
                                        <p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <header class="app-header">
                        <div class="container-fluid">
                            <div class="row gutters">
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                                    <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler"
                                        aria-expanded="true">
                                        <i class="icon-chevron-thin-left"></i>
                                    </a>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-4">
                                    <a href="/" class="logo">
                                        <img src="{{ asset('assets/img/brand_logo.svg') }}" alt="Wise" />
                                    </a>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
                                    <ul class="header-actions">
                                        <li class="dropdown">
                                            <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                                <i class="icon-notifications_none"></i>
                                                <span class="count-label"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right lg"
                                                aria-labelledby="notifications">
                                                <ul class="imp-notify">
                                                    <li>
                                                        <div class="icon">W</div>
                                                        <div class="details">
                                                            <p><span>Wilson</span> The best Dashboard design I have seen
                                                                ever.</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon">J</div>
                                                        <div class="details">
                                                            <p><span>John Smith</span> Jhonny sent you a message. Read
                                                                now!</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="icon secondary">R</div>
                                                        <div class="details">
                                                            <p><span>Justin Mezzell</span> Stella, Added you as a
                                                                Friend. Accept it!</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown"
                                                aria-haspopup="true">
                                                <img class="avatar" src="{{ asset('assets/img/user.png') }}"
                                                    alt="User Thumb" />
                                                <span class="user-name">{{ auth()->user()->name }}</span>
                                                <i class="icon-chevron-small-down"></i>
                                            </a>
                                            <div class="dropdown-menu lg dropdown-menu-right"
                                                aria-labelledby="userSettings">
                                                <ul class="user-settings-list">
                                                    <li>
                                                        <a href="profile.html">
                                                            <div class="icon">
                                                                <i class="icon-account_circle"></i>
                                                            </div>
                                                            <p>Profile</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="profile.html">
                                                            <div class="icon red">
                                                                <i class="icon-cog3"></i>
                                                            </div>
                                                            <p>Settings</p>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="filters.html">
                                                            <div class="icon yellow">
                                                                <i class="icon-schedule"></i>
                                                            </div>
                                                            <p>Activity</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="logout-btn">
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();"
                                                        class="btn btn-primary">Logout</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </header>
                </ul>
            </div>
        </div>
    </div>
</header>
