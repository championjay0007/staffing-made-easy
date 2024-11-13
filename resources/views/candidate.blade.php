<!-- resources/views/home.blade.php -->
<x-layouts.main>
 

<section class="hero-section-employers d-flex align-items-center">
    <div class="container text-white">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="display-4 fw-bold">A Secret Tool for the Best Job-Finding Experience</h1>
                <p class="lead">Find your dream job or let us find it for you! Track your growth and monitor your progress towards important career goals.</p>
                <a href="#application" class="btn btn-primary btn-lg mt-3">Get Started</a>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('images/employ.png') }}" alt="Employers Hero Image" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>


<!-- <section class="hero-section d-flex">
    <div class="hero-content">
        <h1 class="hero-title">A Secret Tool for the Best Job-Finding Experience</h1>
        <p class="hero-subtitle">Find your dream job or let us find it for you! Track your growth and monitor your progress towards important career goals.</p>
        <div class="hero-buttons">
            <a href="/get-started" class="btn btn-primary">Get Started</a>
            <a href="/request-demo" class="btn btn-outline-secondary">Request a Demo</a>
        </div>
    </div>
    <div class="hero-image position-relative">
        <img src="path/to/your-image.jpg" alt="Candidate Reaction" class="img-fluid rounded-circle">
        <div class="floating-elements">
            <div class="floating-badge">
                <span>+99 subscribers</span>
            </div>
            <div class="floating-badge">
                <span>Revenue</span>
                <strong>85%</strong>
            </div>
            <div class="floating-badge">
                <img src="path/to/profile-image.jpg" alt="Follower">
                <span>Darnel Steward following you</span>
            </div>
        </div>
    </div> -->





<!-- Benefits Section -->
<section class="benefits-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Your New Job Comes with Benefits</h2>
        <div class="row gy-4">
            <!-- Benefit 1 -->
            <div class="col-md-4">
                <div class="benefit-card text-center p-4">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-briefcase fa-2x text-primary"></i>
                    </div>
                    <h5 class="benefit-title">Permanent work opportunities</h5>
                    <p class="benefit-description">At 360 Personnel, temporary roles can evolve into permanent positions, offering you a seamless path to long-term career progression and stability.</p>
                </div>
            </div>
            <!-- Benefit 2 -->
            <div class="col-md-4">
                <div class="benefit-card text-center p-4">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                    <h5 class="benefit-title">Above-award salaries</h5>
                    <p class="benefit-description">We prioritise fair compensation, providing competitive salaries with a 25% casual loading that exceeds industry standards.</p>
                </div>
            </div>
            <!-- Benefit 3 -->
            <div class="col-md-4">
                <div class="benefit-card text-center p-4">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-check-circle fa-2x text-primary"></i>
                    </div>
                    <h5 class="benefit-title">Smooth recruitment process</h5>
                    <p class="benefit-description">We take care of your screening process, reference checks, pre-start medicals, and comprehensive training and inductions, ensuring a smooth transition to your new role.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--  -->
    


<section class="">
    <div class="cta-container ">
        <!-- Left Column: Image -->
        <div class="cta-image">
            <img src="{{ asset('images/job1.jpg') }}" alt="Professional team working">
        </div>

        <!-- Right Column: CTA Details and Buttons -->
        <div class="cta-content">
            <h2>Unlock Your Career Potential</h2>
            <p>Whether you’re looking to find your next dream permanent role, 
                a quality temporary job, or a labour-hire assignment, we will align you with your dream job 
                or business that best suits you based on your skills, experience, and personality.</p>
            <div class="cta-buttons">
                <a href="#application" class="cta-btn primary">Apply Now</a>
                <a href="#application" class="cta-btn secondary">Submit CV</a>
            </div>
        </div>
    </div>
</section>






<section class="joblis" style="padding: 40px; background-color: #f8f9fc; text-align: center;">


<h1 class="text-center my-4">Job Listings</h1>

