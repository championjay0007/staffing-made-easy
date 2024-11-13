<x-app-layout>
<div class="container">
    <h1>Industries Served</h1>
    <a href="{{ route('industries.create') }}" class="btn btn-primary mb-3">Add New Industry</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($industries as $industry)
                <tr>
                    <td>{{ $industry->name }}</td>
                    <td>{{ Str::limit($industry->description, 50) }}</td>
                    <td>
                        <a href="{{ route('industries.show', $industry) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('industries.edit', $industry) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('industries.destroy', $industry) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</x-app-layout>