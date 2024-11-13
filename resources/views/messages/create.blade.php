<x-app-layout>
<div class="container">
    <h1>Send Message to Candidates</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('messages.store') }}" method="POST">
    @csrf

    <!-- Message Content -->
    <div class="mb-3">
        <label for="content" class="form-label">Message Content</label>
        <textarea name="content" id="messages-editor" class="form-control" required></textarea>
    </div>

    <!-- Scheduled Time -->
    <div class="mb-3">
        <label for="scheduled_at" class="form-label">Schedule Time (optional)</label>
        <input type="datetime-local" name="scheduled_at" id="scheduled_at" class="form-control">
    </div>

    <!-- Select Candidates -->
    <div class="mb-3">
        <label for="candidates" class="form-label">Select Candidates</label>
        <select name="candidates[]" id="candidates" class="form-control" multiple>
            @foreach($candidates as $candidate)
                <option value="{{ $candidate->id }}">{{ $candidate->first_name }} {{ $candidate->last_name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
</div>



<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        
       
        CKEDITOR.replace('messages-editor');
    </script>
</x-app-layout>