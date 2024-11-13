
<div class="form-group">
    <label for="role_type">Role Type</label>
    <input type="text" name="role_type" class="form-control" value="{{ old('role_type', $employer->role_type ?? '') }}" required>
</div>

<div class="form-group">
    <label for="job_title">Job Title</label>
    <input type="text" name="job_title" class="form-control" value="{{ old('job_title', $employer->job_title ?? '') }}" required>
</div>

<div class="form-group">
    <label for="job_description">Job Description (PDF, DOCX)</label>
    <input type="file" name="job_description" class="form-control">
</div>

<div class="form-group">
    <label for="full_name">Full Name</label>
    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $employer->full_name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="company_name">Company Name</label>
    <input type="text" name="company_name" class="form-control" value="{{ old('company_name', $employer->company_name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $employer->email ?? '') }}" required>
</div>

<div class="form-group">
    <label for="contact_number">Contact Number</label>
    <input type="text" name="contact_number" class="form-control" value="{{ old('contact_number', $employer->contact_number ?? '') }}" required>
</div>

<div class="form-group">
    <label for="additional_info">Additional Information</label>
    <textarea name="additional_info" class="form-control">{{ old('additional_info', $employer->additional_info ?? '') }}</textarea>
</div>



