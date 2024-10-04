@extends('layouts.master')

@section('body')
    <div class="container-fluid mt-3">
        <div class="bg-theme-1-subtle rounded px-3 py-3">
            <div class="row gx-3 align-items-center">
                <div class="col-12 col-md mb-2 mb-sm-0">
                    <p class="h5">Personalize</p>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item bi"><a href="clinic-dashboard.html">Home</a></li>
                            <li class="breadcrumb-item active bi" aria-current="page">Personalize</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-auto">
                    <div class="d-block text-center"><span class="avatar avatar-40 rounded-circle bg-r-gradient border"></span></div>
                </div>
                <div class="col-auto">
                    <div class="d-block text-center"><span class="avatar avatar-40 rounded-circle bg-theme-r-gradient"></span></div>
                </div>
                <div class="col-auto">
                    <div class="d-block text-center"><span class="avatar avatar-40 rounded-circle bg-theme-accent-r-gradient"></span></div>
                </div>
                <div class="col-auto">
                    <div class="d-block text-center"><span class="avatar avatar-40 rounded-circle bg-theme-l-gradient"></span></div>
                </div>
                <div class="col-auto">
                    <div class="d-block text-center"><span class="avatar avatar-40 rounded-circle bg-theme-accent-l-gradient"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4" id="main-content">
        <div class="row mb-4 mb-lg-4">
            <div class="col text-center">
                <h2>Do you love to see things around which you like the most?</h2>
                <p class="text-secondary">Why not for your application? Let's personalize your application experience for user interface now.</p>
            </div>
        </div>
        <div class="accordion adminuiux-accordion" id="personalizeAccord">
            <div class="accordion-item mb-4">
                <div class="accordion-header" id="personalizeAccordHOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalizeAccordOne" aria-expanded="true" aria-controls="personalizeAccordOne"><span class="h6">Choose your desired and loved theme color</span></button></div>
                <div id="personalizeAccordOne" class="accordion-collapse collapse show" aria-labelledby="personalizeAccordHOne" data-bs-parent="#personalizeAccord" style>
                    <div class="accordion-body">
                        <p class="text-secondary">Theme colors in web design are pivotal as they influence user emotions, perceptions, and actions.Theme colors in web design are pivotal as they influence user emotions, perceptions, and actions.</p>
                        <div class="row theme-select">
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-arrow-clockwise"></i></span>
                                    <p class="small">Default</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-blue"><span class="avatar avatar-60 rounded-circle mb-2 bg-blue"></span>
                                    <p class="small">Blue</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-indigo"><span class="avatar avatar-60 rounded-circle mb-2 bg-indigo"></span>
                                    <p class="small">Indigo</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-purple"><span class="avatar avatar-60 rounded-circle mb-2 bg-purple"></span>
                                    <p class="small">Purple</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-pink"><span class="avatar avatar-60 rounded-circle mb-2 bg-pink"></span>
                                    <p class="small">Pink</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-red"><span class="avatar avatar-60 rounded-circle mb-2 bg-red"></span>
                                    <p class="small">Red</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-orange"><span class="avatar avatar-60 rounded-circle mb-2 bg-orange"></span>
                                    <p class="small">Orange</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-yellow"><span class="avatar avatar-60 rounded-circle mb-2 bg-yellow"></span>
                                    <p class="small">Yellow</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-green"><span class="avatar avatar-60 rounded-circle mb-2 bg-green"></span>
                                    <p class="small">Green</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-teal"><span class="avatar avatar-60 rounded-circle mb-2 bg-teal"></span>
                                    <p class="small">Teal</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-cyan"><span class="avatar avatar-60 rounded-circle mb-2 bg-cyan"></span>
                                    <p class="small">Cyan</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-grey"><span class="avatar avatar-60 rounded-circle mb-2 bg-grey"></span>
                                    <p class="small">Grey</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-brown"><span class="avatar avatar-60 rounded-circle mb-2 bg-brown"></span>
                                    <p class="small">Brown</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-chocolate"><span class="avatar avatar-60 rounded-circle mb-2 bg-chocolate"></span>
                                    <p class="small">chocolate</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="select-box text-center mb-2" data-title="theme-black"><span class="avatar avatar-60 rounded-circle mb-2 bg-dark"></span>
                                    <p class="small">Black</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item mb-4">
                <div class="accordion-header" id="personalizeAccordHTwo"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalizeAccordTwo" aria-expanded="true" aria-controls="personalizeAccordTwo"><span class="h6">Background</span></button></div>
                <div id="personalizeAccordTwo" class="accordion-collapse collapse show" aria-labelledby="personalizeAccordHTwo" data-bs-parent="#personalizeAccord" style>
                    <div class="accordion-body">
                        <div class="row theme-background">
                            <div class="col-12 mb-3">
                                <p class="text-secondary">None, white, bg-r-gradient, bg-gradient-1 to 10</p>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-default"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-arrow-clockwise"></i></span>
                                    <p class="small">None</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-white"><span class="avatar avatar-60 rounded-circle mb-2 bg-white"></span>
                                    <p class="small">White</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-r-gradient"><span class="avatar avatar-60 rounded-circle mb-2 bg-r-gradient"></span>
                                    <p class="small">Theme</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-1"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-1"></span>
                                    <p class="small">Grad-1</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-2"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-2"></span>
                                    <p class="small">Grad-2</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-3"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-3"></span>
                                    <p class="small">Grad-3</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-4"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-4"></span>
                                    <p class="small">Grad-4</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-5"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-5"></span>
                                    <p class="small">Grad-5</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-6"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-6"></span>
                                    <p class="small">Grad-6</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-7"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-7"></span>
                                    <p class="small">Grad-7</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-8"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-8"></span>
                                    <p class="small">Grad-8</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-9"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-9"></span>
                                    <p class="small">Grad-9</p>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="gradient-box text-center mb-2" data-title="bg-gradient-10"><span class="avatar avatar-60 rounded-circle mb-2 bg-gradient-10"></span>
                                    <p class="small">Grad-10</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="accordion-item mb-4">
                        <div class="accordion-header" id="personalizeAccordHThree"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalizeAccordThree" aria-expanded="true" aria-controls="personalizeAccordThree"><span class="h6">Sidebar fill color</span></button></div>
                        <div id="personalizeAccordThree" class="accordion-collapse collapse show" aria-labelledby="personalizeAccordHThree" data-bs-parent="#personalizeAccord" style>
                            <div class="accordion-body">
                                <div class="row" id="personalise-preview-sidebar">
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-fill-none"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-arrow-clockwise"></i></span>
                                            <p class="small">None</p>
                                        </div>
                                    </div>
                                    <div class="col-auto" data-bs-img="dark">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-fill-white"><span class="avatar avatar-60 rounded-circle mb-2 bg-black"></span>
                                            <p class="small">Black</p>
                                        </div>
                                    </div>
                                    <div class="col-auto" data-bs-img="light">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-fill-white"><span class="avatar avatar-60 rounded-circle mb-2 bg-white"></span>
                                            <p class="small">White</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-fill-bg"><span class="avatar avatar-60 rounded-circle mb-2 bg-body-1"></span>
                                            <p class="small">Background</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-fill-theme"><span class="avatar avatar-60 rounded-circle mb-2 bg-theme-1"></span>
                                            <p class="small">Theme</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-fill-accent"><span class="avatar avatar-60 rounded-circle mb-2 bg-theme-accent-1"></span>
                                            <p class="small">Accent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <div class="accordion-header" id="personalizeAccordHFive"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalizeAccordFive" aria-expanded="true" aria-controls="personalizeAccordFive"><span class="h6">Sidebar layout</span></button></div>
                        <div id="personalizeAccordFive" class="accordion-collapse collapse show" aria-labelledby="personalizeAccordHFive" data-bs-parent="#personalizeAccord" style>
                            <div class="accordion-body">
                                <div class="row sidebar-layout">
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-standard"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-arrow-clockwise"></i></span>
                                            <p class="small">Standard</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-iconic"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-bezier h4"></i></span>
                                            <p class="small">Iconic</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-boxed"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-box h5"></i></span>
                                            <p class="small">Boxed</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-sidebar-boxed adminuiux-sidebar-iconic"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-bounding-box h5"></i></span>
                                            <p class="small">IconicBox</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="accordion-item mb-4">
                        <div class="accordion-header" id="personalizeAccordHFour"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalizeAccordFour" aria-expanded="true" aria-controls="personalizeAccordFour"><span class="h6">Header fill color</span></button></div>
                        <div id="personalizeAccordFour" class="accordion-collapse collapse show" aria-labelledby="personalizeAccordHFour" data-bs-parent="#personalizeAccord" style>
                            <div class="accordion-body">
                                <div class="row" id="personalise-preview-header">
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-transparent"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-arrow-clockwise"></i></span>
                                            <p class="small">None</p>
                                        </div>
                                    </div>
                                    <div class="col-auto" data-bs-img="dark">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-fill-white"><span class="avatar avatar-60 rounded-circle mb-2 bg-black"></span>
                                            <p class="small">Black</p>
                                        </div>
                                    </div>
                                    <div class="col-auto" data-bs-img="light">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-fill-white"><span class="avatar avatar-60 rounded-circle mb-2 bg-white"></span>
                                            <p class="small">White</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-fill-bg"><span class="avatar avatar-60 rounded-circle mb-2 bg-body-1"></span>
                                            <p class="small">Background</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-fill-theme"><span class="avatar avatar-60 rounded-circle mb-2 bg-theme-1"></span>
                                            <p class="small">Theme</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-fill-accent"><span class="avatar avatar-60 rounded-circle mb-2 bg-theme-accent-1"></span>
                                            <p class="small">Accent</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-4">
                        <div class="accordion-header" id="personalizeAccordHSix"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalizeAccordSix" aria-expanded="true" aria-controls="personalizeAccordSix"><span class="h6">Header layout</span></button></div>
                        <div id="personalizeAccordSix" class="accordion-collapse collapse show" aria-labelledby="personalizeAccordHSix" data-bs-parent="#personalizeAccord" style>
                            <div class="accordion-body">
                                <div class="row" id="header-layout">
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-standard"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-arrow-clockwise"></i></span>
                                            <p class="small">None</p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="select-box text-center mb-2" data-title="adminuiux-header-boxed"><span class="avatar avatar-60 rounded-circle mb-2 bg-default"><i class="bi bi-box h5"></i></span>
                                            <p class="small">Boxed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card adminuiux-card mb-4">
                    <div class="card-header">
                        <p class="h6">Change layout color mode</p>
                    </div>
                    <div class="card-body">
                        <p class="text-secondary">Light mode Preferred in well-lit conditions for better readability and can be more accessible to users with certain visual impairments. Dark mode reduces glare and can help with reducing eye strain in low-light conditions.</p>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center no-rtl">
                            <div class="col-auto">Light</div>
                            <div class="col-auto px-0">
                                <div class="form-check form-switch sunmoon"><input class="form-check-input" type="checkbox" role="switch" id="btn-layout-modes-dark"> <label class="form-check-label" for="btn-layout-modes-dark"><i class="bi bi-brightness-low sun"></i> <i class="bi bi-moon-stars moon"></i></label></div>
                            </div>
                            <div class="col-auto">Dark</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card adminuiux-card mb-4">
                    <div class="card-header">
                        <p class="h6">Change layout text direction mode</p>
                    </div>
                    <div class="card-body">
                        <p class="text-secondary">RTL (Right-to-Left) layout mode is essential for languages that are read from right to left, such as Arabic, Hebrew, and Persian. Elements like headings, paragraphs, links, images, and form elements should be auto-adjusted
                            to rtl</p>
                    </div>
                    <div class="card-footer">
                        <div class="row align-items-center no-rtl">
                            <div class="col-auto">LTR</div>
                            <div class="col-auto px-0">
                                <div class="form-check form-switch rtlcheck"><input class="form-check-input" type="checkbox" role="switch" id="btn-layout-dir-rtl"> <label class="form-check-label" for="btn-layout-dir-rtl"><i class="bi bi-justify-left ltrjustify"></i> <i class="bi bi-justify-right rtljustify"></i></label></div>
                            </div>
                            <div class="col-auto">RTL</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')


@endsection