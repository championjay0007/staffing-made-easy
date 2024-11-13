<x-app-layout>

<div class="container">
    <h1>Registered Candidates</h1>
    <a href="{{ route('candidates.create') }}" class="btn btn-success mb-3">Add New Candidate</a>

    @if ($candidates->isEmpty())
        <p>No candidates registered yet.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>State</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidates as $candidate)
                    <tr>
                        <td>{{ $candidate->id }}</td>
                        <td>{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                        <td>{{ $candidate->email }}</td>
                        <td>{{ $candidate->phone }}</td>
                        <td>{{ $candidate->state }}</td>
                        <td>
                            <a href="{{ route('candidates.show', $candidate->id) }}" class="btn btn-info">View</a>
                            <form action="{{ route('candidates.destroy', $candidate->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-secondary" style="background-color:red;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h2>Candidate Registrations by State</h2>
    <canvas id="candidateChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('candidateChart').getContext('2d');
        
        // Data from the server
        var candidateData = {!! json_encode($candidatesByState) !!};
        var states = Object.keys(candidateData);
        var counts = Object.values(candidateData);

        new Chart(ctx, {
            type: 'bar', // Change to 'pie' or 'line' for different chart types
            data: {
                labels: states,
                datasets: [{
                    label: 'Number of Candidates',
                    data: counts,
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

</x-app-layout>
