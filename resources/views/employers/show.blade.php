<x-app-layout>

<div class="container my-5">
    <h1 class="mb-4">{{ $employer->job_title }} at {{ $employer->company_name }}</h1>

    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Role Type</th>
                <td>{{ $employer->role_type }}</td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td>{{ $employer->full_name }}</td>
            </tr>
            <tr>
                <th>Company Name</th>
                <td>{{ $employer->company_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $employer->email }}</td>
            </tr>
            <tr>
                <th>Contact Number</th>
                <td>{{ $employer->contact_number }}</td>
            </tr>
            <tr>
                <th>Additional Information</th>
                <td>{{ $employer->additional_info }}</td>
            </tr>
            <tr>
                <th>Start Date</th>
                <td>{{ $employer->start_date ? \Carbon\Carbon::parse($employer->start_date)->format('Y-m-d') : 'N/A' }}</td>
            </tr>
            <tr>
                <th>State</th>
                <td>{{ $employer->state ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>Job Location</th>
                <td>{{ $employer->job_location ?? 'N/A' }}</td>
            </tr>
            <tr>
                <th>Job Description</th>
                <td>
                    @if($employer->job_description_path)
                        <a href="{{ asset('storage/' . $employer->job_description_path) }}" target="_blank">View File</a>
                    @else
                        N/A
                    @endif
                </td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('employers.index') }}" class="btn btn-secondary mt-4">Back to list</a>
</div>

</x-app-layout>
