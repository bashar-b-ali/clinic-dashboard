<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DigiClinic Bootstrap HTML Admin template - adminuiux.com</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&amp;family=Oxygen:wght@400;700&amp;display=swap" rel="stylesheet">
    <style>
         :root {
            --adminuiux-content-font: 'Open Sans';
            --adminuiux-content-font-weight: 400;
            --adminuiux-title-font: "Oxygen", sans-serif;
            --adminuiux-title-font-weight: 700
        }
    </style>
    <script defer="defer" src="js/app.js"></script>
    <script defer="defer" src="{{ asset('assets/js/app.js' )}}"></script>
    <link href="{{ asset('assets/css/app.css')}}" rel="stylesheet">
</head>

<body>
    @include('layouts.loader.loader')

    <main class="flex-shrink-0 pt-0 h-100">
        <div class="container-fluid">
            <div class="auth-wrapper">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-6 minvheight-100 d-flex flex-column px-0">
                        <header class="adminuiux-header">
                            <nav class="navbar">
                                <div class="container-fluid">
                                    <a class="navbar-brand" href="#"><img data-bs-img="light" src="" alt class="me-3"> <img data-bs-img="dark" src="fonts/logo.svg" alt class="me-3">
                                        <div class="d-block"><span class="company-name text-uppercase h4"><b>Admin</b>UIUX</span>
                                            <p class="company-tagline">Web & Mobile HTML template</p>
                                        </div>
                                    </a>
                                    <div class="ms-auto"></div>
                                    <div class="ms-auto"></div>
                                </div>
                            </nav>
                        </header>
                        <div class="h-100 py-4 px-3">
                            <div class="row h-100 align-items-center justify-content-center mt-md-4">
                                <div class="col-12 col-md-10 col-lg-8 col-xxl-6 login-box">
                                    <div class="text-center mb-4">
                                        <h1 class="mb-2">Welcome</h1>
                                        <p class="lead text-secondary">Enter your credential to login</p>
                                    </div>
                                    <form action="{{ route('log') }}" method="POST">
                                        @csrf
                                        <div class="form-floating mb-3"><input type="email" name="email" class="form-control" id="emailadd" placeholder="Enter email address" required autofocus> <label for="emailadd">Email Address</label></div>
                                        <div class="position-relative">
                                            <div class="form-floating mb-3"><input type="password" name="password" class="form-control" id="passwd" placeholder="Enter your password" required> <label for="passwd">Password</label></div><button class="btn btn-square btn-link text-theme-1 position-absolute end-0 top-0 mt-2 me-2"><i class="bi bi-eye"></i></button></div>
                                        <div
                                            class="row align-items-center mb-3">
                                            <div class="col">
                                                <div class="form-check"><input class="form-check-input" type="checkbox" name="rememberme" id="rememberme"> <label class="form-check-label" for="rememberme">Remember me</label></div>
                                            </div>
                                            <div class="col-auto"><a href="clinic-forgot-password.html" class>Forget Password?</a></div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-theme w-100 mb-4"> Login</button>
                                    </form>

                               </div>
                        </div>
                    </div>
                    <footer class="adminuiux-footer mt-auto">
                    </footer>
                    <link rel="stylesheet" href="css/circus.min.css">
                    <script src="{{ asset('assets/js/highlight.min.js') }}"></script>
                    <script>
                        document.querySelectorAll(".code").forEach((e => {
                            hljs.highlightElement(e)
                        }))
                    </script>
                </div>
                <div class="col-12 col-md-6 col-lg-6 bg-theme-r-gradient px-0 d-none d-md-block">
                    <div class="row vh-100 d-flex flex-column justify-content-center gx-0 text-center">
                        <div class="col-10 col-md-10 col-lg-8 mt-auto mb-4 mb-lg-5 mx-auto">
                            <h1 class="text-white mb-4">Create and Manage your clinical appointments easily at your own very personalized space.</h1>
                            <p class="lead opacity-75">You are at the best AdminUIUX Digi Clinic<br>HTML template demo preview</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 col-xxl-3 mt-0 mx-auto"><img src="" alt class="w-100"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <script src="{{ asset('assets/js/clinic-auth.js') }}"></script>
</body>

</html>