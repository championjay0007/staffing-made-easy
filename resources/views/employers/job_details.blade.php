
<x-layouts.main>
<section class="job-details-section py-5">
    <div class="container">
        <div class="card job-details-card shadow-lg">
            <div class="card-body">
                <h1 class="job-title">{{ $employer->job_title }}</h1>
                <hr>
                <p><strong>Company:</strong> <span class="text-primary">{{ $employer->company_name }}</span></p>
                <p><strong>Role Type:</strong> {{ $employer->role_type }}</p>
                <p><strong>Location:</strong> {{ $employer->job_location ?? 'Not specified' }}</p>
                <p><strong>Start Date:</strong> {{ $employer->start_date ? \Carbon\Carbon::parse($employer->start_date)->format('F j, Y') : 'Not specified' }}</p>
                <p><strong>Contact:</strong> <a href="mailto:{{ $employer->email }}" class="text-decoration-underline">{{ $employer->email }}</a></p>
                
                @if($employer->job_description_path)
                    <p>
                        <a href="{{ asset('storage/' . $employer->job_description_path) }}" target="_blank" class="btn btn-outline-secondary mt-2">
                            View Job Description Document
                        </a>
                    </p>
                @endif
                
                <div class="additional-info mt-4">
                    <h5 class="text-secondary">Job Description</h5>
                    <p>{{ $employer->additional_info }}</p>
                </div>
                
                <!-- Apply Button -->
                <a href="javascript:void(0)" class="btn btn-primary btn-lg mt-4 apply-button" onclick="showApplicationForm()">Apply Now</a>
            </div>
        </div>
    </div>
</section>

<!-- Application Form Section (Initially hidden) -->
<div class="application-form-container" id="applicationForm" style="display: none;">
    <div class="container">
        <div class="card shadow-lg">
            <div class="card-body">
                <h2>Let us find your dream job</h2>
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
                        <select name="state" class="form-control" required>
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
                        <label for="resume" class="form-label">Attach Your CV (File Size < 5MB | pdf, docx)</label>
                        <input type="file" name="resume" id="resume" class="form-control" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit Application</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
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

<!-- Custom CSS and JavaScript -->
<style>

.job-details-section{
padding-top:100px !important;

}

    .application-form-container {
        display: none;
        background-color: #f8f9fa;
        padding: 40px 0;
    }

    .job-title {
        color: #0d1b3d;
        font-weight: 700;
    }

    .apply-button {
        background-color: #4a90e2;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        padding: 15px;
        width: 100%;
        transition: background-color 0.3s;
    }

    .apply-button:hover {
        background-color: #357ABD;
    }

    .application-form-container .card {
        padding: 30px;
        max-width: 800px;
        margin: 0 auto;
    }

    .form-control {
        border-radius: 8px;
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        border-radius: 8px;
        font-weight: 600;
        padding: 12px;
        width: 100%;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-outline-secondary {
        border-radius: 8px;
    }

</style>

<script>
    function showApplicationForm() {
        document.getElementById('applicationForm').style.display = 'block';
        window.scrollTo({
            top: document.getElementById('applicationForm').offsetTop,
            behavior: 'smooth'
        });
    }
</script>

</x-layouts.main>
