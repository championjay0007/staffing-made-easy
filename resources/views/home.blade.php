<!-- resources/views/home.blade.php -->
<x-layouts.main>
<script>


AOS.init({
        duration: 1200, // Increase duration for a slower animation
        offset: 200, // Adjust the offset value for when animation should start
        delay: 200, // Adds a delay before animation starts
        once: false, // Set to true to animate only once while scrolling down
        mirror: true // Whether elements should animate out while scrolling past them
    });

</script>

    <!-- Hero Section -->
    <section class="hero-section" data-aos="fade-down">
    <div class="overlayhero"></div>
    <div class="hero-content">
        <div class="hero-text">
            <h1>Connecting Talent with Opportunity Across Australia’s Vital Industries</h1>
            <p>Discover reliable recruitment and labor hire solutions with Staffing Made Easyy, Australia's trusted staffing agency. We connect skilled professionals with standout roles in industries like Healthcare, Construction, IT, Manufacturing, and more, offering casual, temporary, 
                and permanent staffing options tailored to fit your needs.</p>
            <div class="hero-buttons">
                <a href="{{route('about')}}" class="btn primary">About Us</a>
                <a href="{{route('contactpg')}}" class="btn btn-bordered">Contact Us</a>
            </div>
            <!-- <div class="stats">
                <div class="stat-item">
                    <h3>10K+</h3>
                    <p>Active Job Seekers</p>
                </div>
                <div class="stat-item">
                    <h3>5K+</h3>
                    <p>Partnered Employers</p>
                </div>
                <div class="stat-item">
                    <h3>1K+</h3>
                    <p>Successful Placements</p>
                </div>
            </div> -->

            

            <!-- New clickable divs -->
            <div class="clickable-options">
                <div class="clickable-div candidate" data-aos="flip-left" onclick="window.location.href='{{route('candidates.create')}}'">
                    <i class="fas fa-user"></i>
                    <div class="title">CANDIDATES</div>
                    <div class="description">Find the right position <Br> click here to get started</Br></div>
                </div>

                <div class="clickable-div employer" data-aos="flip-right" onclick="window.location.href='{{route('Employ')}}'">
                    <i class="fas fa-briefcase"></i>
                    <div class="title">EMPLOYERS</div>
                    <div class="description">Find the right candidate  <Br> click here to get started</div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-slideshow">
        <img src="{{ asset('images/seeker1.webp') }}" alt="Job Seeker 1">
        <img src="{{ asset('images/seeker2.webp') }}" alt="Job Seeker 2">
        <img src="{{ asset('images/seeker3.webp') }}" alt="Job Seeker 3">
    </div>
</section>








    <!-- About Us -->
   <!-- About Us Section -->
<section class="about-section" id="about" data-aos="fade-down">
    <div class="about-container">
        <div class="about-text">
            <h2>About Us</h2>
            <p>At Staffing Made Easyy, we are committed to aligning businesses with the skilled 
                workforce they need to succeed. Based in Bankstown, NSW, we specialize in delivering
                 high-quality, flexible staffing solutions across various sectors, including Engineering,
                  Warehouse & Transport, Medical & Health, Aged Care, and Office & Administration. 
                  Our dedication to integrity and inclusivity ensures we’re
                 building lasting partnerships that fuel success for both businesses and job seekers.</p>
            
            <ul class="about-features">
                <li><strong>Personalized Solutions:</strong> Tailored staffing services to meet specific requirements.</li>
                <li><strong>Industry Expertise:</strong> Experienced in various fields including healthcare, IT, and finance.</li>
                <li><strong>Quality Commitment:</strong> Dedicated to providing the highest standard of service and satisfaction.</li>
            </ul>
            <a href="{{route('about')}}" class="btn primary">Learn More</a>
        </div>
        <div class="about-image">
            <img src="{{ asset('images/seeker4.webp') }}" data-aos="slide-down"  alt="Our Team" class="main-img">
            <div class="img-overlay">
                <img src="{{ asset('images/seeker3.webp') }}" data-aos="slide-up" alt="Partnerships" class="overlay-img">
            </div>
        </div>
    </div>
</section>




