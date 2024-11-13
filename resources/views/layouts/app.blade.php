<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<!-- Add this in your <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Add this before your closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"> </script>

<!-- Include Bootstrap CSS in the head -->

<!-- Include Bootstrap JS (optional) before closing body tag -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"> </script>


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Navbar Structure -->
<nav class="navbar navbar-expand-lg navbar-custom sticky-top">
    <div class="container">
        <!-- Logo and Title -->
        <a class="navbar-brand" href="#">
            <img src="path/to/your-logo.png" alt="Logo">
            Staffing Made Easy
        </a>
        <!-- Mobile Menu Toggle Button (Visible only on mobile) -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <!-- Custom Hamburger Icon -->
            <svg width="30" height="30" fill="#ffffff" viewBox="0 0 30 30">
                <path d="M4 7h22v2H4V7zm0 7h22v2H4v-2zm0 7h22v2H4v-2z"></path>
            </svg>
        </button>
        <!-- Desktop Navigation Links (Visible only on desktop) -->
        <div class="collapse navbar-collapse d-none d-lg-block">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <a href="{{ route('candidates.index') }}" class="nav-link">Candidates |</a></li>
                <li class="nav-item"><a href="{{ route('employers.index') }}" class="nav-link">Employers |</a></li>
                <li class="nav-item"><a href="{{ route('admin.blog.index') }}" class="nav-link">Blog |</a></li>
                <li class="nav-item"> <a href="{{ route('industries.index') }}" class="nav-link">Industries |</a> </li>
                <li class="nav-item">  <a href="{{ route('messages.create') }}" class="nav-link">Create Messages |</a> </li>
            </ul>
        </div>
        <!-- Mobile Offcanvas Menu (Visible only on mobile) -->
        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                  
                <li class="nav-item"> <a href="{{ route('candidates.index') }}" class="nav-link text-white">Candidates</a></li>
                <li class="nav-item"><a href="{{ route('employers.index') }}" class="nav-link text-white">Employers</a></li>
                <li class="nav-item"><a href="{{ route('admin.blog.index') }}" class="nav-link text-white">Blog</a></li>
                <li class="nav-item"> <a href="{{ route('industries.index') }}" class="nav-link text-white">Industries</a> </li>

                <li class="nav-item">  <a href="{{ route('messages.create') }}" class="nav-link text-white">Create Messages</a> </li>
            </ul>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Custom CSS -->
<style>


label{
    color:black !important;
}
.navii{

z-index: 1033 !important; /* Ensure the navbar stays above other content */
}
    .navbar-custom {
        background: linear-gradient(135deg, #0d1b3d, #4a90e2);
        z-index: 1030; /* Ensure the navbar stays above other content */
    }
    .navbar-brand, .navbar-nav .nav-link {
        color: #fff !important;
        font-weight: 600;
    }
    .navbar-brand {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .navbar-brand img {
        height: 40px;
        width: 40px;
    }
    .nav-link:hover {
        color: #ffdd57 !important;
        transition: color 0.3s;
    }
    /* Custom Hamburger Icon Styling */
    .navbar-toggler svg {
        width: 24px;
        height: 24px;
    }
    /* Offcanvas Menu Style for Mobile */
    @media (max-width: 992px) {
        .offcanvas {
            background-color: #0073e6;
        }
        .offcanvas .nav-link {
            color: #fff;
            font-weight: bold;
        }
        .offcanvas .nav-link:hover {
            color: #ffdd57;
            background-color: transparent;
        }
    }
</style>

<!-- Add Bootstrap JS and CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script> -->


            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset



            
            <!-- Page Content -->
            <main>
                <br>
                <br>
                
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
