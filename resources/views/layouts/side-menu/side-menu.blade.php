<div class="adminuiux-sidebar" style="border-right: 1px solid #ced7e0;">
    <div class="adminuiux-sidebar-inner">
        <div class="px-3 not-iconic mt-3">
            <div class="row">
                <div class="col align-self-center">
                    <p class="h6">Main Menu</p>
                </div>
                <div class="col-auto"><a class="btn btn-link btn-square" data-bs-toggle="collapse" data-bs-target="#usersidebarprofile" aria-expanded="false" role="button" aria-controls="usersidebarprofile"><i data-feather="user"></i></a></div>
            </div>
            <div class="text-center collapse" id="usersidebarprofile">
                <figure class="avatar avatar-100 rounded-circle coverimg my-3"><img src="images/user-6.jpg" alt></figure>
                <p class="mb-1 h5">Dr. Alice</p>
                <p class="small">The Clinical UI Kit</p>
            </div>
        </div>
        <ul class="nav flex-column menu-active-line my-3">
            <li class="nav-item"><a href="{{ route('main') }}" class="nav-link"><i class="menu-icon" data-feather="grid"></i> <span class="menu-name">Dashboard</span></a></li>
 
            <li class="nav-item"><a href="{{ route('appointment') }}" class="nav-link"><i class="menu-icon" data-feather="calendar"></i> <span class="menu-name">Schedule Calendar</span></a></li>

            <li class="nav-item"><a href="{{ route('main') }}" class="nav-link"><i class="menu-icon" data-feather="user-check"></i> <span class="menu-name">Staff</span></a></li>

            <li class="nav-item"><a href="{{ route('patients') }}" class="nav-link"><i class="menu-icon" data-feather="users"></i> <span class="menu-name">Patients</span></a></li>

            <li class="nav-item"><a href="clinic-billing.html" class="nav-link"><i class="menu-icon bi bi-cash-stack"></i> <span class="menu-name">Billings</span></a></li>
            
            <li class="nav-item dropdown"><a href="javascrit:void(0)" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="menu-icon" data-feather="folder"></i> <span class="menu-name">Documents</span></a>
                <div class="dropdown-menu">
                    <div class="nav-item"><a href="clinic-patients-documents.html" class="nav-link"><i class="menu-icon" data-feather="users"></i> <span class="menu-name">Patient Documents</span></a></div>
                    <div class="nav-item"><a href="clinic-staff-documents.html" class="nav-link"><i class="menu-icon" data-feather="briefcase"></i> <span class="menu-name">Staff Documents</span></a></div>
                </div>
            </li>
            <li class="nav-item"><a href="{{ route('personalize') }}" class="nav-link"><i class="menu-icon bi bi-palette h4"></i> <span class="menu-name">Personalize</span></a></li>
        </ul>
        <div class="mt-auto"></div>

        <ul class="nav flex-column menu-active-line">
            <li class="nav-item"><a href="clinic-settings.html" class="nav-link"><i class="menu-icon" data-feather="settings"></i> <span class="menu-name">Settings</span></a></li>
        </ul>
    </div>
</div>