<div class="container">
    <div class="row">
        @if($employers->isEmpty())
            <p class="text-center">No job listings available at the moment.</p>
        @else
            @foreach($employers as $employer)
                <div class="col-md-4 mb-4">
                    <div class="card job-card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $employer->job_title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $employer->company_name }}</h6>
                            <p class="card-text">{{ Str::limit($employer->additional_info, 100, '...') }}</p>
                            <p class="location"><strong>Location:</strong> {{ $employer->job_location ?? 'Not specified' }}</p>
                            <a href="{{ route('job.details', $employer->id) }}" class="btn btn-primary w-100">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<!-- Custom CSS for styling -->













<h1 style="margin:50px;">Browse Our Available Jobs</h1>
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
        <!-- Card 1 -->
        <a href="https://www.seek.com" target="_blank" style="text-decoration: none;">
            <div style="width: 250px; height: 250px; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: #ffffff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); transition: transform 0.3s, box-shadow 0.3s;">
                <img src="https://logowik.com/content/uploads/images/seek5982.jpg" alt="Seek" style="width: 150px; height: auto; margin-bottom: 20px;">
                
            </div>
        </a>
        <!-- Card 2 -->
        <a href="https://www.indeed.com" target="_blank" style="text-decoration: none;">
            <div style="width: 250px; height: 250px; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: #ffffff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); transition: transform 0.3s, box-shadow 0.3s;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Indeed_logo.png/800px-Indeed_logo.png" alt="Indeed" style="width: 150px; height: auto; margin-bottom: 20px;">
                
            </div>
        </a>
        <!-- Card 3 -->
        <a href="https://www.simplyhired.com" target="_blank" style="text-decoration: none;">
            <div style="width: 250px; height: 250px; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: #ffffff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); transition: transform 0.3s, box-shadow 0.3s;">
                <img src="https://avatars.mds.yandex.net/i?id=f89adb52c82419e5a6e06b838680e2efc4ca0e44-10384982-images-thumbs&n=13" alt="SimplyHired" style="width: 150px; height: auto; margin-bottom: 20px;">
                
            </div>
        </a>
        <!-- Card 4 -->
        <a href="https://www.jora.com" target="_blank" style="text-decoration: none;">
            <div style="width: 250px; height: 250px; padding: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: #ffffff; border-radius: 15px; box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15); transition: transform 0.3s, box-shadow 0.3s;">
                <img src="https://via.placeholder.com/150x75.png?text=Jora" alt="Jora" style="width: 150px; height: auto; margin-bottom: 20px;">
                <p style="color: #34495e; font-size: 1.3rem;">Jora</p>
            </div>
        </a>
    </div>
</section>










<section class="application-section" id="application">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="application-form-container">
                    <h1>Let us find your dream job</h1>
                    <p>Submit your CV and let our expert team connect you with exciting career opportunities that align with your skills and aspirations.</p>

                    <form action="{{ route('candidates.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>

                        <div class="mb-3">

            <label for="state" class="form-label">State</label>
            <select name="state" class="form-control" required >
            <option value="">Preferred State</option>
            <option value="NSW">NSW</option>
            <option value="VIC">VIC</option>
            <option value="QLD">QLD</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="NT">NT</option>
            <option value="ACT">ACT</option>
            <option value="TAS">TAS</option>


        </select>
    </div>
                       

                        <div class="mb-3">
                            <label for="qualification" class="form-label">Qualification</label>
                            <input type="text" name="qualification" id="qualification" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="experience" class="form-label">Experience</label>
                            <textarea name="experience" id="experience" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="additional_info" class="form-label">Additional information</label>
                            <textarea name="additional_info" id="additional_info" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="resume" class="form-label">Attach Your CV (File Size &lt; 5MB | pdf,docx)</label>
                            <input type="file" name="resume" id="resume" class="form-control" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="submit-btn">Submit Application</button>
                        </div>
                    </form>
                    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Your registration was successful!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>

            </div>
            
                </div>
            </div>

            <div class="col-md-6 right-column">
                <img src="{{ asset('images/job1.jpg') }}" alt="Application" class="img-fluid">
            </div>
        </div>
    </div>
