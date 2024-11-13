<!-- resources/views/home.blade.php -->
<x-layouts.main>
 

<section class="hero-section-employers d-flex align-items-center">
    <div class="container text-white">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="display-4 fw-bold">Strategic workforce solutions:
                    Empowering your business with the right talent</h1>
                <p class="lead">We help you connect with skilled professionals to meet your company’s specific needs and drive growth. Simplify your hiring process with our expert solutions.</p>
                <a href="#get-started" class="btn btn-primary btn-lg mt-3">Get Started</a>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('images/employ.png') }}" alt="Employers Hero Image" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>


<section class="staffing-solutions-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Image -->
            <div class="col-md-6">
                <img src="{{ asset('images/staffing.png') }}" alt="Tailored Staffing Solutions" class="img-fluid rounded shadow-lg">
            </div>

            <!-- Right Column: Accordion -->
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">Tailored Staffing Solutions</h2>
                <p class="lead mb-4">Explore our range of flexible and specialized staffing options designed to meet the unique demands of your business.</p>

                <div class="accordion" id="staffingAccordion">
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Temporary Staffing
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#staffingAccordion">
                            <div class="accordion-body">
                                Perfect for short-term needs, our temporary staffing solution allows you to fill roles quickly with skilled professionals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Permanent Placement
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#staffingAccordion">
                            <div class="accordion-body">
                                We help you find the right candidates for permanent roles, ensuring they align with your company’s culture and goals.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Contract-to-Hire
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#staffingAccordion">
                            <div class="accordion-body">
                                Evaluate a candidate’s fit with a contract-to-hire arrangement before making a full-time commitment.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                On-Demand Staffing
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#staffingAccordion">
                            <div class="accordion-body">
                                Quickly scale your workforce up or down based on seasonal demands or project-based needs.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industries We Serve Section -->
<section class="industries-section" id="industries">
    <div class="industries-container">
        <h2>Industries We Serve</h2>
        <p>We specialise in a wide range of industries</p>

        <div class="industries-grid">
            @foreach ($industries->take(6) as $industry)
                <div class="industry-card" onclick="window.location='{{ route('industries.show', $industry->id) }}'">
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



<!-- Benefits Section -->
<section class="benefits-section" id="benefits">
    <div class="benefits-container">
        <h2>Benefits of Working With Us</h2>
        <p>Discover what sets us apart in the industry</p>
        
        <div class="benefits-grid">
            <div class="benefit-card">
                <div class="icon-container">
                    <img src="https://img.icons8.com/?size=100&id=AEwvD3ieEChc&format=png&color=000000" alt="Indigenous Services">
                </div>
                <h3>Indigenous Services</h3>
                <p>Support for Indigenous communities with dedicated services and initiatives.</p>
            </div>

            <div class="benefit-card">
                <div class="icon-container">
                    <img src="https://img.icons8.com/?size=100&id=3re7NbcmacZY&format=png&color=000000" alt="No Hidden Fees">
                </div>
                <h3>No Hidden Fees</h3>
                <p>Transparent pricing with no unexpected charges or hidden costs.</p>
            </div>

            <div class="benefit-card">
                <div class="icon-container">
                    <img src="https://img.icons8.com/?size=100&id=46315&format=png&color=000000" alt="We Do All The Work">
                </div>
                <h3>We Do All The Work</h3>
                <p>From start to finish, we handle every aspect of recruitment for you.</p>
            </div>

            <div class="benefit-card">
                <div class="icon-container">
                    <img src="https://img.icons8.com/?size=100&id=T5ATsUangzQW&format=png&color=000000" alt="Certifications & Compliance">
                </div>
                <h3>Certifications & Compliance</h3>
                <p>Fully certified with industry-leading standards to ensure quality and compliance.</p>
            </div>

            <div class="benefit-card">
                <div class="icon-container">
                    <img src="https://img.icons8.com/?size=100&id=12258&format=png&color=000000" alt="OHS Compliance">
                </div>
                <h3>OHS Compliance</h3>
                <p>Strict adherence to Occupational Health and Safety regulations.</p>
            </div>

            <div class="benefit-card">
                <div class="icon-container">
                    <img src="https://img.icons8.com/?size=100&id=63649&format=png&color=000000" alt="Full Recruitment Process">
                </div>
                <h3>Full Recruitment Process</h3>
                <p>Comprehensive recruitment solutions tailored to meet your unique needs.</p>
            </div>
        </div>
    </div>
</section>



