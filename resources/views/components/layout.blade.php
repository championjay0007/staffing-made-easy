<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Staffing Made Easyy')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file -->
    <script src="{{ asset('js/app.js') }}" defer></script> <!-- Link to your JS file -->
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Staffing Made Easyy</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="{{ route('jobSeekers') }}">Job Seekers</a></li>
                    <li><a href="{{ route('employers') }}">Employers</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        {{ $slot }} <!-- This is where the page content will be inserted -->
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} Staffing Made Easyy. All rights reserved.</p>
            <ul>
                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('terms') }}">Terms of Service</a></li>
            </ul>
            <div class="social-media">
                <a href="#">LinkedIn</a>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
            </div>
        </div>
    </footer>
</body>
</html>