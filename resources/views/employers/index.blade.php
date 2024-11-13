<x-app-layout>

<div class="container">
    <h1>Employers</h1>
    <a href="{{ route('employers.create') }}" class="btn btn-primary">Add New Employer</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Role Type</th>
                <th>Job Title</th>
                <th>Company Name</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Job Description</th>
                <th>Start Date</th> <!-- New Column -->
                <th>State</th> <!-- New Column -->
                <th>Job Location</th> <!-- New Column -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employers as $employer)
                <tr>
                    <td>{{ $employer->role_type }}</td>
                    <td>{{ $employer->job_title }}</td>
                    <td>{{ $employer->company_name }}</td>
                    <td>{{ $employer->full_name }}</td>
                    <td>{{ $employer->email }}</td>
                    <td>{{ $employer->contact_number }}</td>
                    <td>
                        @if($employer->job_description_path)
                            <a href="{{ asset('storage/' . $employer->job_description_path) }}" target="_blank">View File</a>
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $employer->start_date ? \Carbon\Carbon::parse($employer->start_date)->format('Y-m-d') : 'N/A' }}</td> <!-- New Field -->
                    <td>{{ $employer->state ?? 'N/A' }}</td> <!-- New Field -->
                    <td>{{ $employer->job_location ?? 'N/A' }}</td> <!-- New Field -->
                    <td>
                        <a href="{{ route('employers.show', $employer->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('employers.edit', $employer->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('employers.destroy', $employer->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>
