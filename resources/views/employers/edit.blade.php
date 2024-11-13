<x-app-layout>

<div class="container">
    <h1>Edit Employer</h1>
    
    <form action="{{ route('employers.update', $employer->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @include('employers.form', ['employer' => $employer])
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


</x-app-layout>