<!-- Employer Registration Section -->
<section class="employer-registration-section" id="employer-registration">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Image Section -->
            <div class="col-md-6">
                <img src="{{ asset('images/job1.jpg') }}" alt="Employer Registration" class="img-fluid rounded">
            </div>
            
            <!-- Registration Form Section -->
            <div class="col-md-6">
                <h2 class="section-title">Do you need to fill a position?</h2>
                <p class="section-description">Find the perfect candidates for your vacancies. Leave the details of your job openings with us, and our expert team will connect you with qualified candidates who meet your requirements.</p>
                
                <form action="{{ route('employers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <!-- Job Details Row -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="role_type" class="form-label">Role Type</label>
            <input type="text" name="role_type" id="role_type" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            <input type="text" name="job_title" id="job_title" class="form-control" required>
        </div>
    </div>
    
    <!-- Start Date, State, and Job Location Row -->
    <div class="row">
        <div class="col-md-4 mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control">
        </div>
        <div class="col-md-4 mb-3">
            <label for="state" class="form-label">State</label>
            <select name="state" id="state" class="form-control">
                <option value="" disabled selected>Select State</option>
                <option value="NSW">NSW</option>
            <option value="VIC">VIC</option>
            <option value="QLD">QLD</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="NT">NT</option>
            <option value="ACT">ACT</option>
            <option value="TAS">TAS</option>
                <!-- Add additional states as needed -->
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <label for="job_location" class="form-label">Job Location</label>
            <input type="text" name="job_location" id="job_location" class="form-control">
        </div>
    </div>
    
    <!-- File Upload -->
    <div class="mb-3">
        <label for="job_description" class="form-label">Job Description (File Size < 5MB | PDF, DOCX)</label>
        <input type="file" name="job_description" id="job_description" class="form-control" required>
    </div>
    
    <!-- Contact Information Row -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="full_name" class="form-label">Full Name</label>
            <input type="text" name="full_name" id="full_name" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="company_name" class="form-label">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control" required>
        </div>
    </div>
    
    <!-- Additional Contact Information Row -->
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" name="contact_number" id="contact_number" class="form-control" required>
        </div>
    </div>

    <!-- Additional Information -->
    <div class="mb-3">
        <label for="additional_info" class="form-label">Additional Information</label>
        <textarea name="additional_info" id="additional_info" class="form-control" rows="3"></textarea>
    </div>

    <!-- Submit Button -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary btn-lg">Submit a Vacancy</button>
    </div>
    
    <!-- Error Display -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
        padding-top: 200px !important;
    }

    .hero-section-employers h1 {
        font-size: 2rem;
    }

    .hero-section-employers p {
        font-size: 1rem;
    }
}


.staffing-solutions-section {
    background-color: #f8f9fa;
    padding: 60px 0;
}

.staffing-solutions-section h2 {
    font-size: 2rem;
    color: #1a1f71;
}

.staffing-solutions-section .accordion-button {
    background-color: #fff;
    color: #1a1f71;
    font-weight: bold;
    border: none;
    outline: none;
    box-shadow: none;
    transition: background-color 0.3s ease;
}

.staffing-solutions-section .accordion-button:hover,
.staffing-solutions-section .accordion-button:focus {
    background-color: #ececec;
}

.staffing-solutions-section .accordion-item {
    border: none;
    margin-bottom: 1rem;
}

.staffing-solutions-section .accordion-item:last-child {
    margin-bottom: 0;
}

.staffing-solutions-section .accordion-body {
    background-color: #fff;
    color: #555;
    border-top: 1px solid #ddd;
}

.staffing-solutions-section .img-fluid {
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}










.benefits-section {
    padding: 100px 20px;
    background: #F3F4F6;
    text-align: center;
}

.benefits-container {
    max-width: 1200px;
    margin: 0 auto;
}

.benefits-container h2 {
    font-size: 2.5em;
    color: #1A1A40;
    font-weight: 700;
    margin-bottom: 10px;
}

.benefits-container p {
    font-size: 1.2em;
    color: #4F46E5;
    font-weight: 600;
    margin-bottom: 50px;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 30px;
}

.benefit-card {
    position: relative;
    background: linear-gradient(135deg, #1D2774, #4281cd);
    color: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    z-index: 1;
}

.benefit-card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 60px;
    height: 60px;
    background: #E0E7FF;
    clip-path: polygon(0 0, 100% 0, 0 100%);98u
    z-index: -1;
    transition: transform 0.3s ease;
}

.benefit-card:hover::before {
    transform: scale(1.2);
}

.benefit-card:hover {
    transform: translateY(-8px);
    box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.2);
}

.icon-container {
    width: 70px;
    height: 70px;
    background-color: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    transition: background-color 0.3s ease;
}

.icon-container img {
    width: 32px;
    height: 32px;
    /* filter: brightness(0) invert(1); */
    transition: transform 0.3s ease;
}

.benefit-card:hover .icon-container {
    background-color: rgba(255, 255, 255, 0.25);
}

.benefit-card:hover .icon-container img {
    transform: scale(1.1);
}

.benefit-card h3 {
    font-size: 1.25em;
    margin-bottom: 10px;
    font-weight: 700;
    color: #fff;
}

.benefit-card p {
    font-size: 1em;
    line-height: 1.6;
    color: #dcdcdc;
}

/* Responsive Design */
@media (max-width: 768px) {
    .benefits-container h2 {
        font-size: 2em;
    }

    .benefits-container p {
        font-size: 1.1em;
    }
}



    .faq-section {
        background-color: #f7f9fc;
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
    }



    .employer-registration-section {
    padding: 60px 20px;
    background-color: #f9fafb;
}

.section-title {
    font-size: 2em;
    color: #222;
    margin-bottom: 10px;
}

.section-description {
    font-size: 1.1em;
    color: #555;
    margin-bottom: 30px;
}

.form-label {
    font-weight: 600;
    color: #333;
}

.form-control {
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
}

.form-control:focus {
    border-color: #6366f1;
    box-shadow: 0 0 5px rgba(99, 102, 241, 0.4);
}

.btn-primary {
    background-color: #6366f1;
    border: none;
    padding: 12px 30px;
    color: #fff;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #4f46e5;
}


    </style>



</x-layouts.main>