<!-- Industries We Serve Section -->
<section data-aos="slide-left"   class="industries-section" id="industries"> 
    <div class="industries-container">
        <h2>Industries We Serve</h2>
        <p>We specialise in a wide range of industries</p>

        <div class="industries-grid">
            @foreach ($industries->take(6) as $industry)
                <div class="industry-card" data-aos="flip-right" onclick="window.location='{{ route('industries.show', $industry->id) }}'">
                    <div class="icon-container">
                        <!-- Dynamically Displaying the Icon Image -->
                        <img src="{{ asset('storage/' . $industry->image) }}" alt="{{ $industry->name }} Icon" class="industry-icon">
                    </div>
                    <h3>{{ $industry->name }}</h3>
                    <p>{{ \Str::limit($industry->description, 120) }}</p>
                </div>
            @endforeach
        </div>

        <a href="{{ route('indu') }}" class="btn primary">View all industries</a>
    </div>
</section>


    <!-- Services Offered -->
    <!-- Services Section -->
<section class="services-section" id="services">
    <div class="services-container">
        <h2>Our Services</h2>
        <p>Discover the wide range of services we offer to meet your staffing needs</p>
        
        <div class="services-grid">
            <div class="service-card" data-aos="flip-left"  style="background-image: url('images/services1.webp');">
            <h2>Job Listings  <br> & Search</h2>
            <div class="overlay">
                    <h3>Job Listings & Search</h3>
                    <p class="description">CFind your next role! Explore opportunities in Healthcare, Construction, IT, Warehouse, Manufacturing, and more. Start your career journey with Staffing Made Easyy today.</p>
                </div>
            </div>
            
            <div class="service-card" data-aos="flip-left" style="background-image: url('images/services2.jpg');">
            <h2>Recruitment Services</h2>
                <div class="overlay">
                    <h3>Recruitment Services</h3>
                    <p class="description">End-to-end recruitment services to find the best talent suited for your specific business requirements.</p>
                </div>
            </div>

            <div class="service-card" data-aos="flip-left"  style="background-image: url('images/services3.webp');">
            <h2>Onboarding Assistance</h2>
                <div class="overlay">
                    <h3>Onboarding Assistance</h3>
                    <p class="description">Comprehensive onboarding support to ensure smooth integration of new hires into your organization.</p>
                </div>
            </div>

            <div class="service-card" data-aos="flip-left"  style="background-image: url('{{ asset('images/services4.webp') }}');">
            <h2>Compliance & Verification Services</h2>
                <div class="overlay">
                    <h3>Compliance & Verification Services</h3>
                    <p class="description"> From police checks to skill verification, we guarantee qualified placements across industries.</p>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- CTA Section -->

<section class="">
    <div class="cta-container ">
        <!-- Left Column: Image -->
        <div class="cta-image">
            <img src="{{ asset('images/job1.jpg') }}" alt="Professional team working">
        </div>

        <!-- Right Column: CTA Details and Buttons -->
        <div class="cta-content">
            <h2>Unlock Your Career Potential</h2>
            <p>Ready to take the next step in your career? Explore our latest 
                job listings and find opportunities that align with your skills and goals. We support 
                you throughout the application and onboarding process, providing resources and guidance at every step.</p>
            <div class="cta-buttons">
                <a href="{{ route('job.listings') }}" class="cta-btn primary">Job Listings</a>
                <a href="/submit-cv" class="cta-btn secondary">Submit CV</a>
            </div>
        </div>
    </div>
</section>



<!-- Features Section -->
<!-- Features Section -->
<section class="features-section">
    <div class="features-container">
        <h2>Why Choose Staffing Made Easyy?</h2>
        <p class="features-intro">Our platform offers a range of benefits that make job searching and hiring a seamless experience.</p>
        
        <div class="features-grid">
            <!-- Feature 1 -->
            <div class="feature-item" data-aos="zoom-in">
                <i class="fas fa-briefcase"></i>
                <h3>Experienced Recruitment Experts:</h3>
                <p>Our team has in-depth knowledge across industries to provide reliable, efficient hiring solutions.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-item" data-aos="zoom-in">
                <i class="fas fa-user-check"></i>
                <h3>Tailored Staffing Solutions:</h3>
                <p> From casual and temporary positions to permanent roles, we match the right talent with the right opportunities.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-item" data-aos="zoom-in">
                <i class="fas fa-clock"></i>
                <h3>Quick Application Process</h3>
                <p>Save time with an easy application process, designed for efficiency and simplicity.</p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-item" data-aos="zoom-in">
                <i class="fas fa-headset"></i>
                <h3>Expert Support</h3>
                <p>Get guidance from our staffing experts, who are here to support you at every step of the way.</p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-item" data-aos="zoom-in">
                <i class="fas fa-calendar-alt"></i>
                <h3>Industry Compliance & Verification:</h3>
                <p> Our thorough candidate screening, background checks, and compliance services ensure all placements meet Australian standards.</p>
            </div>

            <!-- Feature 6 -->
            <div class="feature-item" data-aos="zoom-in">
                <i class="fas fa-lock"></i>
                <h3>Secure Platform</h3>
                <p>Your information is protected with our secure platform, giving you peace of mind as you search.</p>
            </div>
        </div>
    </div>