</section>


<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Read Our Most FAQ</h2>
        <div class="row align-items-center">
            <!-- FAQ Accordion -->
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="accordion" id="faqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                How do I submit my resume or apply for a job through your agency?
                            </button>
                        </h2>
                        <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                You can easily submit your resume or apply for a job through our website by browsing our many positions below or sending it all the way in case to submit your CV.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                What qualifications or experience are typically required for the positions you offer?
                            </button>
                        </h2>
                        <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                We offer a range of positions for candidates with varying levels of experience. Our recruiters will assess your skills and qualifications and connect you with the right opportunities.
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                Do you provide any career development or training opportunities for candidates?
                            </button>
                        </h2>
                        <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we offer various training programs and career development services to help candidates improve their skills and advance in their careers.
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faqHeadingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                What level of communication and support can I expect throughout the job search process?
                            </button>
                        </h2>
                        <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Our team provides regular updates and support throughout the job search process to ensure a smooth and efficient experience for all candidates.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Image -->
            <div class="col-md-6">
                <img src="{{ asset('images/faq.png') }}" alt="FAQ Illustration" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>


<section class="hiring-process-section">
    <div class="container text-center">
        <h2>Hiring Process</h2>
        <p>A seamless hiring process to kick off your career journey</p>
        
        <div class="row text-center">
            <!-- Step 1 -->
            <div class="col-md-4 mb-4">
                <div class="step-number">1</div>
                <div class="step-title">Explore</div>
                <p>Browse our diverse range of job opportunities that match your skills and interests.</p>
            </div>
            
            <!-- Step 2 -->
            <div class="col-md-4 mb-4">
                <div class="step-number">2</div>
                <div class="step-title">Apply</div>
                <p>Submit your application and showcase your qualifications to our dedicated recruitment team.</p>
            </div>
            
            <!-- Step 3 -->
            <div class="col-md-4 mb-4">
                <div class="step-number">3</div>
                <div class="step-title">Get Hired</div>
                <p>Our assessment process paves the way for your journey to securing the ideal career opportunity.</p>
            </div>
        </div>
    </div>
</section>


   


<script>
    // Check if there's a success message in the session
    @if(session('success'))
        $(document).ready(function() {
            $('#successModal').modal('show');
        });
    @endif


    
</script>



<style>

