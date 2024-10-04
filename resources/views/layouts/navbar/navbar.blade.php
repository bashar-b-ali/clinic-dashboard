<header class="adminuiux-header">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid"><button class="btn btn-link btn-square sidebar-toggler" type="button" onclick="initSidebar()"><i class="sidebar-svg" data-feather="menu"></i></button>
            <a class="navbar-brand" href="{{ route('main') }}">
                
                <img data-bs-img="light" src="fonts/logo-light.svg" alt> <img data-bs-img="dark" src="fonts/logo.svg" alt>
                <div class><span class="company-name text-uppercase h4"><b>Digi</b>Clinic</span>
                    <p class="company-tagline">AdminUIUX HTML template</p>
                </div>

            </a>
            <div class="collapse navbar-collapse right-in-device" id="header-navbar">
                <ul class="navbar-nav mx-lg-3 mb-2 mb-md-0">
                    <li class="nav-item"><a class="nav-link" href="clinic-dashboard.html">Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-popper="static" href="#" role="button" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu width-200">
                            <div><a class="dropdown-item" href="clinic-profile.html">Clinic Profile</a></div>
                            <div><a class="dropdown-item" href="clinic-personalization.html">Branding</a></div>
                            <div><a class="dropdown-item" href="clinic-users.html">Users</a></div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <div><a class="dropdown-item" href="clinic-help-center.html"><i data-feather="help-circle" class="avatar avatar-18 me-1"></i> Help Center</a></div>
                            <div><a class="dropdown-item" href="clinic-onboarding.html"><i data-feather="settings" class="avatar avatar-18 me-1"></i> Onboarding</a></div>
                            <div>
                                <a class="dropdown-item theme-green" href="clinic-pages.html">
                                    <div class="row gx-0">
                                        <div class="col"><i data-feather="layers" class="avatar avatar-18 me-1"></i> All Pages</div>
                                        <div class="col-auto"><span class="badge text-bg-danger">40+</span></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ms-auto"></div>
        
            <div class="ms-auto">
                <button class="btn btn-link btn-square btnsunmoon btn-link-header" id="btn-layout-modes-dark-page"><i class="sun mx-auto" data-feather="sun"></i> <i class="moon mx-auto" data-feather="moon"></i></button>
                <button class="btn btn-link btn-square btn-icon btn-link-header d-inline-block d-xxl-none" type="button" onclick="openSearch()"><i data-feather="search"></i></button>
        
                
           
                <div class="dropdown d-inline-block">
                    <a class="dropdown-toggle btn btn-link btn-link-header style-none" id="userprofiledd" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        <div class="row gx-0 d-inline-flex">
                            <div class="col-auto align-self-center">
                                <figure class="avatar avatar-28 rounded-circle coverimg vm"><img src="images/user-6.jpg" alt id="userphotoonboarding2"></figure>
                            </div>
                            <div class="col align-self-center d-none d-xl-block px-2">
                                <span class="mb-0">

                                    AdminUIUX
                                
                                </span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end width-300 pt-0 px-0 sm-mi-45px" aria-labelledby="userprofiledd">
                        <div class="bg-theme-1-space rounded py-3 mb-3 dropdown-dontclose">
                            <div class="row gx-0">
                                <div class="col-auto px-3">
                                    <figure class="avatar avatar-50 rounded-circle coverimg vm"><img src="images/user-6.jpg" alt></figure>
                                </div>
                                <div class="col align-self-center">
                                    <p class="mb-1">
                                        <span>
                                            AdminUIUX
                                        </span>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="px-2">
                            <div>
                                <a class="dropdown-item" href="clinic-myprofile.html">
                                    <i data-feather="user" class="avatar avatar-18 me-1"></i>
                                    My Profile
                                </a>
                            </div>
                            <div>
                                <a class="dropdown-item" href="clinic-dashboard.html">
                                    <div class="row g-0">
                                        <div class="col align-self-center"><i data-feather="layout" class="avatar avatar-18 me-1"></i> My Dashboard</div>
                                        <div class="col-auto">
                                            <figure class="avatar avatar-20 coverimg rounded-circle"><img src="images/user-1.jpg" alt></figure>
                                            <figure class="avatar avatar-20 coverimg rounded-circle"><img src="images/user-2.jpg" alt></figure>
                                            <figure class="avatar avatar-20 coverimg rounded-circle"><img src="images/user-4.jpg" alt></figure>
                                            <div class="avatar avatar-20 bg-theme-1 rounded-circle text-center vm"><small class="fs-10 vm">9+</small></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div><a class="dropdown-item" href="clinic-earning.html"><i data-feather="dollar-sign" class="avatar avatar-18 me-1"></i> Earning</a></div>
                            <div>
                                <a class="dropdown-item" href="clinic-mysubscription.html">
                                    <div class="row">
                                        <div class="col"><i data-feather="gift" class="avatar avatar-18 me-1"></i> Subscription</div>
                                        <div class="col-auto">
                                            <p class="small text-success">Upgrade</p>
                                        </div>
                                        <div class="col-auto"><span class="arrow bi bi-chevron-right"></span></div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown open-left dropdown-dontclose">
                                <a class="dropdown-item" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                                    <div class="row">
                                        <div class="col"><i class="bi bi-translate avatar avatar-18 me-1"></i> Language</div>
                                        <div class="col-auto"><small class="vm">EN - English</small> <i class="bi bi-translate"></i></div>
                                        <div class="col-auto"><span class="arrow bi bi-chevron-right"></span></div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div><a class="dropdown-item active" data-value="EN">EN - English</a></div>
                                    <div><a class="dropdown-item" data-value="FR">FR - French</a></div>
                                    <div><a class="dropdown-item" data-value="CH">CH - Chinese</a></div>
                                    <div><a class="dropdown-item" data-value="HI">HI - Hindi</a></div>
                                </div>
                            </div>
                            <div><a class="dropdown-item" href="clinic-settings.html"><i data-feather="settings" class="avatar avatar-18 me-1"></i> Account Setting</a></div>
                            <div><a class="dropdown-item theme-red" href="clinic-login.html"><i data-feather="power" class="avatar avatar-18 me-1"></i> Logout</a></div>
                        </div>
                    </div>
                </div><button class="navbar-toggler btn btn-link btn-link-header btn-square btn-icon collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#header-navbar" aria-controls="header-navbar" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="more-vertical" class="openbtn"></i> <i data-feather="x" class="closebtn"></i></button></div>
        </div>
    </nav>
    <div class="adminuiux-search-full">
        <div class="row gx-2 align-items-center">
            <div class="col-auto"><button class="btn btn-square btn-icon" type="button" onclick="closeSearch()"><i data-feather="arrow-left"></i></button></div>
            <div class="col"><input class="form-control pe-0 border-0" type="search" placeholder="Type something here..."></div>
            <div class="col-auto">
                <div class="dropdown input-group-text border-0 p-0"><button class="dropdown-toggle btn btn-link no-caret" type="button" id="searchfilter2" data-bs-toggle="dropdown" aria-expanded="false"><i data-feather="sliders"></i></button>
                    <div class="dropdown-menu dropdown-menu-end dropdown-dontclose width-300"
                        aria-labelledby="searchfilter">
                        <ul class="nav adminuiux-nav" id="searchtab2" role="tablist">
                            <li class="nav-item" role="presentation"><button class="nav-link active" id="searchall-tab2" data-bs-toggle="tab" data-bs-target="#searchall2" type="button" role="tab" aria-controls="searchall2" aria-selected="true">All</button></li>
                            <li class="nav-item" role="presentation"><button class="nav-link" id="searchorders-tab2" data-bs-toggle="tab" data-bs-target="#searchorders2" type="button" role="tab" aria-controls="searchorders2" aria-selected="false" tabindex="-1">Orders</button></li>
                            <li class="nav-item"
                                role="presentation"><button class="nav-link" id="searchcontacts-tab2" data-bs-toggle="tab" data-bs-target="#searchcontacts2" type="button" role="tab" aria-controls="searchcontacts2" aria-selected="false" tabindex="-1">Contacts</button></li>
                        </ul>
                        <div class="tab-content py-3" id="searchtabContent2">
                            <div class="tab-pane fade active show" id="searchall2" role="tabpanel" aria-labelledby="searchall-tab2">
                                <ul class="list-group adminuiux-list-group list-group-flush bg-none show">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Search apps</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch1"> <label class="form-check-label" for="searchswitch1"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Include Pages</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch2" checked> <label class="form-check-label" for="searchswitch2"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Internet resource</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch3" checked> <label class="form-check-label" for="searchswitch3"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">News and Blogs</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch4"> <label class="form-check-label" for="searchswitch4"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="searchorders2" role="tabpanel" aria-labelledby="searchorders-tab2">
                                <ul class="list-group adminuiux-list-group list-group-flush bg-none show">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Show order ID</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch5"> <label class="form-check-label" for="searchswitch5"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">International Order</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch6" checked> <label class="form-check-label" for="searchswitch6"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Taxable Product</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch7" checked> <label class="form-check-label" for="searchswitch7"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Published Product</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch8"> <label class="form-check-label" for="searchswitch8"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="searchcontacts2" role="tabpanel" aria-labelledby="searchcontacts-tab2">
                                <ul class="list-group adminuiux-list-group list-group-flush bg-none show">
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Have email ID</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch9"> <label class="form-check-label" for="searchswitch9"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Have phone number</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch10" checked> <label class="form-check-label" for="searchswitch10"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Photo available</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch11" checked> <label class="form-check-label" for="searchswitch11"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col">Referral</div>
                                            <div class="col-auto">
                                                <div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" id="searchswitch12"> <label class="form-check-label" for="searchswitch12"></label></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class>
                            <div class="row">
                                <div class="col"><button class="btn btn-link">Reset</button></div>
                                <div class="col-auto"><button class="btn btn-theme">Apply</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>