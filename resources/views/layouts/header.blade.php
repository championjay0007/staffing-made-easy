<!-- Navbar Structure -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
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

        <!-- Desktop Navigation Links and Search Form (Visible only on desktop) -->
        <div class="collapse navbar-collapse d-none d-lg-flex justify-content-between">
            <!-- Navigation Links -->
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About |</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('candidates.create')}}">Candidates |</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('Employ')}}">Employers |</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contactpg')}}">Contacts |</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{route('blog.index')}}">Blogs |</a></li>
            </ul>

            <!-- Search Form -->
            
            <form action="{{ route('job.listings') }}" method="GET" class="d-flex ">
            <!-- <div class="input-group search-bar shadow-sm"> -->
                
                <input type="text" name="search" class="  me-2" placeholder="Search jobs, companies, or locations" value="{{ request('search') }}" style=" ">
                <button class="btn srch btn-primary" type="submit">Search</button>
                <!-- </div> -->
            </form>
            <div class="footer-socials">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            
        </div>

        <!-- Mobile Offcanvas Menu (Visible only on mobile) -->
        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item"><a class="nav-link text-white" href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{route('candidates.create')}}">Candidates</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{route('Employ')}}">Employers</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{route('contactpg')}}">Contacts</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{route('blog.index')}}">Blogs</a></li>
                </ul>

                <!-- Mobile Search Form -->
                <form action="{{ route('job.listings') }}" method="GET" class="d-flex mt-3">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search jobs, companies, or locations" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>

                <div class="footer-socials">
                <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            </div>
            </div>
        </div>
    </div>
</nav>

<!-- Custom CSS -->
<style>
    .navbar-custom {
        background: linear-gradient(135deg, #0d1b3d, #4a90e2);
        z-index: 1030;
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
    .navbar-toggler svg {
        width: 24px;
        height: 24px;
    }
    /* Search Form Styling */
    
    .navbar .form-control {
       
        max-width: 1000px !important;
      
  }




  .me-2{
  border: 1px solid #ced4da;
    padding:none;
    position: relative;
    top: 30px;
    max-height:50px;
    font-size: 16px;
    border-radius: 5px;

}

.srch{

    position: relative;
    bottom:10px;
    border-radius:2px !important;
}
.offcanvas {
        background-color: rgba(30, 38, 116, 0.5) !important;
    }
    .offcanvas .nav-link {
        color: #fff;
        font-weight: bold;
    }
    .offcanvas .nav-link:hover {
        color: #ffdd57;
        background-color: transparent;
    } 

    /* .input-group{
       
        display: flex;
    align-items: center;
    gap: 0.5r
    em;
    } 
    .input-group .btn-primary{
        position: relative;
bottom:20px;
    } 

/

   
</style>