/* Hero Section Styling */
.hero-section-employers {
    background: linear-gradient(120deg, #1a1f71 0%, #212e77 100%);
    color: #fff;
    padding: 100px 0;
    position: relative;
}

.hero-section-employers h1 {
    font-size: 2.5rem;
}

.hero-section-employers p {
    font-size: 1.2rem;
    line-height: 1.6;
}

.hero-section-employers .btn-primary {
    background-color: #ff7a3a;
    border: none;
    padding: 0.8rem 2rem;
    font-size: 1.1rem;
    transition: background 0.3s ease;
}

.hero-section-employers .btn-primary:hover {
    background-color: #ff5823;
}

.hero-section-employers .img-fluid {
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

/* Mobile responsiveness */
@media (max-width: 768px) {
    
    .hero-section-employers {
        padding: 60px !important;
        background-color:red;
        padding-top: 200px !important;
    }

    .hero-section-employers h1 {
        font-size: 2rem;
    }

    .hero-section-employers p {
        font-size: 1rem;
    }
}



        .benefits-section {
        background-color:rgba(0, 38, 106, 0.2);
        padding:150px 150px!important;
        
    }

    .benefit-card {
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .benefit-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
    }

    .benefit-icon i {
        color: #007bff;
    }

    .benefit-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #343a40;
    }

    .benefit-description {
        color: #6c757d;
        font-size: 0.95rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .benefits-section {
       
        padding:50px 50px!important;
        
    }
        .benefit-card {
            padding: 1rem;
            width:100% !important;
        }
    }

    @media (max-width: 576px) {
        .benefit-title {
            font-size: 1.1rem;
        }

        .benefit-description {
            font-size: 0.9rem;
        }
    }



    .faq-section {
        background: linear-gradient(135deg, #EDF2FF, #FFFFFF);
        padding:100px 100px !important;
    }

    .accordion-button {
        font-weight: 600;
        color: #007bff;
    }

    .accordion-button:not(.collapsed) {
        background-color: #007bff;
        color: #fff;
        box-shadow: none;
    }

    .accordion-item {
        border: none;
    }

    .accordion-body {
        font-size: 0.95rem;
        color: #6c757d;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .faq-section {
        background: linear-gradient(135deg, #EDF2FF, #FFFFFF);
        padding:50px 50px !important;
    }
        .faq-section .row {
            text-align: center;
        }

        .faq-section img {
            margin-top: 2rem;
        }
    }



  
    .application-section {
        background-color: #f8f9fa;
        padding: 50px 0;
    }

    .application-form-container {
        max-width: 600px;
        margin: auto;
        padding: 30px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .application-section h1 {
        font-size: 32px;
        color: #2c3e50;
        font-weight: 700;
    }

    .application-section p {
        font-size: 16px;
        color: #6c757d;
        margin-bottom: 30px;
    }

    .application-form-container .form-control {
        border: 1px solid #ced4da;
        padding: 10px 15px;
        font-size: 16px;
        border-radius: 5px;
    }

    .application-form-container .form-label {
        font-weight: 600;
        color: #495057;
    }

    .submit-btn {
        background-color: #ff6600;
        color: #fff;
        font-size: 18px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #e65c00;
    }

    .right-column img {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .application-section {
            padding: 20px;
        }

        .application-form-container {
            margin: 20px;
            padding: 20px;
        }
    }



     /* Section background */
     .hiring-process-section {
        background-color: #1e2454; /* Dark blue background */
        color: white; /* White text */
        padding: 60px 0;
    }

    /* Heading */
    .hiring-process-section h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: white;
    }

    .hiring-process-section p {
        font-size: 1.1rem;
        margin-bottom: 40px;
        color: #ccc;
    }

    /* Numbered steps */
    .step-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: #ff7b2b; /* Orange color for the numbers */
        margin-bottom: 15px;
    }

    .step-title {
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: white;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .hiring-process-section h2 {
            font-size: 1.8rem;
        }
        .hiring-process-section p {
            font-size: 1rem;
        }
        .step-number {
            font-size: 2rem;
        }
        .step-title {
            font-size: 1.1rem;
        }

        .joblis {
       
        padding:0 !important;
    }
    }


     /* Hover effect for cards */
     .joblis div a div:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        background-color:rgba(0, 0, 0, 0.5) !important;
    }

    .joblis {
        background-color: rgba(13, 109, 251, 0.1) !important;
        padding:150px !important;
    }


    .joblis h1 {
        font-weight: 700;
        color: #4a90e2;
    }

    /* Card styling */
    .job-card {
        border: none;
        border-radius: 8px;
        transition: transform 0.3s, box-shadow 0.3s;
        background-color: #fff;
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    /* Card title and subtitle */
    .card-title {
        color: #0d1b3d;
        font-weight: 600;
    }
    
    .card-subtitle {
        color: #7a869a;
        font-size: 0.9em;
    }

    /* Location text styling */
    .location {
        color: #0d1b3d;
        font-size: 0.9em;
    }

    /* View Details button styling */
    .btn-primary {
        background-color: #4a90e2;
        border: none;
        font-weight: 600;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #357ABD;
    }

    </style>
</x-layouts.main>