</section>





<section id="employers" data-aos="flip-right" class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Call to Action -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h3 class="display-5 fw-bold">Need Talent?</h3>
                <p class="lead text-muted">
                    Looking for a trusted recruitment partner? Staffing Made Easy provides customized staffing solutions to help you find the talent that powers your business. 
                    We handle screening, verification, onboarding, and ongoing support to ensure each candidate is the right fit for your team.
                </p>
                <a href="#contact" class="btn btn-primary btn-lg">Apply Now</a>
            </div>

            <!-- Right Column: Image -->
            <div class="col-lg-6">
                <img src="{{ asset('images/recru.png') }}" alt="Recruitment Solutions" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>



    
<!-- Testimonials Section -->
<section id="testimonials" class="py-5 bg-light">
    <div class="container">
        <h3 class="text-center display-5 fw-bold mb-5">What Our Clients Say</h3>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="testimonial p-4 shadow rounded bg-white">
                                <blockquote class="blockquote fs-4">"Amazing service! Found the perfect candidate quickly."</blockquote>
                                <cite class="d-block text-end mt-3">— Client A</cite>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="testimonial p-4 shadow rounded bg-white">
                                <blockquote class="blockquote fs-4">"Professional and efficient. Highly recommend."</blockquote>
                                <cite class="d-block text-end mt-3">— Client B</cite>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="testimonial p-4 shadow rounded bg-white">
                                <blockquote class="blockquote fs-4">"Helped us scale with skilled professionals."</blockquote>
                                <cite class="d-block text-end mt-3">— Client C</cite>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>



    <!-- Blog Highlights -->

    <section class="blog-section all py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="section-title text-center mb-5">Featured Articles</h2>

        <!-- Blog Grid -->
        <div class="row blog-grid">
            @foreach($posts as $post)

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-card h-100 shadow-sm">
                    <div class="blog-image-wrapper">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid blog-image" alt="{{ $post->title }}">
                    </div>
                    <div class="card-body p-4">
                        <small class="blog-date text-muted">{{ $post->created_at->format('M d, Y') }}</small>
                        <h5 class="card-title mt-2">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->description, 150) }}</p>
                        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-outline-primary mt-3 text-white " >Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<style>


#employers {
    background: linear-gradient(135deg, #EDF2FF, #FFFFFF);
    padding:150px !important;
}

#employers .container {
    max-width:1200px;
}


#employers h3 {
    color: #0d6efd;
}
#employers p {
    font-size: 1.1rem;
    line-height: 1.6;
}
#employers .btn-primary {
    background-color: #0d6efd;
    border-color: #0d6efd;
    transition: all 0.3s ease;
}
#employers .btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}
#employers img {
    object-fit: cover;
    max-height: 400px;
    width: 100%;
}
@media (max-width: 768px) {
    #employers {
        padding:100px 50px 0 50px !important;
    }

}


#testimonials {

    background: linear-gradient(135deg, #EDF2FF, #FFFFFF) !important;
    padding: 200px !important;
}

#testimonials h3 {
    color: #0d6efd;
}

.testimonial {
    position: relative;
    background-color: #ffffff;
    border-radius: 10px;
    padding: 30px;
    border-left: 5px solid #0d6efd;
}

blockquote {
    font-style: italic;
    color: #343a40;
}

blockquote::before {
    content: "“";
    font-size: 3rem;
    color: #0d6efd;
    position: absolute;
    top: -10px;
    left: 20px;
}

blockquote::after {
    content: "”";
    font-size: 3rem;
    color: #0d6efd;
    position: absolute;
    bottom: -10px;
    right: 20px;
}

.cite {
    color: #6c757d;
    font-weight: 600;
}

@media (max-width: 768px) {

#testimonials {

background: linear-gradient(135deg, #EDF2FF, #FFFFFF) !important;
padding: 50px !important;
}

}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</x-layouts.main>
