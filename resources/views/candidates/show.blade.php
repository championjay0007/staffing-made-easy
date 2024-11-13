<x-app-layout>
<section>
<div class="container">
    <h1>Candidate Profile: {{ $candidate->first_name }} {{ $candidate->last_name }}</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>Email:</strong> {{ $candidate->email }}</li>
        <li class="list-group-item"><strong>Phone:</strong> {{ $candidate->phone }}</li>
        <li class="list-group-item"><strong>Address:</strong> {{ $candidate->address }}</li>
        <li class="list-group-item"><strong>State:</strong> {{ $candidate->state }}</li>
        <li class="list-group-item"><strong>Qualification:</strong> {{ $candidate->qualification }}</li>
        <li class="list-group-item"><strong>Experience:</strong> {{ $candidate->experience }}</li>
        <li class="list-group-item"><strong>Additional Information:</strong> {{ $candidate->additional_info }}</li>
        <li class="list-group-item"><strong>Resume:</strong>
            @if ($candidate->resume_path)
                <a href="{{ asset('storage/' . $candidate->resume_path) }}" target="_blank" class="btn btn-link">View Resume</a>
                |
                <a href="{{ route('candidates.download', $candidate->id) }}" class="btn btn-link">Download Resume</a>
            @else
                <span>No resume uploaded.</span>
            @endif
        </li>
    </ul>

    <!-- Button to trigger the modal -->
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#respondModal">
        Respond to Candidate
    </button>
    
    <a href="{{ route('candidates.index') }}" class="btn btn-secondary mt-3">Back to Candidates</a>
</div>

<!-- Respond Modal -->
<div class="modal fade" id="respondModal" tabindex="-1" aria-labelledby="respondModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="respondModalLabel">Respond to {{ $candidate->first_name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Response Form -->
                <form action="{{ route('candidates.sendResponse', $candidate->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="responseMessage" class="form-label">Message</label>
                        <textarea name="message" id="responseMessage" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Response</button>
                </form>
            </div>
        </div>
    </div>
</div>


</section>
</x-app-layout>